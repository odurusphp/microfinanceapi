<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 1/15/2020
 * Time: 11:52 AM
 */

class Customernumbers extends  tableDataObject
{

    const TABLENAME = 'customernumbers';

    public static function getnextaccount()
    {
        global $connectedDb;
        $query = "select min(nid) as id   from customernumbers where status = 0 ";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }








}