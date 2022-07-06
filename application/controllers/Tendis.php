<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Tendis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tendis_model');
        
    }
    public function index()
    {
        $data['title'] = 'Tenaga Medis || PKM Cikelet';

        $data['tendis'] = $this->Tendis_model->getDokter();

		$this->template->load('pubs/layout/template', 'pubs/component/tendis', $data);
    }
}

/* End of file Tendis.php and path \application\controllers\Tendis.php */
