<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataBerita extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputDataBerita($foto){
			
			$judul 			= $this->input->post('judul');
			$narasi 		= $this->input->post('narasi');
			
			$data 			= array(
				"judul" 			=> $judul,
				"narasi" 			=> $narasi,
				"tanggalBerita" 	=> date("Y-m-d"),
				"gambar"			=> $foto
			);
				$this->db->insert('berita',$data);
	}

	public function lihatDataBerita(){
		return $this->db->get("berita");
	}

	public function lihatDataBerita2($limit, $start){
		return $this->db->get("berita",$limit, $start);
	}
	
	public function deleteDataBerita($kdBerita){
		$this->db->where("kdBerita",$kdBerita);
		return $this->db->delete("berita");
	}

	public function detailDataBerita($kdBerita){
		 $this->db->where("kdBerita",$kdBerita);
		 return $this->db->get("berita");
	}
	
	public function updateDataBerita($kdBerita){
		 $this->db->where("kdBerita",$kdBerita);
		 return $this->db->get("berita");
	}

	public function prosesUpdateDataBerita($gambar){
		if($gambar==null){
			$kdBerita 		= $this->input->post('kdBerita');
			$judul 			= $this->input->post('judul');
			$narasi 		= $this->input->post('narasi');
			
			$data 			= array(
				"judul" 			=> $judul,
				"narasi" 			=> $narasi,
				"tanggalBerita" 	=> date("Y-m-d")
			);

			$this->db->where("kdBerita",$kdBerita);
			return $this->db->update("berita",$data);
		}else{
			$kdBerita 		= $this->input->post('kdBerita');
			$judul 			= $this->input->post('judul');
			$narasi 		= $this->input->post('narasi');
			
			$data 			= array(
				"judul" 			=> $judul,
				"narasi" 			=> $narasi,
				"tanggalBerita" 	=> date("Y-m-d"),
				"gambar"			=> $gambar
			);

			$this->db->where("kdBerita",$kdBerita);
			return $this->db->update("berita",$data);
		}
	}
}
?>