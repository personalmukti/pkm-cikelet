<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicHub extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_berita');
	}

	public function index()
	{
		$data['title'] = 'Home || PKM Cikelet';

		$config['per_page'] = 4;
		$x = $config['per_page'];
		$config['page_query_string'] = TRUE;

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data['allnews'] = $this->M_berita->get_all_berita($x);

		$this->template->load('pubs/layout/template', 'pubs/index', $data);
		//$this->load->view('pubs/index', $data);
	}

	public function layanan()
	{
		$data['title'] = 'Layanan || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/layanan', $data);
	}

	public function ikm()
	{
		$data['title'] = 'IKM || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/ikm', $data);
	}

	// Function Informasi Layanan
	public function poliumum()
	{
		$data['title'] = 'Poli Umum || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/poliumum', $data);
	}

	// Function Informasi Layanan
	public function tbparu()
	{
		$data['title'] = 'TB Paru || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/tbparu', $data);
	}

	// Function Informasi Layanan
	public function kesgimul()
	{
		$data['title'] = 'Poli Gigi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/poligigi', $data);
	}

	// Function Informasi Layanan
	public function lansia()
	{
		$data['title'] = 'Lansia || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/lansia', $data);
	}

	// Function Informasi Layanan
	public function imunisasi()
	{
		$data['title'] = 'Imunisasi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/imunisasi', $data);
	}

	// Function Informasi Layanan
	public function kiakb()
	{
		$data['title'] = 'KIA-KB || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/kiakb', $data);
	}

	// Function Informasi Layanan
	public function mtbs()
	{
		$data['title'] = 'MTBS/MTBM || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/mtbs', $data);
	}

	// Function Informasi Layanan
	public function jiwa()
	{
		$data['title'] = 'Pemeriksaan Jiwa || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/jiwa', $data);
	}

	// Function Informasi Layanan
	public function farmalab()
	{
		$data['title'] = 'Farmasi & Lab || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/farmalab', $data);
	}

	// Function Informasi Layanan
	public function ugd()
	{
		$data['title'] = 'UGD/Poned/Inap/Rujukan || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/ugd', $data);
	}

	// Function Informasi Visi Misi
	public function visi()
	{
		$data['title'] = 'Visi & Misi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/visi-misi', $data);
	}

	public function getblog()
	{
		$data['title'] = 'Artikel || PKM Cikelet';

		$config['per_page'] = 10;
		$x = $config['per_page'];
		$config['page_query_string'] = TRUE;

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data['allnews'] = $this->M_berita->get_all_berita($x);

		$this->template->load('pubs/layout/template', 'pubs/component/blogpost', $data);
	}

	public function kontak()
	{
		$data['title'] = 'Hubungi Kami || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/kontak', $data);
	}

	public function organisasi()
	{
		$data['title'] = 'Organisasi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/organisasi', $data);
	}

	public function getdokter()
	{
		$data['title'] = 'Tenaga Medis || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/tendis', $data);
	}

	public function profil()
	{
		$data['title'] = 'Profil Penyelenggara || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/profil', $data);
	}

	public function maklumat()
	{
		$data['title'] = 'Profil Penyelenggara || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/maklumat', $data);
	}

	public function penghargaan()
	{
		$data['title'] = 'Penghargaan dan Prestasi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/achievement', $data);
	}

	public function inovasi()
	{
		$data['title'] = 'Program dan Inovasi || PKM Cikelet';

		$this->template->load('pubs/layout/template', 'pubs/component/inovasi', $data);
	}

}

/* End of file Public.php */
/* Location: ./application/controllers/Public.php */