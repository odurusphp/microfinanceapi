<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 3:52 PM
 */

class Addons extends Controller
{

    public function addon($adid = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Checking if team ID is null;
        if($adid == null){
            $rs->throwErrror('AD_02', AD_02, 'Addon  ID');
        }

        $tagcount = Productaddons::getCountById($adid);
        if($tagcount == 0) {
            $rs->throwErrror('AD_03', AD_03, 'Addon ID');
        }

        //Getting the actual Api method
        $tm = new Productaddons($adid);
        $addondata  =  $tm->recordObject;
        $rs->returnResponse($addondata);
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
        $tagdata = Productaddons::getAllData($page, $limit);

        $rs->returnResponse($tagdata);
    }

    public function delete($adid = null){

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
        if($adid == null){
            $rs->throwErrror('AD_02', AD_02, 'Addon ID');
        }

        //Check if user Id Exists;
        $addcount = Productaddons::getCountById($adid);
        if($addcount == 0) {
            $rs->throwErrror('AD_02', AD_02, 'Addon ID');
        }

        $us = new Productaddons($adid);
        $us->deleteFromDB();

        $data= ['message'=>'Product Addon  successfully deleted', 'adid'=>$adid];
        $rs->returnResponse($data);


    }




}