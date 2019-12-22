<?php

class Ajax extends Controller{



    public function deletesubscription(){

        $subscriptionid = $_POST['subscriptionid'];
        $subdelete = new Subscription($subscriptionid);
        $subdelete->deleteFromDB();

    }

    public function deleteservice(){

        $serviceid = $_POST['serviceid'];
        $service = new ServicesData($serviceid);
        $service->deleteFromDB();

    }

     public function deleteuser(){

        $userid = $_POST['userid'];
        $obj = new User($userid);
        $obj->deleteFromDB();

    }
    public function deletehomeservice(){


        $homeservice = new HomeServicesData($_POST['homeid']);
        $homeservice->deleteFromDB();

    }

    public function deletefurnishing(){

        $fn = new FurnishData($_POST['serviceid']);
        $fn->deleteFromDB();

    }

    public function deletecharge(){

        $fn = new ChargesData($_POST['serviceid']);
        $fn->deleteFromDB();

    }

    public function deletebooking(){

        $fn = new BookingConfig($_POST['serviceid']);
        $fn->deleteFromDB();

    }

    public function featured(){

        $propertyid = $_POST['propertyid'];
        $fvalue = $_POST['fvalue'];

        $property = new Property($propertyid);
        $datarow =&  $property->recordObject;
        if($fvalue == 'Yes'){
        $datarow->listingstatus = 1;
        $property->store();

        }

        if($fvalue == 'No'){
        $datarow->listingstatus = 0;
        $property->store();
        }
    }

    public function checkpicture(){
        $docid = $_POST['docid'];
        $fvalue = $_POST['fvalue'];
        $doc = new Documents($docid);
        $doc->recordObject->status = $fvalue;
        $doc->store();
    }

    public function blockproperty(){
        $propertyid = $_POST['propertyid'];
        $fvalue = $_POST['fvalue'];
        $prop = new Property($propertyid);
        $prop->recordObject->listingstatus = $fvalue;
        $prop->store();
    }


}

?>
