<?php

class Coldstorage extends  tableDataObject{

	const TABLENAME = 'coldstorage';


    public static function getColdStorage($uid){
        global $fdadb;
        $getrecords = "SELECT * from coldstorage where uid = '$uid'";
        $fdadb->prepare($getrecords);
        $result= $fdadb->singleRecord();
        if(is_object($result)){
            return $result;
        }else{
            return (object)['coldid'=>'','facilityname'=>'','facilitylocation'=>'','storagecapacity'=>'','freezerfacility'=>'','horsepower'=>'','otherfacilities'=>''];
        }
    }
}


?>