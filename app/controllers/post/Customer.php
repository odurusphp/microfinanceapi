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

    public function search()
    {
        $rs = new RestApi();

        $param= isset($_POST['param']) ? trim($_POST['param']) : '';

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Getting the actual Api method
        $basicdata = Basicinformation::search($param);
        $alluserdata = ['customerdata'=>$basicdata];
        $rs->returnResponse($alluserdata);

    }

    private function savedoc($name, $type, $id){

        $did  = null;

        $count = Documents::getDocumentbyIDCount($id, $type);
        if($count >  0){
            $doc = Documents::getDocumentbyID($id, $type);
            $did  = $doc->did;
        }else{
            $did =  null;
        }

        $doc = new Documents($did);
        $doc->recordObject->name = $name;
        $doc->recordObject->type = $type;
        $doc->recordObject->bid = $id;
        $doc->store();
    }

    public function accounts($bid){

        $rs = new RestApi();

        $requiredfieldnames = ['accounttype', 'accountnumber', 'accountname'];

        $accounttype = isset($_POST['accounttype']) ? trim($_POST['accounttype']) : '';
        $accountname = isset($_POST['accountname']) ? trim($_POST['accountname']) : '';
        $postfields = (array_keys($_POST));

        $accountcount = Accounts::getCountbyAccounttype($accounttype, $bid);
        if($accountcount > 0){
            $rs->throwErrror('AC01', 'Account already exits', 'account type');
        }



        $ba =  new Basicinformation($bid);
        $staffnumber = $ba->recordObject->staffnumber;

        $accountcode = '';
        if($accounttype  ==  'Loan Account'){
            $accountcode = '01';
        }elseif($accounttype  ==  'Susu Account'){
            $accountcode = '02';
        }elseif($accounttype  ==  'Savings Account'){
            $accountcode = '03';
        }elseif($accounttype  ==  'Cash Collateral'){
            $accountcode = '04';
        }elseif($accounttype  ==  'Current Account'){
            $accountcode = '05';
        }

        $currency = '001';
        $branchcode = '021';
        $accountnumber = $branchcode.$accountcode.$currency.$staffnumber;

        //Insert account
        $ac = new Accounts();
        $ac->recordObject->accountnumber = $accountnumber;
        $ac->recordObject->accounttype = $accounttype;
        $ac->recordObject->accountname = $accountname;
        $ac->recordObject->bid = $bid;
        if($ac->store()){
            $data = ['message'=>'Account successfullly Added', 'basicid'=>$bid ];
            $rs->returnResponse($data);
        }


    }

}