<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Authentication_model extends CI_Model 
{ 
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
    
    //public function regist($data)
    //{
    //    $this->db->insert('admin',$data);
    //}                        
                        
}


/* End of file Authentication_model.php and path \application\models\Authentication_model.php */
