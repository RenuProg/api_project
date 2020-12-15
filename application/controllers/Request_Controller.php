<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_Controller extends My_Controller {
	public function __construct() {
        parent::__construct();
         if(!$this->session->userdata('user_data')){
          redirect('login');
       }
       $this->load->model('Request_Model');
      
    }

    public function index(){
      $data['title']="Request";
    	$data['records']=$this->Request_Model->get_request_data();
    
          $this->loadviews('request/index',$data);		
	}
  public function add(){
    $data['title']="Add Request";
    $this->loadviews('request/add_request',$data);
  }

  // add request form data in database
  public function insert_dt(){
    //die('hiii');
    if ($this->form_validation->run('request') == FALSE){
      $data['title']="Add Request";

         $this->loadviews('request/add_request',$data);

    }else{
      
      $r_name=$this->input->post('name');
    $status=$this->input->post('status');
    $table_name='tbl_request';
    $data=array(
      ' r_name'=>$r_name,
      'status'=>$status);

    $rquest_data =$this->Request_Model->insert($table_name,$data);
    if($rquest_data){
       $this->session->set_flashdata('insert_msg', 'Request Added Successfully');
       redirect('request'); 
    }

    }
    
  }
  public function edit($id=''){
   
   $data['page_name']="Edit Request";
       
      if(isset($id) && $id!='')
        {
          $data['title']="Edit Project";
          $data['record']= $this->Request_Model->get_request_data_by_id($id);
          
            
           if ($this->form_validation->run('edit_request') == FALSE){
              $this->loadviews('request/edit_request',$data);

           }else{
            $id     = $this->input->post('id');
            $r_data=array(
                ' r_name'=>$this->input->post('name'),
                  'status'=>$this->input->post('status'));
            $update_data= $this->Request_Model->update($r_data,$id);
            if($update_data){
              $this->session->set_flashdata('update_msg', 'Request Updated Successfully');
               redirect('request');
            }
           

           }
           
        }

    
      }
      
      public function delete($id){

     $data= $this->Request_Model->delete_r($id);
     if($data){
       $this->session->set_flashdata('delete_msg', 'Request Deleted Successfully');
        redirect('request');
     }
  }
	
}
?>