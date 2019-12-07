<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 11/2/2019
 * Time: 4:15 PM
 */

class ProductData extends tableDataObject
{

    const  TABLENAME  = 'products';

    public static function getTotalCount(){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from products  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCountbyName($name){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from products  where name = '$name'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getAllData($page, $limit){
        global $connectedDb;
        $getdata = "SELECT * from products limit $page, $limit  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from products where productid = $id ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function insertProductstags($productid, $tagid){
        global $connectedDb;
        $getdata = "INSERT INTO  product_tags (productid, tagid) values ($productid, $tagid)";
        $connectedDb->prepare($getdata);
        $connectedDb->execute();
    }

    public static function getTagCountById($tagid, $productid){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_tags where tagid = $tagid and productid = $productid";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getTagsbyProductId($productid){
        global $connectedDb;
        $getdata = "SELECT * from product_tags where productid = $productid ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }


    public static function insertProductsAddons($productid, $adid){
        global $connectedDb;
        $getdata = "INSERT INTO   product_productaddons (productid, adid) values ($productid,$adid)";
        $connectedDb->prepare($getdata);
        $connectedDb->execute();
    }

    public static function getaddOnCountById($id){
        global $connectedDb;
        $getdata = "SELECT count(*) as count from product_productaddons where adid = $id";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getProductAddonsbyProductId($productid){
        global $connectedDb;
        $getdata = "SELECT * from product_productaddons where productid = $productid";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function searhProduct($parameter, $page, $limit){
        global $connectedDb;
        $getdata = "SELECT * FROM products INNER JOIN product_categories ON
        products.categoryid = product_categories.categoryid
        WHERE products.name LIKE '$parameter%' OR product_categories.name
        LIKE '$parameter%' LIMIT $page, $limit";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function searhProductCount($parameter){
        global $connectedDb;
        $getdata = "SELECT count(*) as ct FROM products INNER JOIN product_categories ON
        products.categoryid = product_categories.categoryid
        WHERE products.name LIKE '$parameter%' OR product_categories.name";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }




}