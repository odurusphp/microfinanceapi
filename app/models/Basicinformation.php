<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/7/2019
 * Time: 3:07 PM
 */

class Basicinformation extends tableDataObject
{

    const TABLENAME = 'basicinformation';

    public static function getBasicInfoById($userid){
        global $connectedDb;
        $query = "Select * from basicinformation inner join users_basic on 
                  users_basic.bid = basicinformation.bid
                  where users_basic.uid = $userid ";
        $connectedDb->prepare($query);
        return $connectedDb->singleRecord();
    }

    public static function getLimitedCustomers(){
        global $connectedDb;
        $query = "Select * from basicinformation order by bid desc limit 0, 10 ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

    public static function search($parameter){
        global $connectedDb;
        $query = "Select * from basicinformation  where fullname like  '$parameter%' OR telephone like '$parameter%' ";
        $connectedDb->prepare($query);
        return $connectedDb->resultSet();
    }

}