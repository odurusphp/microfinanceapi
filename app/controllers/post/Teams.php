<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/21/2019
 * Time: 2:38 PM
 */

class Teams  extends PostController
{

    public function add(){

        $rs = new RestApi();

        $requiredfieldnames = ['team'];
        $team = isset($_POST['team']) ? trim($_POST['team']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $teamcount = Team::getCountbyName($team);
        if($teamcount > 0){
            $rs->throwErrror('TM_01', TM_01, 'team');
        }

        //Add Team
        $tm = new Team();
        $tm->recordObject->team = $team;
        if($tm->store()){
            $tid = $tm->recordObject->tid;
            $data = ['message'=> 'Team added successfully', 'teamid'=>$tid ];
            $rs->returnResponse($data);
        }

    }

    public function update($teamid){

        $rs = new RestApi();

        $requiredfieldnames = ['team'];
        $team = isset($_POST['team']) ? trim($_POST['team']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $teamcount = Team::getCountbyName($team);
        if($teamcount > 0){
            $rs->throwErrror('TM_01', TM_01, 'team');
        }

        //Add Team
        $tm = new Team($teamid);
        $tm->recordObject->team = $team;
        if($tm->store()){
            $teamdata = $tm->recordObject;
            $data = ['message'=> 'Team updated successfully', 'teamdata'=>$teamdata ];
            $rs->returnResponse($data);
        }

    }
}