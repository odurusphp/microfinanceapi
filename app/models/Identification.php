<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/15/2019
 * Time: 9:15 AM
 */

class Identification extends tableDataObject
{
    const TABLENAME  =  'identification';

    public static function getIdentificationByBid($bid){
        global $connectedDb;
        $query = "select *  from identification where bid = $bid ";
        $connectedDb->prepare($query);
        return  $connectedDb->singleRecord();
    }
}