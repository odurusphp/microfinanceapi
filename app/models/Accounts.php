<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 1/2/2020
 * Time: 4:17 AM
 */

class Accounts extends tableDataObject
{
   const TABLENAME = 'accounts';

    public static function getCountbyAccounttype($accounttype, $bid){
        global $connectedDb;
        $getdata = "SELECT count(*) as ct from accounts where accounttype = '$accounttype' and bid = $bid  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getCustomeraccounts($bid){
        global $connectedDb;
        $getdata = "SELECT * from accounts where bid = $bid  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

}