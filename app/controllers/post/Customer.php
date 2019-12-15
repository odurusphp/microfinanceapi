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
            print_r($response);
            exit;
            $filename = $response['filename'];
            $this->savedoc($filename, 'Profile', $basicid);
            $data = ['filename'=>$filename, 'basicid'=>$basicid];
            $rs->returnResponse($data);

        }else{
            $rs->throwErrror('USR_10', USR_10, 'profile picture');
        }
    }

    private function savedoc($name, $type, $id){
        $doc = new Documents();
        $doc->recordObject->name = $name;
        $doc->recordObject->type = $type;
        $doc->recordObject->bid = $id;
        $doc->store();
    }

}