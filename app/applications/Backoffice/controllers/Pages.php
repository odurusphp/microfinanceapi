<?php

class Pages extends Controller{


   public function index(){
	    new Guard($this->loggedInUser,['Regular']);
	    
	    $this->view( 'pages/index');
	}

	public function pickform(){

	   new Guard($this->loggedInUser,['Regular']);

       $uid = $this->loggedInUser->recordObject->uid;
       $buscount = Business::getExistingUserBusiness($uid);

       redirectToBusinessForms($buscount);
        
	   $drugdata = Applications::getapplications('drug');
	   $fooddata = Applications::getapplications('food');

	   $data = ['drugdata'=>$drugdata, 'fooddata'=>$fooddata];
	   $this->view('pages/pickform', $data);	
	}

	public function drugform(){
	  $this->view('pages/drugform');	
	}

	public function formwizard(){
	  $this->view('pages/formwizard');	
	}

	public function logout(){
     
     session_destroy();
	 header('Location:'.URLROOT.'/front/pages/login');

	}



}



?>
