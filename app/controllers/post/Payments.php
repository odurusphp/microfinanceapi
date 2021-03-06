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

        $requiredfieldnames = ['amount', 'dateofpayment', 'accountnumber'];

        $amount = isset($_POST['amount']) ? trim($_POST['amount']) : '';
        $dateofpayment = isset($_POST['dateofpayment']) ? trim($_POST['dateofpayment']) : '';
        $userid = isset($_POST['userid']) ? trim($_POST['userid']) : '';
        $accountnumber = isset($_POST['accountnumber']) ? trim($_POST['accountnumber']) : '';

        //get loan count
        $loanid = null;
        $loancount =  Loandata::getLoanCountByAccoountNumber($accountnumber);
        if($loancount > 0){
            $ln = Loandata::getLoanSingleByAccoountNumberWithStatus($accountnumber);
            $loanid = isset($ln->loanid) ?  $ln->loanid  : null;
        }


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
        $idt->recordObject->accountnumber = $accountnumber;
        $idt->recordObject->bid = $basicid;
        $idt->recordObject->userid = $userid;
        $idt->recordObject->loanid = $loanid;

        if($idt->store()) {
            $ba = new Basicinformation($basicid);
            $telephone = $ba->recordObject->telephone;
            $fullname = $ba->recordObject->fullname;
            textsms($telephone, $amount);
            textsmsowner($amount, $fullname);
            $data = ['message' => 'Payment successfully made', 'basicid' => $basicid];
            $rs->returnResponse($data);
        }

    }
}