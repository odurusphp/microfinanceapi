<?php

//Path for uploads

//$uploadpath =  URLROOT.'uploads/';

define('SAPPROOT', dirname(dirname(dirname( __FILE__ ))));
$uploadpath = SAPPROOT.'/public/uploads/';

define('UPLOAD_PATH', $uploadpath);

// Constant to secure "cron" jobs
define('JOBSEC', '$2y$10$VLdXLJRsEFF/lgJ2cQPEguWBLvoGSwpKPL.L3A3phIFyhDaDtr4bW');

define('JSVARS',serialize(array(
	'urlroot' => URLROOT
)));

if(!defined('SITENAME')){
	define('SITENAME','Hello, you should change me');
}


define('COMPANYNAME', 'KUCHENTRASCH');

define('FRONTURL', 'http://localhost:3000');

/*define('EMAILS_FOR_ERROR_ALERT', [
    'bryan@getinnotized.com'
]);*/

// Default color, if the local constant is not set
if (!defined('MAINBACKGROUND')){
    define('MAINBACKGROUND','#E46F2C');
}


define('ROUTE_REQUEST',true);
define ('ROUTE_REQUEST_PATH',[]);


//SMTP Credentials
define('SENDER_EMAIL', 'info@getinnotized.de');
define ('SMTP_PREFIX', 'ssl');
define ('SMTP_HOST', 'smtp.gmail.com');
define ('SMTP_PORT', '465');
define ('MAIL_USERNAME', 'poqacompany@gmail.com');
define ('MAIL_PASSWORD', 'poqacompany@2019');

//Define data types
define('BOOLEAN',  1);
define('INT',  2);
define('STRING', 3);




//Rest API Constants
define('REQUEST_METHOD_NOT_VALID',  101);
define('REQUEST_CONTENTTYPE_NOT_VALID',  102);
define('REQUEST_NOT_VALID',  103);
define('VALIDATE_PARAMETER_REQUIRED',  104);
define('VALIDATE_DATATYPE_REQUIRED',  105);
define('API_NAME_REQUIRED',  106);
define('API_PARAM_REQUIRED',  107);
define('API_DOES_NOT_EXIST',  108);
define('INCORRECT_FIELD_NAME',  109);
define('INVALID_USER_CREDENTIALS',  205);
define('SUCCESS_RESPONSE',  200);
define('AUTHORIZATION_HEADER_NOT_FOUND', 505);
define('INVALID_AUTH_TOKEN', 506);
define('JWT_PROCESSING_ERROR', 508);

define('SECRET_KEY', '123456');
//define('SMS_KEY', '7VrlW2P5LoU7K79adnYmvLB1Y');
define('SMS_KEY', 'c4b012085cf6c914e538');



// API CALL ERRORS

define('PRO_01', "Don't exist product with this ID");
define('PRO_02', "Product ID cannot be  null");
define('PRO_03', "Check page number and limit");
define('PRO_04', "Please check parameters");


define('REQUIRED', "Field is required");
define('MUST_BOOLEAN', "Data type nust be a boolean");
define('MUST_NUMERIC', "Data type nust be an integer");
define('MUST_STRING', "Data type nust be a string");

define('USR_01', "Email or Password is invalid.");
define('USR_04', "The email already exists.");
define('USR_05', "The email doesn't exists.");
define('USR_06', "User role is invalid.");
define('USR_07', "User ID is not valid");
define('USR_08', "User ID cannot be null");
define('USR_09', "Link for password recreation has expired");
define('USR_10', "Error attaching profile image");


define('AUT_01', "Authorization code is empty.");
define('AUT_03', "API Key does not exist.");
define('AUT_02', "Access Unauthorized.");

define('TAX_01', "Don't exist tax with this ID");
define('TAX_02', "The ID is not a number");

define('ORD_01', "Don't exist order with this ID");
define('ORD_02', "The ID is not a number");

define('SHP_01', "Don't exist shipping region with this ID");
define('SHP_02', "The ID is not a number");

define('TM_01', "Team already exists");
define('TM_02', "Team ID cannot be null");
define('TM_03', "Team ID does not exist");
define('TM_04', "Team does not exist");

define('TG_01', "Tag already exists");
define('TG_02', "Tag ID cannot be null");
define('TG_03', "Tag ID does not exist");

define('AD_01', "Add on  already exists");
define('AD_02', "Add On  ID cannot be null");
define('AD_03', "Add On ID does not exist");

define('CAT_01', "Category  already exists");
define('CAT_02', "Category ID cannot be null");
define('CAT_03', "Category ID does not exist");



define('USER_KEY', 'prince@2019');


