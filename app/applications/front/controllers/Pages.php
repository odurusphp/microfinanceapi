<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 8/1/18
 * Time: 10:49 AM
 */

class Pages extends Controller {
    public function __construct(){
        /*
         * Because the parent(s) of this class - Controller and
         * BaseController - may have functionality that we definitely
         * want to inherit, we need to call the parent constructor...
         */
        parent::__construct();

        /*
         * The login function was not actually needed in this controller -
         * the actual login form in use is at pages/login.
         *
         * IMPORTANT: *if* we did need to allow for paths that should be exempted
         * from the guard here, there would be 2 ways to do it:
         *
         * 1. Check $_REQUEST['url'] for the the paths that should not be guarded, or
         * 2. Use backtrace to find out what method was called, against what should not
         *      be guarded.
         *
         * 1 is easy but brittle (if we move methods from one controller 2 another;
         * 2 is harder but could be useful as a base method in BaseController.
         *
         * We don't need to do either, so just putting the guard here.
         *
         */
       // $roles=['Mentee','My Mentor','Mentor','Administrator','Super Administrator'];
        //new Guard($this->loggedInUser,$roles);
    }

    public function index(){
       
        $this->view('pages/index');
    }
    public function home(){
       
        $this->view('pages/index');
    }

    public function signup(){
        
        $this->view('pages/signup');
    }
    
    public function login(){

        $this->view('pages/login');
    }
    public function forgot(){

        $this->view('pages/forgot');
    }

    
 

   
}