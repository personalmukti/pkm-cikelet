<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbid extends CI_Controller {

	public function index()
	{
		$this->load->view('errorpage/404.php');
	}

}

/* End of file Forbid.php */
/* Location: ./application/controllers/Forbid.php */