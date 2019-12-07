<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/7/2019
 * Time: 4:37 PM
 */

class Useraccounts extends Controller
{
    public function userlist(){


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
        $userdata = User::getUserData($page, $limit);
        $usercount = User::getUserCount();

        $alluserdata = [];

        foreach($userdata as $get){

            $userid  = $get->uid;
            $lastname = $get->lastname;
            $firstname = $get->firstname;
            $email = $get->email;

            $basicdata = Basicinformation::getBasicInfoById($userid);
            $telephone = $basicdata->telephone;

            $roleid  = User::getrolebyUserId($userid);
            $team = User::getTeamByUserid($userid);

            $alluserdata[] = ['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email,
                'userid'=>$userid,  'roleid'=>$roleid, 'telephone'=>$telephone, 'team'=>$team ];
        }

        $data = ['userdata'=>$alluserdata, 'totalcount'=>$usercount];

        $rs->returnResponse($data);

    }


    public function search($parameter = null){


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
        $userdata = User::searchUserData($page, $limit, $parameter);
        $usercount = User::searchUserDataCount($parameter);

        $alluserdata = [];

        foreach($userdata as $get){

            $userid  = $get->uid;
            $lastname = $get->lastname;
            $firstname = $get->firstname;
            $email = $get->email;

            $basicdata = Basicinformation::getBasicInfoById($userid);
            $telephone = $basicdata->telephone;

            $roleid  = User::getrolebyUserId($userid);
            $team = User::getTeamByUserid($userid);

            $alluserdata[] = ['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email,
                'userid'=>$userid,  'roleid'=>$roleid, 'telephone'=>$telephone, 'team'=>$team ];
        }

        $data = ['userdata'=>$alluserdata, 'totalcount'=>$usercount];

        $rs->returnResponse($data);

    }



    public function user($userid = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Checking if user ID is null;
        if($userid == null){
            $rs->throwErrror('USR_O8', USR_08, 'userid');
        }

        //Check if user Id Exists;
        $usercount = User::getUserCountbyUserID($userid);
        if($usercount == 0) {
            $rs->throwErrror('USR_O7', USR_07, 'userid');
        }

        //Getting the actual Api method

        $us = new User($userid);
        $get= $us->recordObject;

        //$userid  = $get->uid;
        $lastname = $get->lastname;
        $firstname = $get->firstname;
        $email = $get->email;

        $roleid  = User::getrolebyUserId($userid);

        $alluserdata = ['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email,
            'userid'=>$userid,  'roleid'=>$roleid ];

        $rs->returnResponse($alluserdata);

    }

    public function roles(){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Api functionality
        $roledata = User::getRoles();
        $rs->returnResponse($roledata);
    }

    public function  deleteuser($userid){

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
        if($userid == null){
            $rs->throwErrror('USR_O8', USR_08, 'userid');
        }

        //Check if user Id Exists;
        $usercount = User::getUserCountbyUserID($userid);
        if($usercount == 0) {
            $rs->throwErrror('USR_O7', USR_07, 'userid');
        }

        // delete User from DB;

        $us = new User($userid);
        $us->deleteFromDB();

        // Add to deleted Users
        User::deleterUsers($userid);
        $data= ['message'=>'User successfully deleted', 'userid'=>$userid];
        $rs->returnResponse($data);

    }




}