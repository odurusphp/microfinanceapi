<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 6/6/2019
 * Time: 4:11 PM
 */

class Api{

       private function decodeCredentials(){
           $encodedstr = SMS_APPID.':'.SMS_SECRET;
           return base64_encode($encodedstr);
       }

       public function authenticate(){
           $curl = curl_init();
           curl_setopt_array($curl, array(
               CURLOPT_URL => "https://auth.routee.net/oauth/token",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => "",
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 30,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_POSTFIELDS => "grant_type=client_credentials",
               CURLOPT_HTTPHEADER => array(
                   "authorization: Basic ".$this->decodeCredentials(),
                   "content-type: application/x-www-form-urlencoded"
               ),
           ));
           $response = curl_exec($curl);
           $data = json_decode($response, TRUE);
           $token = $data['access_token'];
           curl_close($curl);
           return $token;

       }

       public function sendsms($data){

           $curl = curl_init();
           curl_setopt_array($curl, array(
               CURLOPT_URL => "https://connect.routee.net/sms",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => "",
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 30,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_POSTFIELDS =>$data,
               CURLOPT_HTTPHEADER => array(
                   "authorization: Bearer ".$this->authenticate(),
                   "content-type: application/json"
               ),
           ));

           $response = curl_exec($curl);
       }

}