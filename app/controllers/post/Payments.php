<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/15/2019
 * Time: 3:12 PM
 */

class Payments extends PostController
{


    public function pay($basicid = null){
        $rs = new RestApi();

        $requiredfieldnames = ['amount', 'dateofpayment'];

        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : '';
        $dateofpayment = isset($_POST['dateofpayment']) ? trim($_POST['dateofpayment']) : '';
        $userid = isset($_POST['userid']) ? trim($_POST['userid']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);


        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $idt = new Paymentdata();
        $idt->recordObject->amount = $amount;
        $idt->recordObject->dateofpayment = $dateofpayment;
        $idt->recordObject->bid = $basicid;
        $idt->recordObject->userid = $userid;
        if($idt->store()) {
            $ba = new Basicinformation($basicid);
            $telephone = $ba->recordObject->telephone;
            textsms($telephone, $amount);
            textsmsowner($amount, $telephone);
            $data = ['message' => 'Payment successfully made', 'basicid' => $basicid];
            $rs->returnResponse($data);
        }

    }
}