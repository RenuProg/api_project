<?php


class Role_Model extends CI_Model {

    //private $table_name = 'users';

    function __construct() {
        parent::__construct();
    }
    public function get_role(){
        $this->db->where('role_id!=',1);
        return $this->db->get('user_role')->result_array();
    }
    public function get_role_data_by_id($id){
    	$this->db->where('role_id',$id);
    	$query=$this->db->get('user_role')->result();
    	return $query;
    }
    public function update($data,$id){
        $this->db->where('role_id',$id);
 $q=$this->db->update('user_role', $data);
 return $q;
    }

   
 
 public function delete($id){
    	$this->db->where('role_id', $id);
        $q=$this->db->delete('user_role');
        return $q;
    }  
    

}
