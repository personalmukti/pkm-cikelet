<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tendis_model extends CI_Model 
{
    function getDokter()
    {
        $this->db->order_by('id', 'desc');
        
        $result = $this->db->get('tbl_tendis');

        return $result;
    }  

    function addTendis($data)
    {
        $this->db->insert('tbl_tendis', $data);
    }

    function grabTendis($id)
    {
        $this->db->where('id', $id);

        $hasil = $this->db->get('tbl_tendis');

        return $hasil;   
    }

    function updateTendis($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_tendis', $data);        
    }
    
    function remove($id)
    {
        $this->db->where('id', $id);
        
        $this->db->delete('tbl_tendis');
        
    }
                        
}


/* End of file Tendis_model.php and path \application\models\Tendis_model.php */
