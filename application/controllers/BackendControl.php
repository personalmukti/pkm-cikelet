<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackendControl extends CI_Controller
{

	private $filename = "import_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_berita');
		$this->load->library('upload');
		$this->load->model('Tendis_model');


		if ($this->session->userdata('status') != 'login') {
			redirect('sign-in');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard || Admin PKM Cikelet';

		$this->template->load('back/layout/template', 'back/index', $data);
	}

	public function postberita()
	{
		$data['title'] = 'Post Berita || Admin PKM Cikelet';

		$this->template->load('back/layout/template', 'back/post-berita', $data);
	}

	public function publish()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 710;
				$config['height'] = 420;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$jdl = $this->input->post('judul');
				$berita = $this->input->post('berita');

				$this->M_berita->simpan_berita($jdl, $berita, $gambar);

				redirect('post-berita');
			} else {
				redirect('post-berita');
			}
		} else {
			redirect('post-berita');
		}
	}

	function fetchnews()
	{
		$data['title'] = 'Semua Berita || Admin PKM Cikelet';

		$data['berita'] = $this->M_berita->get_all();

		$this->template->load('back/layout/template', 'back/tberita', $data);
	}

	function delete($id)
	{
		$query = $this->db->query('select berita_image from tbl_berita where berita_id=' . $id);

		foreach ($query->result() as $row) {
			$imgname = $row->berita_image;
		}

		$target = './assets/images/' . $imgname;
		unlink($target);

		$this->M_berita->remove($id);
		redirect('data-berita');
	}

	function managetendis()
	{
		$data['title'] = 'Tenaga Medis || Admin PKM Cikelet';

		$data['tendis'] = $this->Tendis_model->getDokter();

		$this->template->load('back/layout/template', 'back/ttendis', $data);
	}

	function profilepage()
	{
		$data['title'] = 'Profil || Admin PKM Cikelet';

		$this->template->load('back/layout/template', 'back/profil', $data);
	}
}

/* End of file BackendControl.php */
/* Location: ./application/controllers/BackendControl.php */