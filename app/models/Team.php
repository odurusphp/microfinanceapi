<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/21/2019
 * Time: 2:41 PM
 */

class Team extends tableDataObject
{

    const TABLENAME = 'teams';

    public static function getTotalCount(){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from teams  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCountbyName($name){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from teams where team = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getTeamIdByName($name){
        global $connectedDb;
        $getdata = "SELECT tid from teams where team = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }


    public static function getAllData($page, $limit){
        global $connectedDb;
        $getdata = "SELECT * from teams limit $page, $limit  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from teams where tid = $id  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getUserByTeam($team){
        global $connectedDb;
        $getdata = "SELECT * from team_users  where team = '$team' ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }



}