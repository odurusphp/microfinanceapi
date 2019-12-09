<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/15/2019
 * Time: 7:53 AM
 */

class Product extends tableDataObject
{

    const TABLENAME = 'products';

    public static function getProductCount(){
        global $connectedDb;
        $query = "select count(*) as ct  from products   ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getProductCountById($productid){
        global $connectedDb;
        $query = "select count(*) as ct  from products  where productid  = $productid  ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getProductCodeCountById($productcode){
        global $connectedDb;
        $query = "select count(*) as ct  from products  where productcode = '$productcode'  ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function getProductByUserID($userid){
        global $connectedDb;
        $query = "select * from products where userid = '$userid'  ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function getProductByCode($productcode){
        global $connectedDb;
        $query = "select * from products  where productcode = '$productcode'  ";
        $connectedDb->prepare($query);
        return $connectedDb->singleRecord();
    }



    public static function getProductData($page, $limit){
        global $connectedDb;
        $query = "select * from products  limit $page, $limit ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function getProductCategoryCount($categoryid){
        global $connectedDb;
        $query = "select count(*) as ct  from products  where catid  = $categoryid  ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

    public static function insertCompanyProducts($cid, $productid){
        global $connectedDb;
        $query = "INSERT INTO company_products (cid, productid) values ($cid, $productid) ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function deleteCompanyProducts($productid){
        global $connectedDb;
        $query = "DELETE from company_products where productid = $productid ";
        $connectedDb->prepare($query);
        $connectedDb->execute();
    }

    public static function getCompanyProductData($cid, $page, $limit){
        global $connectedDb;
        $query = "select company_products.* , products.*  from  company_products  inner join 
                   products ON 
                   company_products.productid  = products.productid where company_products.cid = $cid
                    limit $page, $limit ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function getCompanyProductCount($cid){
        global $connectedDb;
        $query = "select count(*) as ct  from company_products  inner join products ON
                   company_products.productid  = products.productid where company_products.cid = $cid  ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

}