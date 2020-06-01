<?php


class Sms extends Controller
{

     public function index(){

         //$sm =  Smslog::getPendingLog();
//         $smid = $sm->smsid;
//         $telephone = $sm->telephone;
         $telephone = '265742649';
          textazubi($telephone);
     }

}