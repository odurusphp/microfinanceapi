<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/12/2019
 * Time: 3:52 PM
 */

class Customer extends PostController
{
    public function uploadprofile($basicid = null){
        $rs = new RestApi();


        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        if(isset($_FILES['profileimage'])){
            $uploads = new Uploads();
            $uploads->filename = $_FILES['profileimage'];
            $response = $uploads->upLoadFile();
            $filename = $response['filename'];
            $this->savedoc($filename, 'Profile', $basicid);
            $data = ['filename'=>$filename, 'basicid'=>$basicid];
            $rs->returnResponse($data);

        }else{
            $rs->throwErrror('USR_10', USR_10, 'profile picture');
        }
    }

    public function uploadidentity($basicid = null){
        $rs = new RestApi();


        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        if(isset($_FILES['profileimage'])){
            $uploads = new Uploads();
            $uploads->filename = $_FILES['profileimage'];
            $response = $uploads->upLoadFile();
            $filename = $response['filename'];
            $this->savedoc($filename, 'Identity', $basicid);
            $data = ['filename'=>$filename, 'basicid'=>$basicid];
            $rs->returnResponse($data);

        }else{
            $rs->throwErrror('USR_10', USR_10, 'profile picture');
        }
    }

    public function identity($basicid = null){
        $rs = new RestApi();

        $requiredfieldnames = ['idtype', 'idnumber', 'dateofissue', 'expirydate'];

        $idtype = isset($_POST['idtype']) ? trim($_POST['idtype']) : '';
        $idnumber = isset($_POST['idnumber']) ? trim($_POST['idnumber']) : '';
        $dateofissue = isset($_POST['dateofissue']) ? trim($_POST['dateofissue']) : '';
        $expirydate = isset($_POST['expirydate']) ? trim($_POST['expirydate']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);


        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $idt = new Identification();
        $idt->recordObject->idtype = $idtype;
        $idt->recordObject->idnumber = $idnumber;
        $idt->recordObject->expirydate = $expirydate;
        $idt->recordObject->dateofissue = $dateofissue;
        $idt->recordObject->bid = $basicid;
        $idt->store();
        $data = ['message'=>'ID successfuly saved', 'basicid'=>$basicid];
        $rs->returnResponse($data);

    }

    private function savedoc($name, $type, $id){

        $count = Documents::getDocumentbyIDCount($id, $type);
        if($count >  0){
            $doc = Documents::getDocumentbyID($id, $type);
            $did  = $doc->did;
        }else{
            $did = '';
        }
        

        $doc = new Documents($did);
        $doc->recordObject->name = $name;
        $doc->recordObject->type = $type;
        $doc->recordObject->bid = $id;
        $doc->store();
    }

}