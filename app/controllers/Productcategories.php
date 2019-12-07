<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 4:00 PM
 */

class Productcategories extends Controller
{


    public function category($categoryid  = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Checking if team ID is null;
        if($categoryid== null){
            $rs->throwErrror('CAT_02', CAT_02, 'Category ID');
        }

        //Check if user Id Exists;
        $catcount = Categories::getCountById($categoryid);
        if($catcount == 0) {
            $rs->throwErrror('CAT_03', CAT_03, 'Category ID');
        }

        //Getting the actual Api method
        $tm = new CAtegories($categoryid);
        $catdata  =  $tm->recordObject;
        $rs->returnResponse($catdata);
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
        $catdata = Tagdata::getAllData($page, $limit);

        $rs->returnResponse($catdata);
    }

    public function delete($categoryid = null){

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
        if($categoryid == null){
            $rs->throwErrror('CAT_02', CAT_02, 'Category id');
        }

        //Check if user Id Exists;
        $catcount = Categories::getCountById($categoryid);
        if($catcount == 0) {
            $rs->throwErrror('CAT_02', CAT_02, 'Category id');
        }

        $us = new Categories($catcount);
        $us->deleteFromDB();

        $data= ['message'=>'Category successfully deleted', 'categoryid'=>$categoryid];
        $rs->returnResponse($data);


    }

}