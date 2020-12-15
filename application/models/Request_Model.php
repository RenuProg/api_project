<?php


class Request_Model extends CI_Model {

    

    function __construct() {
        parent::__construct();
    }

    public function get_request_data(){
        return $this->db->get('request')->result_array();
    }
     public function insert($table_name, $data){
     	//print_r($data);
    return $this->db->insert($table_name,$data);
}

public function get_request_data_by_id($id){
	$this->db->where('id', $id);

$result = $this->db->get('request')->result();
return $result;
}
 public function delete_r($id){
        $this->db->where('id', $id);
        $q=$this->db->delete('request');
        return $q;
    }
    public function update($data,$id){
        $this->db->where('id',$id);
 $q=$this->db->update('request', $data);
 return $q;
    }

}
