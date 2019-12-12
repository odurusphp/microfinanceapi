<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/12/2019
 * Time: 2:57 AM
 */

class Registration extends PostController
{

    public function basic($userid){

        $rs = new RestApi();

        $requiredfieldnames = ['firstname', 'lastname', 'email', 'telephone', 'dateofbirth', 'gender', 'nationality'];

        $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
        $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
        $dateofbirth = isset($_POST['dateofbirth']) ? trim($_POST['dateofbirth']) : '';
        $nationality  = isset($_POST['nationality']) ? trim($_POST['nationality']) : '';
        $gender  = isset($_POST['gender']) ? trim($_POST['gender']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $us = new Basicinformation();
        $usdata =& $us->recordObject;
        $usdata->email = $email;
        $usdata->telephone = $telephone;
        $usdata->firstname = $firstname;
        $usdata->lastname = $lastname;
        $usdata->gender = $gender;
        $usdata->nationality = $nationality;
        $usdata->gender = $gender;
        $usdata->dateofbirth  = $dateofbirth;
        $usdata->userid = $userid;
        if($us->store()){
            $bid = $us->recordObject->bid;
            $data = ['message'=>'Customer successfully created', 'userid'=>$userid, 'basicid'=>$bid  ];
            $rs->returnResponse($data);

        }

    }
}