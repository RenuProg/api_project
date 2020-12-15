<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
       
        
    }


	
	public function index()
	{//check session set or not
     if($this->session->userdata('user_data')){
         return redirect('dashboard');
       }
        $this->load->view('login');
	}
	
	public function login(){
		 if ($this->form_validation->run('site_login') == FALSE) {
            $this->load->view('login');
        } else{
        	$email=$this->input->post('email_id');
            $password=md5($this->input->post('password'));
            

            $user_data = $this->Login_model->userlogin($email,$password);
//print_r($user_data);die;
            if ($user_data) {


              if($user_data[0]->role_id==1){
                     
               $this->session->set_userdata('user_data', $user_data[0]->user_id);
               return redirect('dashboard');
              }else if($user_data[0]->role_id==2){
                die('user');
              }else{
                die('here');
              }
              
              
            } else {
                $this->session->set_flashdata('error', "something wrong");
               return redirect('login');
            }


        }
	}


	 /**********function to logout from admin panel*********/
    public function logout() {
       session_destroy();
        return redirect('login');
        
    }
}
