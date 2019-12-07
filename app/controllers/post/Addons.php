<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 10:25 AM
 */

class Addons extends PostController
{
    public function add(){

        $rs = new RestApi();

        $requiredfieldnames = ['addon'];
        $addon= isset($_POST['addon']) ? trim($_POST['addon']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $addoncount = Productaddons::getCountbyName($addon);
        if($addoncount > 0){
            $rs->throwErrror('AD_01', AD_01, 'add on');
        }

        //Add Product Add On
        $tm = new Productaddons();
        $tm->recordObject->addon = $addon;
        if($tm->store()){
            $adid = $tm->recordObject->adid;
            $data = ['message'=> 'Product Add On  successfully', 'adid'=>$adid];
            $rs->returnResponse($data);
        }

    }

    public function update($adid=null){

        $rs = new RestApi();

        $requiredfieldnames = ['addon'];
        $addon = isset($_POST['addon']) ? trim($_POST['addon']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $addoncount = Productaddons::getCountbyName($addon);
        if($addoncount > 0){
            $rs->throwErrror('AD_01', AD_01, 'add on');
        }

        //Update Product add on
        $tm = new Productaddons($adid);
        $tm->recordObject->addon = $addon;
        if($tm->store()){
            $addondata = $tm->recordObject;
            $data = ['message'=> 'Add On updated successfully', 'addondata'=>$addondata ];
            $rs->returnResponse($data);
        }

    }
}