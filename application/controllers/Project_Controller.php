<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Controller extends My_Controller {
	public function __construct() {
        parent::__construct();
         if(!$this->session->userdata('user_data')){
          redirect('login');
       }
       $this->load->model('Project_Model');
      
    }
    public function index(){
    	$data['records']= $this->Project_Model->get_project_data();
         $data['title']=" Project list";
         // echo "<pre>";
         // print_r($data);die;
          $this->loadviews('project/index',$data);
		
	}
	public function add_project(){
		//$data=array();
        $data['title']="Add Project";
        $data['api_type']= $this->Project_Model->get_api_type();
        // echo "<pre>";
        // print_r($data);
        // die;
		$this->loadviews('project/add_project',$data);
	} 
	public function insert_project_data(){
		
		if($this->form_validation->run('project') == FALSE){
			$data['title']="Add Project";
			$this->loadviews('project/add_project');

		}else{
			$name = $this->input->post('name');
			$member = $this->input->post('member');
			$start = $this->input->post('start_date');
			$end = $this->input->post('end_date');
			$category = $this->input->post('category');
			$leader = $this->input->post('leader');
			$p_coordinator = $this->input->post('project_coordinator');
			$p_status = $this->input->post('project_status');
			$api_type = $this->input->post('api_type');
			$status = $this->input->post('status');
			$duration = $this->input->post('duration');
			$created_by= $this->input->post('created_by');

			$table_name="project";
			$data=array(
				'name'=>$name,
				'team_size'=>$member,
				'duration'=>$duration,
				'start_date'=>$start,
				'expected_end_date'=>$end,
				'category'=>$category,
				'leader'=>$leader,
				'project_coordinator'=>$p_coordinator,
				'project_status'=>$p_status,
				'api_type'=>$api_type,
				'is_active'=>$status,
				'created_by'=>$created_by
			    );
			$project_data=$this->Project_Model->insert_data($table_name,$data);
			if($project_data){
				$this->session->set_flashdata('msg', 'Project added Successfully');
				redirect('project');
			}

		}
	}
	public function delete($id){
     $data= $this->Project_Model->delete($id);
     if($data){
        redirect('project');
     }
	}
	public function edit($id){

		if(isset($id) && $id!='')

        {
        	$data['api_type']=$this->Project_Model->get_api_type();
          $data['record']= $this->Project_Model->get_data_by_id($id);          
            // echo "<pre>";
            // print_r($data);
            // die;
           if ($this->form_validation->run('edit_project') == FALSE){
           	 $data['title']="Edit Project";
              $this->loadviews('project/edit_project',$data);

           }else{
            $id     = $this->input->post('id');
            $name = $this->input->post('name');
			$member = $this->input->post('member');
			$start = $this->input->post('start_date');
			$end = $this->input->post('end_date');
			$category = $this->input->post('category');
			$leader = $this->input->post('leader');
			$p_coordinator = $this->input->post('project_coordinator');
			$p_status = $this->input->post('project_status');
			$api_type = $this->input->post('api_type');
			$status = $this->input->post('status');
			$duration = $this->input->post('duration');
			$created_by= $this->input->post('created_by');
            $p_data=array(
                'name'=>$name,
				'team_size'=>$member,
				'duration'=>$duration,
				'start_date'=>$start,
				'expected_end_date'=>$end,
				'category'=>$category,
				'leader'=>$leader,
				'project_coordinator'=>$p_coordinator,
				'project_status'=>$p_status,
				'api_type'=>$api_type,
				'is_active'=>$status,
				'created_by'=>$created_by
              );
            $update_data= $this->Project_Model->update($p_data,$id);
            if($update_data){
               redirect('project');
            }
           

           }
           
        }
	}
	public function view_module($id){
         $data['title']="Module List";
		$data['record']=$this->Project_Model->get_module_data($id);
	
		$this->loadviews('module/index',$data);

	}
	public function add_module(){
		$data['title']="Add Module";
		$data['project'] = $this->Project_Model->get_project_data();
	// 	echo "<pre>";
	// print_r($data);die;
		$this->loadviews('module/add_module',$data);
	}
	public function insert_module(){

		if($this->form_validation->run('module') == FALSE){
			$data['title']="Add Module";
			$this->loadviews('module/add_module',$data);
		}else{
			//die('hi');
			$table_name="module";
			$name=$this->input->post('name');
			$project=$this->input->post('project');
			$start = $this->input->post('start_date');
			$end = $this->input->post('end_date');
			$status = $this->input->post('status');
			$created_by= $this->input->post('created_by');

            $data=array(
		            	'name'=>$name,
		            	'project_id'=>$project,
		            	'start_date'=>$start,
		            	'expected_end_date'=>$end,
		            	'is_active'=>$status,
		            	'created_by'=>$created_by
                        );
            // echo "<pre>";
            // print_r($data);
            // die;
            $module_data=$this->Project_Model->insert_data($table_name,$data);
            if($module_data){
            	return redirect("module_list/$project");

            }
		}

	}
	public function delete_module($id,$p_id){
		//print_r($p_id);die;
		$delete= $this->Project_Model->delete_m($id);
		if($delete){
			return redirect("module_list/$p_id");
		}

	}
	public function edit_module($id){

		if(isset($id) && $id!='')

        {
        	$data['project'] = $this->Project_Model->get_project_data(); 
        	$data['module'] = $this->Project_Model->get_module_data_by_id($id);         
            // echo "<pre>";
            // print_r($data);
            // die;
           if ($this->form_validation->run('edit_module') == FALSE){

           	 $data['title']="Edit Module";
              $this->loadviews('module/edit_module',$data);

           }else{
            $m_id  = $this->input->post('id');
            $table_name="module";
			$name=$this->input->post('name');
			$project=$this->input->post('project');
			$start = $this->input->post('start_date');
			$end = $this->input->post('end_date');
			$status = $this->input->post('status');
			$created_by= $this->input->post('created_by');
            $p_data=array(
                'name'=>$name,
		            	'project_id'=>$project,
		            	'start_date'=>$start,
		            	'expected_end_date'=>$end,
		            	'is_active'=>$status,
		            	'created_by'=>$created_by
              );
            // echo "<pre>";
            // print_r($p_data);die;
            $update_data= $this->Project_Model->update_module($p_data,$m_id);
            if($update_data){
               redirect("module_list/$project");
            }
           

           }
           
        }
	}
	public function api_list($module_id){
		 $data['title']="Api List";
		$data['record'] = $this->Project_Model->get_api($module_id);
		// echo "<pre>";
		// print_r($data);
		 $this->loadviews('api/index.php',$data);

	}
	public function add_api(){
		$data['project'] = $this->Project_Model->get_project_data();
		$data['module'] = $this->Project_Model->get_modules_data();  
		$data['title']="add Api";
		$this->loadviews('api/add_api',$data);

	}
	public function insert_api(){

         if($this->form_validation->run('api') == FALSE){
         	$data['project'] = $this->Project_Model->get_project_data();
		$data['module'] = $this->Project_Model->get_modules_data(); 
			$data['title']="add Api";
		$this->loadviews('api/add_api',$data);
		}else{
			//die('hi');
			$table_name="api";
			$name=$this->input->post('name');
			$description= $this->input->post('description');
			$project=$this->input->post('project');
			$module=$this->input->post('module');
			$base_url= $this->input->post('base_url');
			$request_method = $this->input->post('request_method');
			$req_url=$this->input->post('req_url');
			$request_parameters = $this->input->post('request_parameters');
			$response_parameters = $this->input->post('response_parameters');
			$token_type= $this->input->post('access_token_type');
			$token_param = $this->input->post('access_token_param');
			$header_param = $this->input->post('header_param');
			$sample_req_url=$this->input->post('sample_req_url');
			$sample_req = $this->input->post('sample_req');
			$sample_response = $this->input->post('sample_response');
			$note=$this->input->post('note');
			$status = $this->input->post('status');			

            $data=array(
		            	'api_name'=>$name,
		            	'project_id'=>$project,		            	
		            	'is_active'=>$status,
		            	'description'=>$description,
		            	'module_id'=>$module,
		            	'base_url'=>$base_url,
		            	'req_method'=>$request_method,
		            	'req_url'=>$req_url,
		            	'request_parameters'=>$request_parameters,
		            	'access_token_type'=>$token_type,
		            	'access_token_param'=>$token_param,
		            	'header_param'=>$header_param,
		            	'sample_req'=>$sample_req,
		            	'sample_req_url'=>$sample_req_url,
		            	'sample_response'=>$sample_response,
		            	'note'=>$note,
		            	'is_active'=>$status
                        );
            // echo "<pre>";
            // print_r($data);
            // die;
            $module_data=$this->Project_Model->insert_data($table_name,$data);
            if($module_data){
            	return redirect("api/$module");

            }
		}
	}
	public function edit_api($id){
		$data['title']="Edit Api";
		$data['project'] = $this->Project_Model->get_project_data();
		$data['module'] = $this->Project_Model->get_modules_data(); 
		$data['records']=$this->Project_Model->get_api_data_by_id($id);
		// echo "<pre>";
		// print_r($data);
		// die;
      $this->loadviews('api/edit_api',$data);
	}
	public function update_api(){
		if ($this->form_validation->run('edit_api') == FALSE){

           	 $data['title']="Edit Api";
		$data['project'] = $this->Project_Model->get_project_data();
		$data['module'] = $this->Project_Model->get_modules_data(); 
		$data['records']=$this->Project_Model->get_api_data_by_id($id);
		
      $this->loadviews('api/edit_api',$data);

           }else{
            $id  = $this->input->post('id');
            $table_name="api";
			$name=$this->input->post('name');
			$description= $this->input->post('description');
			$project=$this->input->post('project');
			$module=$this->input->post('module');
			$base_url= $this->input->post('base_url');
			$request_method = $this->input->post('request_method');
			$req_url=$this->input->post('req_url');
			$request_parameters = $this->input->post('request_parameters');
			$response_parameters = $this->input->post('response_parameters');
			$token_type= $this->input->post('access_token_type');
			$token_param = $this->input->post('access_token_param');
			$header_param = $this->input->post('header_param');
			$sample_req_url=$this->input->post('sample_req_url');
			$sample_req = $this->input->post('sample_req');
			$sample_response = $this->input->post('sample_response');
			$note=$this->input->post('note');
			$status = $this->input->post('status');			

            $data=array(
		            	'api_name'=>$name,
		            	'project_id'=>$project,		            	
		            	'is_active'=>$status,
		            	'description'=>$description,
		            	'module_id'=>$module,
		            	'base_url'=>$base_url,
		            	'req_method'=>$request_method,
		            	'req_url'=>$req_url,
		            	'request_parameters'=>$request_parameters,
		            	'access_token_type'=>$token_type,
		            	'access_token_param'=>$token_param,
		            	'header_param'=>$header_param,
		            	'sample_req'=>$sample_req,
		            	'sample_req_url'=>$sample_req_url,
		            	'sample_response'=>$sample_response,
		            	'note'=>$note,
		            	'is_active'=>$status
                        );
            // echo "<pre>";
            // print_r($p_data);die;
            $update_data= $this->Project_Model->update_api($data,$id);
            if($update_data){
               redirect("api/$module");
            }
           

           }
	}

}
?>