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


}