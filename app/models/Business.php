<?php

class Business extends  tableDataObject{

	const TABLENAME = 'business';

    
     public static function getExistingUserBusiness($uid){
          global $fdadb;
          $getrecords = "Select count(*) as buscount from business  where uid = '$uid' ";
          $fdadb->prepare($getrecords);
          return $fdadb->fetchColumn();
      }

      public static function getUserBusiness($uid){
          global $fdadb;
          $getrecords = "SELECT * from business join users on business.uid=users.uid where business.uid = '$uid'";
          $fdadb->prepare($getrecords);
          return $fdadb->singleRecord();
      }


}


?>