<?php


class Sms extends Controller
{

     public function index(){

         //$sm =  Smslog::getPendingLog();
//        $smid = $sm->smsid;
//         $telephone = $sm->telephone;
         $telephone = '244717142';
          textazubi($telephone);
     }

}