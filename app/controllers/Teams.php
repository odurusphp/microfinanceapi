<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/21/2019
 * Time: 3:13 PM
 */

class Teams extends Controller
{

    public function team($teamid = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Checking if team ID is null;
        if($teamid == null){
            $rs->throwErrror('TM_02', TM_02, 'Team ID');
        }

        //Check if  team Id Exists;
        $teamcount = Team::getCountById($teamid);
        if($teamcount == 0) {
            $rs->throwErrror('TM_03', TM_03, 'Team ID');
        }

        //Getting the actual Api method
        $tm = new Team($teamid);
        $teamdata  =  $tm->recordObject;
        $rs->returnResponse($teamdata);
    }

    public function listall(){


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
        $teamdata = Team::getAllData($page, $limit);

        $rs->returnResponse($teamdata);
    }

    public function delete($teamid = null){

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
        if($teamid == null){
            $rs->throwErrror('TM_02', TM_02, 'team id');
        }

        //Check if user Id Exists;
        $teamcount = Team::getCountById($teamid);
        if($teamcount == 0) {
            $rs->throwErrror('TM_02', TM_02, 'team id');
        }

        $us = new Team($teamid);
        $us->deleteFromDB();

        $data= ['message'=>'Team successfully deleted', 'teamId'=>$teamid];
        $rs->returnResponse($data);

    }

    public function users($team = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $teamdata = Team::getUserByTeam($team);

        $data = [];

        foreach($teamdata as $get){
            $teamname = $get->team;
            $userid  = $get->userid;

            if($userid != null ) {
                $us = new User($userid);
                $firstname = $us->recordObject->firstname;
                $lastname = $us->recordObject->lastname;
                $email = $us->recordObject->email;
            }else{
                $firstname = '';
                $lastname = '';
                $email = '';
            }
            $data [] =  ['team'=>$teamname, 'firstname'=>$firstname, 'lastname'=>$lastname,
                         'email'=>$email, 'userid'=>$userid ];
        }
        $rs->returnResponse($data);

    }

}