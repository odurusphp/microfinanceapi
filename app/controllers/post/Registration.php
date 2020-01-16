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
        $accounttype  = isset($_POST['accounttype']) ? trim($_POST['accounttype']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);



        //Staff number logic changed
        $minid  = Customernumbers::getnextaccount();
        $cm  = new Customernumbers($minid);
        $staffnumber = $cm->recordObject->code;

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
        $usdata->dateregistered = date('Y-m-d');
        $usdata->fullname =  $firstname.' '.$lastname;
        $usdata->staffnumber  =  $staffnumber;


        if($us->store()){
            $bid = $us->recordObject->bid;

            //Update status
            $st  = new Customernumbers($minid);
            $st->recordObject->status = 1;
            $st->store();
            $data = ['message'=>'Customer successfully created', 'userid'=>$userid, 'basicid'=>$bid  ];
            $rs->returnResponse($data);

        }

    }

    public function update($basicid){

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

        $us = new Basicinformation($basicid);
        $usdata =& $us->recordObject;
        $usdata->email = $email;
        $usdata->telephone = $telephone;
        $usdata->firstname = $firstname;
        $usdata->lastname = $lastname;
        $usdata->gender = $gender;
        $usdata->nationality = $nationality;
        $usdata->gender = $gender;
        $usdata->dateofbirth  = $dateofbirth;
        $usdata->dateregistered = date('Y-m-d');
        $usdata->fullname =  $firstname.' '.$lastname;


        if($us->store()){
            $bid = $us->recordObject->bid;
            $data = ['message'=>'Customer successfully updated', 'basicid'=>$bid  ];
            $rs->returnResponse($data);

        }

    }

    public function location($basicid){

        $rs = new RestApi();

        $requiredfieldnames = ['city', 'streetaddress', 'region', 'landmark', 'postaladdress',
                               'prevaddress', 'lengthofstay'];

        $city = isset($_POST['city']) ? trim($_POST['city']) : '';
        $streetaddress = isset($_POST['streetaddress']) ? trim($_POST['streetaddress']) : '';
        $region = isset($_POST['region']) ? trim($_POST['region']) : '';
        $landmark = isset($_POST['landmark']) ? trim($_POST['landmark']) : '';
        $postaladdress = isset($_POST['postaladdress']) ? trim($_POST['postaladdress']) : '';
        $prevaddress  = isset($_POST['prevaddress']) ? trim($_POST['prevaddress']) : '';
        $lengthofstay  = isset($_POST['lengthofstay']) ? trim($_POST['lengthofstay']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);



        $us = new Basicinformation($basicid);
        $usdata =& $us->recordObject;
        $usdata->city = $city;
        $usdata->street = $streetaddress;
        $usdata->region = $region;
        $usdata->landmark = $landmark;
        $usdata->postaladdress = $postaladdress;
        $usdata->previousaddress = $prevaddress;
        $usdata->lengthofstay = $lengthofstay;


        if($us->store()){
            $bid = $us->recordObject->bid;
            $data = ['message'=>'Customer successfully updated', 'basicid'=>$bid  ];
            $rs->returnResponse($data);

        }

    }

    public function advanced($basicid){

        $rs = new RestApi();



        $requiredfieldnames = ['maritalstatus', 'occupation', 'employer', 'position', 'spousename', 'spousetelephone',
                             'spouseoccupation', 'spousenationality', 'religion'];

        $maritalstatus = isset($_POST['maritalstatus']) ? trim($_POST['maritalstatus']) : '';
        $occupation = isset($_POST['occupation']) ? trim($_POST['occupation']) : '';
        $employer = isset($_POST['employer']) ? trim($_POST['employer']) : '';
        $position = isset($_POST['position']) ? trim($_POST['position']) : '';
        $spousename = isset($_POST['spousename']) ? trim($_POST['spousename']) : '';
        $spousetelephone  = isset($_POST['spousetelephone']) ? trim($_POST['spousetelephone']) : '';
        $spousenationality  = isset($_POST['spousenationality']) ? trim($_POST['spousenationality']) : '';
        $religion  = isset($_POST['religion']) ? trim($_POST['religion']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $us = new Basicinformation($basicid);
        $usdata =& $us->recordObject;
        $usdata->maritalstatus = $maritalstatus;
        $usdata->position = $position;
        $usdata->religion = $religion;
        $usdata->occupation = $occupation;
        $usdata->employer = $employer;
        $usdata->spousename = $spousename;
        $usdata->spousetelephone = $spousetelephone;
        $usdata->spousenationality = $spousenationality;

        if($us->store()){
            $bid = $us->recordObject->bid;
            $data = ['message'=>'Customer successfully updated', 'basicid'=>$bid  ];
            $rs->returnResponse($data);

        }

    }
}