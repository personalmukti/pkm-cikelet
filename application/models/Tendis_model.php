<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tendis_model extends CI_Model 
{
    public function getDokter()
    {
        $this->db->order_by('id', 'desc');
        
        $result = $this->db->get('tbl_tendis');

        return $result;
    }                        
                        
}


/* End of file Tendis_model.php and path \application\models\Tendis_model.php */
