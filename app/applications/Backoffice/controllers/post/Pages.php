<?php
class Pages extends PostController {  

     public function adduser(){

       if(isset($_POST['adduser'])){

   			$usercount = User::checkUserExist($_POST['email']);

   			if($usercount == 0){
         $userdata = new User();
         $datarow =&  $userdata->recordObject;
         $datarow->username = $_POST['email'];
         $datarow->email = $_POST['email'];
         $datarow->lastname = $_POST['lastname'];
         $datarow->firstname =  $_POST['firstname'];
         $datarow->role =  $_POST['role'];
   		   $datarow->password = User::encryptPassword($_POST['password']);
         $datarow->datecreated = date('Y-m-d');
   			 $userdata->store();

   			 $alluserdata =  User::listAll();
   			 $dataresponse  = ['customerdata'=>$alluserdata, 'response'=>'User successfully addded', 'class'=>'aler alert-success'];
   			 $this->view( 'pages/adduser', $dataresponse);

   			}else{
   				$alluserdata =  User::listAll();
   				$dataresponse  = ['customerdata'=>$alluserdata, 'response'=>'Error adding User. Email may exist already',
   				'class'=>'alert alert-danger'];
   				$this->view( 'pages/adduser', $dataresponse );
   			}
   		}
    }


    public function editusers($userid){
      if(isset($_POST['updateuser'])){
      $u = new User($userid);
      $datarow =&  $u->recordObject;
      $datarow->username = $_POST['email'];
      $datarow->email = $_POST['email'];
      $datarow->lastname = $_POST['lastname'];
      $datarow->firstname =  $_POST['firstname'];
      $datarow->role =  $_POST['role'];
      $datarow->password = User::encryptPassword($_POST['password']);
      $u->store();

      $u = new User($userid);
  		$userdata = $u->recordObject;
  		$alluserdata =  User::getUsers();
  		$data = ['alluserdata'=>$alluserdata, 'user'=> $userdata];

      $this->view( 'pages/editusers', $data);
        }
    }


   


 






}
