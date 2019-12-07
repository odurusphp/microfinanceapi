<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 3:30 PM
 */

class Categories extends tableDataObject
{
    const TABLENAME  = 'product_categories';

    public static function getTotalCount(){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from  product_categories  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCountbyName($name){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_categories where name = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getAllData($page, $limit){
        global $connectedDb;
        $getdata = "SELECT * from product_categories limit $page, $limit  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_categories where categoryid = $id  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }
}