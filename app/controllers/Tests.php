<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 6/24/2019
 * Time: 3:35 PM
 */

class Tests extends  Controller
{

     public function key(){

         echo Apikey::randomString();
     }

}