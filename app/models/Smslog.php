<?php


class Smslog extends tableDataObject
{
   const  TABLENAME = 'smslog';

    public static function getPendingLog(){
        global $connectedDb;
        $getdata = "SELECT * from smslog where status = 0";
        $connectedDb->prepare($getdata);
        return $connectedDb->singleRecord();
    }
}