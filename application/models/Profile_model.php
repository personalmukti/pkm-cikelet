<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Profile_model extends CI_Model 
{
    public function getProfile()
    {
        $result = $this->db->get('admin');

        return $result;
    }           
    
    function update($data)
    {
        $this->db->update('admin', $data);
    }
                        
}


/* End of file Profile_model.php and path \application\models\Profile_model.php */
