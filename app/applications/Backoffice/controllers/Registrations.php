<?php

class Registrations extends Controller{

	public function businessregistration(){

		$uid = $this->loggedInUser->recordObject->uid;

		$this->view('pages/businessregistration', $uid);
	}

	public function businessdetails ($busid){

		//$this->view('')
		
	}
	
	public function coldstorage(){
		$uid = $this->loggedInUser->recordObject->uid;
		$business = Business::getUserBusiness($uid);
		$coldstorage = Coldstorage::getColdStorage($uid);
		$viewdata = array(
			'business'=>$business,
			'coldstorage'=>$coldstorage
		);
		$this->view('pages/coldstorage',$viewdata);	
	  }

	  public function warehouse(){
		
		$this->view('pages/warehouse');	
	  }

}


?>