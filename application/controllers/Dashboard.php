<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {
	public function __construct() {
        parent::__construct();
         if(!$this->session->userdata('user_data')){
          redirect('login');
       }
      
    }


public function dashboard(){
      
	   $data['title']="Dashboard";
		$this->loadviews("dashboard",$data);
		
	}
}
?>