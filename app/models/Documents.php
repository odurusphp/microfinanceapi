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
        $query = "select filename from documents where bid = $bid ";
        $connectedDb->prepare($query);
        return  $connectedDb->singleRecord();

    }

}