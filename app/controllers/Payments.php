<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/15/2019
 * Time: 3:46 PM
 */

class Payments extends Controller
{

    public function all($basicid)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Getting the actual Api method
        $customerdata = Paymentdata::getpaymentID($basicid);
        $alluserdata = ['paymentdata'=>$customerdata];

        $rs->returnResponse($alluserdata);

    }

}