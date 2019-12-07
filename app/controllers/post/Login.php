<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/14/2019
 * Time: 1:32 PM
 */

class Login extends PostController
{

        public function index(){

        $rs = new RestApi();

        $requiredfieldnames = ['email', 'password'];

        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $apikey = $rs->getApikey();

        //Check email
        $emailcount = User::getUserCountByEmail($email);
        if ($emailcount == 0) {
            $rs->throwErrror('USR_05', USR_05, 'email');
        }

        //Check user credential
        $usercount = User::checkUserCredentials($email, $password);
        if ($usercount == 0) {
            $rs->throwErrror('USR_01', USR_01, 'email, password');
        }

        $uid = User::userIdByEmail($email);
        $us = new User($uid);
        $userdata = $us->recordObject;


        $roleid = User::getrolebyUserId($uid);

        $role = User::getRolebyRoleId($roleid);

        //Generate token
        $jwt = new JwtToken();
        $tokenresposnse = $jwt->generateToken($apikey);

        $rs->returnResponse(['tokenInfo'=> $tokenresposnse, 'userdata'=>$userdata, 'role'=>$role]);

    }


}