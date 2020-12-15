<?php


class User_Model extends CI_Model {

    

    function __construct() {
        parent::__construct();
    }
    public function get_user_data(){
        $this->db->select('u.*,ur.role_id,ur.role');
$this->db->from('users as u');
$this->db->join('user_role as ur','u.role_id=ur.role_id','Left');
$this->db->where('u.user_id!=',1);
$query=$this->db->get();
        return $query->result_array();

    }
    public function get_role_data(){
    
    	return $this->db->get('user_role')->result_array();
    }
    public function delete($id){
    	$this->db->where('user_id', $id);
        $q=$this->db->delete('users');
        return $q;
    }
    public function get_user_data_by_id($id){
         $this->db->select('u.*,ur.role_id,ur.role');
$this->db->from('users as u');
$this->db->join('user_role as ur','u.role_id=ur.role_id','Left');
$this->db->where('u.user_id',$id);
$query=$this->db->get();
        return $query->result();

    }
      public function update($data,$id){
        $this->db->where('user_id',$id);
 $q=$this->db->update('users', $data);
 return $q;
    }
}
