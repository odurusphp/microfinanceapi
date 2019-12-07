<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 4/18/2019
 * Time: 10:26 AM
 */

class User extends BaseUser
{


    public static function getUserByParam($param ,$searchvalue){
        $rowbyparam = parent::getRecordByParams(self::TABLENAME,array($param => $searchvalue));

        if((!$rowbyparam) || count($rowbyparam) !== 1){
            return false;
        } else {
            $userbyparam = new User($rowbyparam->uid);
            return $userbyparam;
        }

    }


    public static function passwordMD5($password){
        return md5($password);
    }

    public static function checkUserCredentials($email, $password){
        global $connectedDb;
        $password = md5($password);
        $query = "select count(*) as count from users where email  = '$email' and password = '$password' and status is null ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function userIdByEmail($email){
        global $connectedDb;
        $query = "select uid from users where email  = '$email'  ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getCountByUserId($userid){
        global $connectedDb;
        $query = "select count(*) as ct  from users where uid  = $userid  ";
        $uid = $connectedDb->prepare($query);
        $uid = $connectedDb->fetchColumn();
        return $uid;
    }

    public static function getUserCount(){
        global $connectedDb;
        $query = "select count(*) as ct from users  ";
        $count = $connectedDb->prepare($query);
        $count = $connectedDb->fetchColumn();
        return $count;
    }


    public static function getUserCountByEmail($email){
        global $connectedDb;
        $query = "select count(*) as ct from users where email  = '$email'  ";
        $count = $connectedDb->prepare($query);
        $count = $connectedDb->fetchColumn();
        return $count;
    }

    public static function getUserByEmail($email){
        global $connectedDb;
        $query = "select * from users where email  = '$email'  ";
        $connectedDb->prepare($query);
        return $connectedDb->singleRecord();

    }

    public static function getUserCountbyUserID($uid){
        global $connectedDb;
        $query = "select count(*) as ct from users  where uid = $uid ";
        $count = $connectedDb->prepare($query);
        $count = $connectedDb->fetchColumn();
        return $count;
    }


    public static function getrolebyUserId($uid){
        global $connectedDb;
        $query = "select roles_roleid from user_roles  where  users_uid  = $uid  ";
        $roleid = $connectedDb->prepare($query);
        $roleid = $connectedDb->fetchColumn();
        return $roleid;
    }


    public static function insertUserRoles($uid, $roleid){
        global $connectedDb;
        $query = "INSERT INTO user_roles (roles_roleid, users_uid) values ($roleid, $uid)  ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function updateUserRoles($uid, $roleid){
        global $connectedDb;
        $query = "UPDATE user_roles  SET  roles_roleid = $roleid where users_uid =  $uid  ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function getRolebyRoleId($roleid){
        global $connectedDb;
        $query = "select role from roles  where  roleid = $roleid  ";
        $roleid = $connectedDb->prepare($query);
        $roleid = $connectedDb->fetchColumn();
        return $roleid;
    }

    public static function getroleIdbyRole($role){
        global $connectedDb;
        $query = "select roleid from roles  where  role = '$role'  ";
        $roleid = $connectedDb->prepare($query);
        $roleid = $connectedDb->fetchColumn();
        return $roleid;
    }

    public static function insertCustomerUser($uid, $cmid){
        global $connectedDb;
        $query = "INSERT INTO company_users  (users_uid, cmid) values ($uid, $cmid)  ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function checkCustomerUser($cmid){
        global $connectedDb;
        $query = "SELECT  count(*) as count from  company_users where cmid = $cmid   ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getBasicUserId($uid){
        global $connectedDb;
        $query = "SELECT bid from user_basic where userid = $uid";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getBusinessUserId($uid){
        global $connectedDb;
        $query = "SELECT busid from user_business where uid = $uid";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getSystemUsers(){
        global $connectedDb;
        $query = "SELECT users.* , user_roles.*  FROM  users INNER JOIN
                  user_roles ON users.uid = user_roles.users_uid  WHERE user_roles.roles_roleid = 1 ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function updatePassword($uid, $password){
        global $connectedDb;
        $password  = MD5($password);
        $query = "UPDATE users SET password = '$password' where uid = '$uid'  ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function updateUserStatus($userid, $status){
        global $connectedDb;
        $query = "UPDATE  user_reset_status SET status=$status where uid = $userid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public function deletuserrole($userid){
        global $connectedDb;
        $query = "DELETE from user_roles where users_uid = $userid  ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function  userStatus($userid, $status){
        global $connectedDb;
        $query = "INSERT INTO  user_reset_status (uid, status) VALUES ($userid, $status)   ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function  checkexpiredStutus($userid){
        global $connectedDb;
        $query = "SELECT count(*) as count  from user_reset_status where uid = $userid and status = 2";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }


    public static function updatepasswordreset($userid, $status){
        global $connectedDb;
        $query = "UPDATE  reset_password SET status=$status where uid = $userid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function insertpasswordreset($userid, $status){
        global $connectedDb;
        $query = "INSERT INTO reset_password  (uid, status) values ($userid, $status)";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function getPasswordResetCount($userid){
        global $connectedDb;
        $query = "SELECT count(*) as ct from  reset_password where uid = $userid";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function deleteCompanyUsers($uid, $cmid){
        global $connectedDb;
        $query = "DELETE from  company_users  where users_uid  = $uid and cmid  = $cmid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function deleteAllCompanyUsers($cmid){
        global $connectedDb;
        $query = "DELETE from  company_users  where  cmid  = $cmid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function deactivateUser($userid){
        global $connectedDb;
        $query = "UPDATE  users SET status=5 where uid = $userid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function companyUserCount($cmid){
        global $connectedDb;
        $query = "SELECT count(*) as ct from company_users where cmid = $cmid ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }


    public static function getSystemUsersCount(){
        global $connectedDb;
        $query = "SELECT count(*) as ct  FROM  users INNER JOIN
                  user_roles ON users.uid = user_roles.users_uid  WHERE user_roles.roles_roleid = 1 ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }


    public static function insertUserbasic($userid, $basicid){
        global $connectedDb;
        $query = "INSERT INTO  users_basic (uid, bid) values ($userid, $basicid)";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function getUserBaic($userid, $basicid){
        global $connectedDb;
        $query = "INSERT INTO  users_basic (uid, bid) values ($userid, $basicid)";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function insertUserRole($userid, $roleid){
        global $connectedDb;
        $query = "INSERT INTO  user_roles (users_uid, roles_roleid) values ($userid, $roleid)";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function insertTeamUsers($team, $uid){
        global $connectedDb;
        $query = "INSERT INTO  team_users (team, uid) values ('$team', $uid)";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function updateUserTeam($team, $uid){
        global $connectedDb;
        $query = "UPDATE  team_users set team = '$team' where uid = $uid";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }


    public static function roleCount($role){
        global $connectedDb;
        $query = "SELECT count(*) as ct from  roles where role = '$role' ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getUserData($page, $limit){
        global $connectedDb;
        $query = "select * from users where status is null limit $page, $limit ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();

    }

    public static function searchUserData($page, $limit, $parameter){
        global $connectedDb;
        $query = "Select * from users where status is null and 
                  (firstname like '$parameter%' OR lastname like '$parameter%' 
                   OR email  like '$parameter%')
                   limit $page, $limit";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function searchUserDataCount($parameter){
        global $connectedDb;
        $query = "Select count(*) as ct  from users where status is null and 
                  (firstname like '$parameter%' OR  lastname like '$parameter%'
                   OR email  like '$parameter%')";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getRoles(){
        global $connectedDb;
        $query = "SELECT role from roles ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function getTeamByUserid($userid){
        global $connectedDb;
        $query = "SELECT team  from team_users where uid = $userid ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function deleterUsers($userid){
        global $connectedDb;
        $today = date('Y-m-d H:i:s');
        $query = "INSERT INTO deleted_users (userid, dateofdeletion) values ($userid, '$today') ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

}