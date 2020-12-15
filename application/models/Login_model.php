<?php


class Login_model extends CI_Model {

    private $table_name = 'users';

    function __construct() {
        parent::__construct();
    }

    /**
     * resolve admin login
     * @param postdata $login_data
     * @return boolean & on success return userdata
     */
 
    public function userlogin($email,$password){
        $query=$this->db->select('u.*,ur.*')
        ->from('users as u')
        ->where('u.email',$email)
        ->where('u.password',$password)
        ->join('user_role as ur','ur.role_id=u.role_id','left')
        ->get();
                        //echo $this->db->last_query();
        if ($query->num_rows() == 1)  
        {   
            return $query->result(); 

        } else {  
            return false;  
        }  
    }
    //
    

}
