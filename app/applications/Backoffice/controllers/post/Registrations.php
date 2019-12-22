<?php

class Registrations extends PostController{

	public function businessregistration(){

		$bus  = new Business();
		$datarow  =& $bus->recordObject;
		$datarow->businessname =$_POST['businessname'];
		$datarow->regnumber =$_POST['regnumber'];
		$datarow->businesstype =$_POST['businesstype'];
		//$datarow->dateofcommencement = date('Y-m-d', strtotime($_POST['dateofcommencement']));
		$datarow->telephone =$_POST['telephone'];
		$datarow->email =$_POST['email'];
		$datarow->digitaladdress =$_POST['digitaladdress'];
		$datarow->postaladdress =$_POST['postaladdress'];
		$datarow->city =$_POST['city'];
		$datarow->region =$_POST['region'];
		$datarow->dateapplied = date('Y-m-d H:i:s');
		$datarow->position = $_POST['contactposition'];
		$datarow->contacttelephone = $_POST['contacttelephone'];
		$datarow->contactperson = $_POST['contactname'];
		$datarow->uid = $_POST['uid'];

		$bus->store();
        
        $busid = $datarow->busid;
        $location = URLROOT.'/backoffice/registrations/businessdetails/'.$busid;
        print_r($datarow);

        //header('Location:'. $location);
        exit; 

	}

	public function coldstorage(){
		foreach ($_POST as $name => $value) {
            $$name = $value;
        }
		if($coldid==''){
			$coldid = null;
		}
		$coldstorage = new Coldstorage($coldid);
		$datarow  =& $coldstorage->recordObject;
		$datarow->facilityname= $facilityname;
		$datarow->facilitylocation= $facilitylocation;
		$datarow->storagecapacity= $storage;
		$datarow->freezerfacility= $freezerfacility;
		$datarow->horsepower= $horsepower;
		$datarow->otherfacilities= $otherfacilities;
		$datarow->uid= $uid;
		$coldstorage->store();
		$business = Business::getUserBusiness($uid);
		$coldstorage = Coldstorage::getColdStorage($uid);
		$viewdata = array(
			'business'=>$business,
			'coldstorage'=>$coldstorage,
			'message'=>'success'
		);
		$this->view('pages/coldstorage',$viewdata);	
	}

}


?>