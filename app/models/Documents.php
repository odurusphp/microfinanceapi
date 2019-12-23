<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/12/2019
 * Time: 3:49 PM
 */

class Documents extends tableDataObject
{

    const TABLENAME  =  'documents';


    public static function getDocumentbyID($bid, $type){
        global $connectedDb;
        $query = "select *  from documents where bid = $bid and type = '$type' ";
        $connectedDb->prepare($query);
        return  $connectedDb->singleRecord();

    }

    public static function getDocumentbyIDCount($bid, $type){
        global $connectedDb;
        $query = "select count(*) as ct  from documents where bid = $bid and type = '$type'";
        $connectedDb->prepare($query);
        return $connectedDb->fetchColumn();
    }

}