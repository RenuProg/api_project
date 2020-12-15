<?php


class Project_Model extends CI_Model {

    

    function __construct() {
        parent::__construct();
    }

    public function get_project_data(){
        return $this->db->get('project')->result_array();
    }
    public function insert_data($table_name,$data){
    	return $this->db->insert($table_name,$data);
    }
    public function delete($id){
    	$this->db->where('project_id', $id);
        $q=$this->db->delete('project');
        return $q;
    }
    public function get_data_by_id($id){
        $this->db->where('project_id',$id);
        $q=$this->db->get('project')->row();
        return $q;
    }
    public function update($data,$id){
        $this->db->where('project_id',$id);
   $q=$this->db->update('project', $data);
 return $q;
    }
    public function update_module($data,$id){
        $this->db->where('module_id',$id);
   $q=$this->db->update('module', $data);
 return $q;
    }
     public function update_api($data,$id){
        $this->db->where('api_id',$id);
   $q=$this->db->update('api', $data);
 return $q;
    }
    public function get_module_data($id){
        //print_r($id);
          $this->db->where('project_id',$id);
          $query= $this->db->get('module')->result_array();
          return $query;
    }
    public function delete_m($id){
        $this->db->where('module_id', $id);
        $q=$this->db->delete('module');
        return $q;

    }
    public function get_api_type(){

         return $this->db->get('api_type')->result_array();
    }
    public function get_module_data_by_id($id){
         $this->db->where('module_id', $id);
        $query= $this->db->get('module')->result();
        return $query;
    }
    public function get_api($module_id){
        $this->db->where('module_id',$module_id);
        $query=$this->db->get('api')->result();
        return $query;
    }
    public function get_modules_data(){
        return $this->db->get('module')->result_array();

    }
    public function get_api_data_by_id($id){
        $this->db->where('api_id',$id);
        $query=$this->db->get('api')->result();
        return $query;
    }
    

}
