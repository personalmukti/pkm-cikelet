<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsHub extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
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

    public function detailnews($id)
    {
        $data['title'] = 'Detail Artikel || PKM Cikelet';
        $data['berita'] = $this->M_berita->readone($id);

        $this->template->load('pubs/layout/template', 'pubs/component/blogdetail', $data);
    }
}

/* End of file NewsHub.php and path \application\controllers\NewsHub.php */
