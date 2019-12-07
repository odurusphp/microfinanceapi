<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 10:00 AM
 */

class Tagdata extends tableDataObject
{

    const TABLENAME  = 'sub_product_tags';

    public static function getTotalCount(){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from  sub_product_tags  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCountbyName($name){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from sub_product_tags where tagname = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getAllData($page, $limit){
        global $connectedDb;
        $getdata = "SELECT * from sub_product_tags limit $page, $limit  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getAllNoLimit(){
        global $connectedDb;
        $getdata = "SELECT * from sub_product_tags";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getTagsID($tags){
        global $connectedDb;
        $getdata = "SELECT tagid from sub_product_tags WHERE tagname IN ($tags)";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from sub_product_tags where tagid = $id  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function insertTags($tag){
        global $connectedDb;
        $getdata = "INSERT IGNORE INTO sub_product_tags (tagname) values ('$tag')";
        $connectedDb->prepare($getdata);
        $connectedDb->execute();
    }
}