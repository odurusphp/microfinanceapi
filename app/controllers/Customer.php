<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/12/2019
 * Time: 3:21 AM
 */

class Customer extends Controller
{
    public function details($basicid = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Getting the actual Api method
        $us = new Basicinformation($basicid);
        $basicdata = $us->recordObject;

        //Getting Image
        $im  = Documents::getDocumentbyID($basicid);
        $image  = isset($im->name) ? $im->name : '';

        $alluserdata = ['basicdata'=>$basicdata, 'image'=>$image];

        $rs->returnResponse($alluserdata);

    }


    public function all()
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Getting the actual Api method
        $customerdata = Basicinformation::listAll();
        $alluserdata = ['customerdata'=>$customerdata];

        $rs->returnResponse($alluserdata);

    }


}