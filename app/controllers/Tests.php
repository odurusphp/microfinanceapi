<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 6/24/2019
 * Time: 3:35 PM
 */

class Tests extends  Controller
{

    public function test(){

        phpinfo();

        textsms('0547988633', 100);

    }


    public function sms(){
        $data = ['body'=>'I love you', 'to'=>'233547988633', 'from'=>'RL'];
        $jdata = json_encode($data);
        $ap = new Api();
        $res = $ap->sendsms($jdata);
        print_r($res);
    }

    public function sm(){

        $endPoint = 'https://api.mnotify.com/api/template';
        $apiKey = 'XNiE59geNxHMl5QZuTtWiCUievmkhOofBGTHP9WDHEq2J';
        $url = $endPoint . '?key=' . $apiKey;
        $data = [
            'title' => 'API testing',
            'content' => 'Best message template'
        ];

        $ch = curl_init();
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        $result = json_decode($result, TRUE);
        print_r($result);
        curl_close($ch);

    }



}