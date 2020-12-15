<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_Controller extends CI_Controller
{

    public function __construct() {

        parent::__construct();
        
     
    }
    public function loadviews($view,$data=array()){
    	$this->load->view('includes/header',$data);
    	$this->load->view('includes/navbar');
    	$this->load->view('includes/sidebar');
    	$this->load->view($view);
    	$this->load->view('includes/footer');

    }
    //     protected function loadviews($view_name, $page_data = null, $header_data = null, $footer_data = null) {
    //     $this->load->view('includes/header', $header_data);
    //     $this->load->view('includes/navbar', $header_data);
    //     $this->load->view('includes/sidebar', $header_data);
    //     // if ($this->session->userdata('user_data')->user_type_id == ADMIN_USER) {
    //     //     $this->load->view('includes/sidebar');
    //     // } else {
    //     //     $this->load->view('includes/sidebar-brand-admin');
    //     // }
    //     $this->load->view($view_name, $page_data);
    //     $this->load->view('includes/footer', $footer_data);
    // }
    public function insert($table_name, $data){
        //print_r($data);
    return $this->db->insert($table_name,$data);

    

}

   
}

?>