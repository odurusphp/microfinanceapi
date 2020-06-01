<?php


class Sms extends Controller
{

     public function index(){

         $url1=$_SERVER['REQUEST_URI'];
         header("Refresh: 5; URL=$url1");

         $sm =  Smslog::getPendingLog();
         $smid = $sm->smsid;
         echo $telephone = $sm->telephone;
         textazubi($telephone);
         $us = new Smslog($smid);
         $us->recordObject->status = 1;
         $us->store();

//         $telephone = '241236372';
//         textazubi($telephone);
     }

}