<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/7/2019
 * Time: 3:01 PM
 */

class Useraccounts extends PostController
{

    public function create(){

        $rs = new RestApi();

        $requiredfieldnames = ['firstname', 'lastname', 'email', 'role', 'telephone', 'team', 'password'];

        $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
        $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $role = isset($_POST['role']) ? trim($_POST['role']) : '';
        $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
        $team = isset($_POST['team']) ? trim($_POST['team']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';


        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Check if email exista
        $emailcount  = User::getUserCountByEmail($email);
        if($emailcount > 0){
            $rs->throwErrror('USR_04', USR_04, 'email' );
        }

        //Check if team exist
        $teamcount = Team::getCountbyName($team);
        if($teamcount == 0){
            $rs->throwErrror('TM_03', TM_03, 'team');
        }


        $rolecount  = User::roleCount($role);
        if($rolecount == 0){
            $rs->throwErrror('USR_06', USR_06, 'role' );
        }


        //Get roleid from roles table
        $roleid = User::getroleIdbyRole($role);


        //Actual Job of  this API Call
        //Inserting into the user table
        $us = new User();
        $usdata =& $us->recordObject;
        $usdata->email = $email;
        $usdata->password = 'NULL';
        $usdata->firstname = $firstname;
        $usdata->lastname = $lastname;
        $usdata->password = md5($password);
        if($us->store()){
            $uid = $us->recordObject->uid;
            //Inserting Roles
            $this->insertuserrole($uid, $roleid);
            User::userStatus($uid, 1);

            //Insert User basic details;
            $this->insertbasicinformation($firstname, $lastname, $email, $telephone, $uid);

            //Insert Team Users
            User::insertTeamUsers($team, $uid);

            //Sending Email
            $link = FRONTURL.'/resetpassword/'.$uid;
            $content = 'Your account has been created. Click on the link below to create your password';
            $ls = $this->emailmessage($firstname, $email, 'Account Creation', $link, $content);

            $data = ['message'=>'User successfully created', 'userid'=>$uid];

            //Returning success response when user is created successfully
            $rs->returnResponse($data);

        }

    }


    public function updateuser($userid = null){

        $rs = new RestApi();


        $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
        $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
        //$userid = isset($_POST['userid']) ? trim($_POST['userid']) : '';

        $requiredfieldnames = ['firstname', 'lastname', 'email'];

        //Checking if user ID is null;
        if($userid == null){
            $rs->throwErrror('USR_O8', USR_08, 'userid');
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


        //Actual Job of  this API Call
        //Updating  the user table
        $us = new User($userid);
        $usdata =& $us->recordObject;

        // Checking User email
        $oldemail = $usdata->email;

        if($oldemail != $email){
            //Check email
            $emailcount = User::getUserCountByEmail($email);

            if ($emailcount > 0) {
                $rs->throwErrror('USR_04', USR_04, 'email');
            }
        }

        $usdata->email = $email;
        $usdata->firstname = $firstname;
        $usdata->lastname = $lastname;
        if($us->store()){

            //Get basic ID from user_basic information
            $basdata = Basicinformation::getBasicInfoById($userid);
            $bid = isset($basdata->bid) ? $basdata->bid  : null;
            //Update bassic id;
            $this->updatebasicinformation($firstname,$lastname, $email, $telephone, $bid);

            //Getting User Data
            $us = $us->recordObject;
            $email = $us->email;
            $firstname = $us->firstname;
            $lastname = $us->lastname;

            //Getting basicinformation
            $bas = new Basicinformation($bid);
            $telephone = $bas->recordObject->telephone;

            $userdata = ['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'telephone'=>$telephone, 'uid'=>$userid];

            $data = ['message'=>'User data successfully updated', 'userdata'=>$userdata];
            //Returning success response when user is created successfully
            $rs->returnResponse($data);

        }

    }


    public function updaterole($userid = null){

        $rs = new RestApi();

        $role = isset($_POST['role']) ? trim($_POST['role']) : '';

        $requiredfieldnames = ['role'];

        //Checking if user ID is null;
        if($userid == null){
            $rs->throwErrror('USR_08', USR_08, 'userid');
        }

        //Checking if role exists
        $rolecount = User::roleCount($role);
        if($rolecount == 0){
            $rs->throwErrror('USR_06', USR_06, 'role');
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

        // API functionality

        // Get role id
        $roleid = User::getroleIdbyRole($role);

        //Update user role
        User::updateUserRoles($userid, $roleid);

        $data = ['message'=>'User role successfully updated', 'userid'=>$userid, 'role'=>$role];

        $rs->returnResponse($data);

    }

    public function updateteam($userid = null){

        $rs = new RestApi();

        $team = isset($_POST['team']) ? trim($_POST['team']) : '';

        $requiredfieldnames = ['team'];

        //Checking if user ID is null;
        if($userid == null){
            $rs->throwErrror('USR_08', USR_08, 'userid');
        }

        //Checking if role exists
        //Check if  team Id Exists;
        $teamcount = Team::getCountbyName($team);
        if($teamcount == 0) {
            $rs->throwErrror('TM_04', TM_04, 'Team');
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

        // API functionality


        //Update  user team
        User::updateUserTeam($team, $userid);

        $data = ['message'=>'User team successfully updated', 'userid'=>$userid, 'team'=>$team];

        $rs->returnResponse($data);

    }



    public function addcredentials(){

        $rs = new RestApi();

        $requiredfieldnames = ['userid', 'password'];

        $userid = isset($_POST['userid']) ? trim($_POST['userid']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Verify User ID
        $usercount = User::getUserCountbyUserID($userid);
        if($usercount == 0){
            $rs->throwErrror('USR_07', USR_07, 'userid');
        }


        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        // Api Functionality

        $us = new User($userid);
        $us->recordObject->password = md5($password);
        if($us->store()){

            //Update password reset link
            User::updateUserStatus($userid, 2);
            $data = ['message'=>'Password succesfully updated', 'userid'=>$userid];
            $rs->returnResponse($data);

        }




    }



    public function forgotpassword(){

        $rs = new RestApi();

        $requiredfieldnames = ['email'];
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Check if email exists
        $emailcount  = User::getUserCountByEmail($email);
        if($emailcount == 0){
            $rs->throwErrror('USR_04', USR_04, 'email' );
        }

        //Get User ID
        $userid = User::userIdByEmail($email);

        // Api Functionality
        // 1- Update password reset link
        // 2 - Send an email with the new link


        //Updating password linh
        User::updateUserStatus($userid, 1);

        $us = new User();
        $firstname = $us->recordObject->firstname;

        //Sending Email
        $link = FRONTURL.'/resetpassword/'.$userid;
        $content = 'Your account has been created. Click on the link below to create your password';
        $this->emailmessage($firstname, $email, 'Account Creation', $link, $content);

        $data = ['message'=>'User successfully created', 'userid'=>$userid];

        $rs->returnResponse($data);

    }


    public function resendpasswordlink(){
        $rs = new RestApi();

        $requiredfieldnames = ['email'];

        $email = isset($_POST['email']) ? trim($_POST['email']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Check if email exista
        $emailcount  = User::getUserCountByEmail($email);
        if($emailcount == 0){
            $rs->throwErrror('USR_04', USR_04, 'email' );
        }

        $userid = User::userIdByEmail($email);

        //Updating password link
        User::updateUserStatus($userid, 1);

        $us = new User();
        $firstname = $us->recordObject->firstname;

        //Sending Email
        $link = FRONTURL.'/resetpassword/'.$userid;
        $content = 'Your password reset request has been granted. Click on the link below to reset your password';
        $this->emailmessage($firstname, $email, 'Account Creation', $link, $content);

        $data = ['message'=>'Email successfully sent', 'userid'=>$userid];

        $rs->returnResponse($data);


    }




    private function insertuserrole($uid, $roleid){
        User::insertUserRoles($uid, $roleid);
    }

    private function insertbasicinformation ($firstname, $lastname, $email, $telephone, $userid){
        $bas = new Basicinformation();
        $basdata =& $bas->recordObject;
        $basdata->firstname = $firstname;
        $basdata->lastname = $lastname;
        $basdata->email = $email;
        $basdata->telephone = $telephone;
        if($bas->store()){
            $bid  = $bas->recordObject->bid;
            User::insertUserbasic($userid, $bid);
        }
    }

    private function updatebasicinformation ($firstname, $lastname, $email, $telephone, $bid){
        $bas = new Basicinformation($bid);
        $basdata =& $bas->recordObject;
        $basdata->firstname = $firstname;
        $basdata->lastname = $lastname;
        $basdata->email = $email;
        $basdata->telephone = $telephone;
        $bas->store();
    }




    private function emailmessage($firstname, $email, $subject, $link, $content){
        $company = COMPANYNAME ;
        $message  = "<div align='left' style='width: 500px; border:1px solid #3AC47D; padding: 10px; font-family:Verdana; font-size:12px '>";
        $message .="<div align='center'><span style='font-size:20px; font-weight:bold'>$subject</span><br/><span>$email</span><hr/><br/></div>";
        $message .= "<span>Dear $firstname, </span><br/>";
        $message .= "<span >$content</span><br/>";
        $message .= "<span>From: $company </span><hr/><br/>";
        $message .= "<div align='center'><a style='text-decoration: none' href=$link><div style='background:#3AC47D; color:#fff; border-radius: 50px; ; width: 160px; padding:10px'><span style='font-weight: 700; font-size: 15px'>Reset Password</span></div></a></div>";
        $message .= "</div>";

        $response = sendEmail(SENDER_EMAIL, $email, $subject, $message, COMPANYNAME);

        return $response;
    }

}