<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 10:13 AM
 */

class Tags extends Controller
{

    public function tag($tagid = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Checking if team ID is null;
        if($tagid == null){
            $rs->throwErrror('TG_02', TM_02, 'Tag ID');
        }

        //Check if user Id Exists;
        $tagcount = Tagdata::getCountById($tagid);
        if($tagcount == 0) {
            $rs->throwErrror('TG_03', TG_03, 'Tag ID');
        }

        //Getting the actual Api method
        $tm = new Tagdata($tagid);
        $tagdata  =  $tm->recordObject;
        $rs->returnResponse($tagdata);
    }

    public function listall(){
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Calling pagination class
        $pag = Pagination::paginate();
        $page = $pag['page'];
        $limit = $pag['limit'];

        //Getting the actual Api method
        $tagdata = Tagdata::getAllData($page, $limit);

        $rs->returnResponse($tagdata);
    }

    public function listallnolimit(){
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Getting the actual Api method
        $tagdata = Tagdata::getAllNoLimit();

        $rs->returnResponse($tagdata);
    }

    public function delete($tagid = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $method = $_SERVER['REQUEST_METHOD'];

        if($method !== 'DELETE') {
            $rs->throwErrror('REQUEST_METHOD_NOT_VALID', 'Request method not allowed', 'Request Method');
        }


        //Checking if user ID is null;
        if($tagid == null){
            $rs->throwErrror('TG_02', TG_02, 'tag id');
        }

        //Check if user Id Exists;
        $tagcount = Tagdata::getCountById($tagid);
        if($tagcount == 0) {
            $rs->throwErrror('TG_02', TG_02, 'tag id');
        }

        $us = new Tagdata($tagid);
        $us->deleteFromDB();

        $data= ['message'=>'Tag successfully deleted', 'tag id'=>$tagid];
        $rs->returnResponse($data);


    }

}