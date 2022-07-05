<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class AuthControl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Authentication_model');
        
    }
    public function index()
    {
        $data['title'] = 'PKM Cikelet  | Sign in';

        $this->load->view('auths/login', $data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Authentication_model->cek_login("admin",$where)->num_rows();

		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

    function register() {
        // $password = md5($this->input->post('password'));
        $pass = 'password';

        $password = md5($pass);

        $data = array(
            'username' => 'admin',
            'password' => $password
        );

        $this->Authentication_model->regist($data);
    }
}

/* End of file AuthControl.php and path \application\controllers\AuthControl.php */
