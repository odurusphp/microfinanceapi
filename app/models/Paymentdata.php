<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/15/2019
 * Time: 3:09 PM
 */

class Paymentdata extends tableDataObject
{
    const TABLENAME  =  'payments';


    public static function getpaymentID($bid){
        global $connectedDb;
        $query = "select *  from payments where bid  = $bid ";
        $connectedDb->prepare($query);
        return  $connectedDb->resultSet();
    }

    public static function getAllpaymnets(){
        global $connectedDb;
        $today = date('Y-m-d');
        $query = "select *  from payments inner join basicinformation on 
                  payments.bid = basicinformation.bid where payments.dateofpayment = '$today'  ";
        $connectedDb->prepare($query);
        return  $connectedDb->resultSet();
    }

    public static function getTotalAllpaymnets(){
        global $connectedDb;
        $today = date('Y-m-d');
        $query = "SELECT SUM(amount) AS total  FROM payments  WHERE  payments.dateofpayment = '$today' ";
        $connectedDb->prepare($query);
        return  $connectedDb->fetchColumn();
    }


}