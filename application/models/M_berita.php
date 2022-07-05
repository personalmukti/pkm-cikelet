<?php
class M_berita extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
		return $hsl;
	}

	function get_all_berita($x){
		$this->db->order_by('berita_id', 'desc');

		$hsl = $this->db->get('tbl_berita', $x);
		return $hsl;
	}

	function get_all(){
		$this->db->order_by('berita_id', 'desc');

		$hsl = $this->db->get('tbl_berita');
		return $hsl;
	}

	function readnews(){
		$hsl = $this->db->get('tbl_berita');

        return $hsl;
	}

	function readone($id=''){
		$this->db->where('berita_id', $id);
		$result = $this->db->get('tbl_berita');

		return $result;
	}

	function remove($id)
	{
		$berita_id = $id;

		$this->db->where('berita_id', $berita_id);

		$this->db->where('berita_id', $berita_id);
		$this->db->delete('tbl_berita');
	}
}