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


    public static function getDocumentbyID($bid){
        global $connectedDb;
        $query = "select *  from documents where bid = $bid ";
        $connectedDb->prepare($query);
        return  $connectedDb->singleRecord();

    }

    public static function getDocumentbyIDCount($bid){
        global $connectedDb;
        $query = "select count(*) from documents where bid = $bid ";
        $connectedDb->prepare($query);
        return  $connectedDb->fetchColumn();

    }

}