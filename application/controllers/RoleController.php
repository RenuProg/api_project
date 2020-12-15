<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleController extends My_Controller {
	public function __construct() {
        parent::__construct();
         if(!$this->session->userdata('user_data')){
          redirect('login');

       }
       $this->load->model('Role_Model');
   }
   public function index(){
   	$data['title']="Role";
   	$data['record'] = $this->Role_Model->get_role();
   	// echo "<pre>";
   	// print_r($data);die;
   	$this->loadviews('role/index',$data);
   }
   public function add_role(){
   	$data['title']="Add Role";
   	$this->loadviews('role/add_role',$data);
   }
   public function insert_role(){
   	 if ($this->form_validation->run('role') == FALSE){
      $data['title']="Add Role";
   	$this->loadviews('role/add_role',$data);
   	 }else{
   	 	$name=$this->input->post('name');
   	 	$status=$this->input->post('status');
   	 	$data=array(
   	 		'role'=>$name,
   	 		'is_active'=>$status
   	 	);
   	 	$role_data=$this->insert('user_role',$data);
   	 	if($data){
   	 		$this->session->set_flashdata('insert_msg', 'Role Added Successfully');
   	 		redirect('role');
   	 	}

   	 }
   }
   public function edit_role($id){
    $data['title']="Edit Role";
       
      if(isset($id) && $id!='')
        {
          $data['title']="Edit Role";
          $data['record']= $this->Role_Model->get_role_data_by_id($id);
          
            
           if ($this->form_validation->run('edit_role') == FALSE){
              $this->loadviews('role/edit_role',$data);

           }else{
            $id     = $this->input->post('id');
            $r_data=array(
                ' role'=>$this->input->post('name'),
                  'is_active'=>$this->input->post('status'));
            $update_data= $this->Role_Model->update($r_data,$id);
            if($update_data){
            	$this->session->set_flashdata('update_msg', 'Role Updated Successfully');
               redirect('role');
            }
           

           }
           
        }


   }
       
      public function delete($id){
      	$data= $this->Role_Model->delete($id);
      	if($data){
      		$this->session->set_flashdata('delete_msg', 'Role Deleted Successfully');
      		return redirect('role');
      	}


      }
    
    



}
?>