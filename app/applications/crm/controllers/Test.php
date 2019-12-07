<?php

class Test extends Controller {

    public function index(){
        $this->view('test/index');
    }

    public function peopleoverview(){
        $this->view('test/peopleoverviewasdas');
    }

    public function bakingcrew(){
        $this->view('test/bakingcrew');
    }

    public function deliverycrew(){
        $this->view('test/deliverycrew');
    }

    public function team(){
        $this->view('test/team');
    }

    public function customeroverview(){
        $this->view('test/customeroverview');
    }

    public function customercafe(){
        $this->view('test/customercafe');
    }

    public function stock(){
        $this->view('test/stock');
    }


}

?>