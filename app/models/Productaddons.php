<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 10:20 AM
 */

class Productaddons extends tableDataObject
{
     const TABLENAME  = 'product_addons';

    public static function getTotalCount(){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_addons  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCountbyName($name){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_addons where addon = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getAllData($page, $limit){
        global $connectedDb;
        $getdata = "SELECT * from product_addons limit $page, $limit  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_addons where adid = $id  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }


}