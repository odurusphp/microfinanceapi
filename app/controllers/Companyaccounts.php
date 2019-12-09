<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/14/2019
 * Time: 1:20 PM
 */

class Companyaccounts extends Controller
{

    public function listall(){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Getting the actual Api method

        //Calling pagination class
        $pag = Pagination::paginate();
        $page = $pag['page'];
        $limit = $pag['limit'];

        $companiesdata = Company::getCompanyListData($page, $limit);

        //Get total Count
        $datacount =  Company::getCompanyCount();

        $data = ['companies'=>$companiesdata, 'totalcount'=>$datacount ];

        $rs->returnResponse($data);

    }


    public function details($cmid = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Checking if user ID is null;
        if($cmid  == null){
            $rs->throwErrror('CM_O1', CM_01, 'company ID');
        }

        //Check if user Id Exists;
        $usercount = Company::checkCompanyexists($cmid);
        if($usercount == 0) {
            $rs->throwErrror('CM_02', CM_02, 'company ID');
        }

        //Getting the actual Api method

        $us = new Company($cmid);
        $companydata = $us->recordObject;


        $rs->returnResponse($companydata);

    }

    public function  delete($cmid = null){

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
        if($cmid  == null){
            $rs->throwErrror('CM_O1', CM_01, 'company ID');
        }

        //Check if user Id Exists;
        $usercount = Company::checkCompanyexists($cmid);
        if($usercount == 0) {
            $rs->throwErrror('CM_02', CM_02, 'company ID');
        }

        //Getting the actual Api method

        $us = new Company($cmid);
        $us->deleteFromDB();

        $data= ['message'=>'Company successfully deleted', 'CompayID'=>$cmid];
        $rs->returnResponse($data);
    }


}