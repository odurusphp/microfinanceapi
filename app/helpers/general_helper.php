<?php


// This function helps to generate API keys

function generateApikey($id) {
    mt_srand((double)microtime()*10000);
    $charid = strtoupper(md5(uniqid(rand(), true)));
    $hyphen = chr(45);
    $uuid = substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid, 12, 4).$hyphen
        .substr($charid, 16, 4).$hyphen
        .substr($charid, 20, 12);
    $guid = $uuid.'-'.$id;
    $str = array("{", "}");
    return str_replace($str, "", $guid);
}


// generate inital passwords for new users
function randomPassword() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $characters .= "!$%&=?#@";
    $pass = array(); //remember to declare $pass as an array
    $charLength = strlen($characters) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $charLength);
        $pass[] = $characters[$n];
    }
    return implode($pass).rand(0, 9); //turn the array into a string
}

function checkpasswordstrength($pwd) {
    $message  = [];

    if (strlen($pwd) < 10) {
        $message[] = "Minimum of 10 characters required";
    }
    if (!preg_match("#[0-9]+#", $pwd)) {
        $message[]= "Password must include at least one number";
    }
    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $message []= "Password must include at least one letter";
    }
    if (!preg_match("#[A-Z]#", $pwd)) {
        $message []= "Password must include at least one uppercase letter";
    }
    if (!preg_match("#[\W]+#", $pwd)) {
        $message []= "Password must include at least one special character";
    } else {
        $message  = 'Success';
    }

    return $message ;
}

function getUserRole($roleid){
    if($roleid == 1){
        return  "<span class='badge badge-success'>Administrator</span>";
    }elseif($roleid == 2){
         return  "<span class='badge badge-dark'>Customer Admin</span>";
    }elseif($roleid == 3){
        return  "<span class='badge badge-success' style='background: #1c7430 !important;'>Customer User</span>";
    }

}


function getprojectStatus($status){
    if($status == 1){
        return  "<span class='badge badge-success' style='background: #619226 !important;'>Pending</span>";
    }elseif($status == 2){
        return  "<span class='badge badge-success'>Started</span>";
    }elseif($status == 3){
        return  "<span class='badge badge-success'>Processed</span>";
    }elseif($status == 4){
        return  "<span class='badge badge-success'>Researched</span>";
    }elseif($status == 5){
        return  "<span class='badge badge-success'>Completed</span>";
    }

}


function getprojectTextStatus($status){
    if($status == 1){
        return  "Pending";
    }elseif($status == 2){
        return  "Started";
    }elseif($status == 3){
        return  "Processed";
    }elseif($status == 4){
        return  "Researched";
    }elseif($status == 5){
        return  "Completed";
    }

}


function confirmpassword($password, $cpassword){
    if($password  !=  $cpassword){
        return  "error";
    }else{
        return  "success";
    }

}


function domainRestriction($companyemail, $email){

    $domain = explode('@', $companyemail)[1];
    $acceptedDomains = array($domain);
    if(in_array(substr($email, strrpos($email, '@') + 1), $acceptedDomains))
    {
        return 'true';
    }else{
        return 'false';
    }
}


function csvString($string){
   $newstring =  mb_convert_encoding($string, 'UTF-16LE', 'UTF-8');
   return $newstring;
}


?>