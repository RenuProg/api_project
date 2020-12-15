<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends My_Controller {
	public function __construct() {
        parent::__construct();
         if(!$this->session->userdata('user_data')){
          redirect('login');

       }
       $this->load->model('User_Model');
   }
   public function index(){
   	$data['title']="Users";
   	
  $data['record']=$this->User_Model->get_user_data();
  // echo "<pre>";
  // print_r($data);die;
   	$this->loadviews('user/index',$data);
   }
   public function add_user(){
   	$data['title']="Add User";
    $data['role']= $this->User_Model->get_role_data();
    // echo "<pre>";
    // print_r($data);die;
   	$this->loadviews('user/add_user',$data);
   }
   public function insert_user(){
    if ($this->form_validation->run('user') == FALSE){
      $data['title']="Add User";
         $data['role']= $this->User_Model->get_role_data();
    $this->loadviews('user/add_user',$data);
     }else{
      $name=$this->input->post('name');
      $status=$this->input->post('status');
      $mobile=$this->input->post('mobile');
      $password=md5($this->input->post('password'));
      $email=$this->input->post('email');
      $role=$this->input->post('role');
      $data=array(
        'name'=>$name,
        'mobile'=>$mobile,
        'is_active'=>$status,
        'mobile'=>$mobile,
        'email'=>$email,
        'password'=>$password,
        'role_id'=>$role

      );
      // echo "<pre>";
      // print_r($data);
      // die;
      $role_data=$this->insert('users',$data);
      if($data){
        $this->session->set_flashdata('add_msg', 'User Added Successfully');
        return redirect('users');
      }

     }
   }
   public function edit_user($id){
  
      if(isset($id) && $id!='')
        {
          $data['title']="Edit User";

         $data['record']= $this->User_Model->get_user_data_by_id($id);
         // $role_id=$data['record'][0]->role_id;

          $data['role']= $this->User_Model->get_role_data();
         // echo "<pre>";
         // print_r($data);
         // die;

           if ($this->form_validation->run('edit_user') == FALSE){
            $data['title']="Edit User";
              $this->loadviews('user/edit_user',$data);

           }else{
            $id = $this->input->post('id');
            $name=$this->input->post('name');
      $status=$this->input->post('status');
      $mobile=$this->input->post('mobile');
     
      $email=$this->input->post('email');
      $role=$this->input->post('role');
            $user_data=array(
                'name'=>$name,
        'mobile'=>$mobile,
        'is_active'=>$status,
        'mobile'=>$mobile,
        'email'=>$email,
        
        'role_id'=>$role
                );
            $update_data= $this->User_Model->update($user_data,$id);
            if($update_data){
              $this->session->set_flashdata('update_msg', 'User Updated Successfully');
               return redirect('users');
            }
           

           }
           
        }
   }
   public function delete($id){
    $delete_data= $this->User_Model->delete($id);
    if($delete_data){
      $this->session->set_flashdata('delete_msg', 'User Deleted Successfully');
      return redirect('users');
    }

   }

   
       
      
    
    


}
?>