<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_strukturBidang extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputStruktur($gambar){
			
			$namaPegawai 		= $this->input->post('namaPegawai');
			$nip 				= $this->input->post('nip');
			$jabatan 			= $this->input->post('jabatan');
			$bagian 			= $this->input->post('bagian');

			$data 			= array(
				"namaPegawai"	 	=> $namaPegawai,
				"nip" 				=> $nip,
				"jabatan"			=> $jabatan,
				"bagian"			=> $bagian,
				"foto"				=> $gambar
			);

				$this->db->insert('struktur',$data);
	}

	public function lihatStruktur(){
		return $this->db->get("struktur");
	}

	public function lihatStruktur2(){
		return $this->db->get("struktur");
	}
	
	public function deleteStruktur($kdStruktur){
		$this->db->where("kdStruktur",$kdStruktur);
		return $this->db->delete("struktur");
	}

	public function updateStruktur($kdStruktur){
		 $this->db->where("kdStruktur",$kdStruktur);
		 return $this->db->get("struktur");
	}

	public function prosesUpdateStruktur($gambar){
		if($gambar==null){	
			$kdStruktur			= $this->input->post('kdStruktur');
			$namaPegawai 		= $this->input->post('namaPegawai');
			$nip 				= $this->input->post('nip');
			$jabatan			= $this->input->post('jabatan');
			$bagian				= $this->input->post('bagian');

			$data 			= array(
				"namaPegawai" 	=> $namaPegawai,
				"nip" 			=> $nip,
				"jabatan"		=> $jabatan,
				"bagian"		=> $bagian
			);

			$this->db->where("kdStruktur",$kdStruktur);
			return $this->db->update("struktur",$data);
		}else{
			$kdStruktur			= $this->input->post('kdStruktur');
			$namaPegawai 		= $this->input->post('namaPegawai');
			$nip 				= $this->input->post('nip');
			$jabatan			= $this->input->post('jabatan');
			$bagian				= $this->input->post('bagian');

			$data 			= array(
				"namaPegawai" 	=> $namaPegawai,
				"nip" 			=> $nip,
				"jabatan"		=> $jabatan,
				"bagian"		=> $bagian,
				"foto"			=> $gambar
			);

			$this->db->where("kdStruktur",$kdStruktur);
			return $this->db->update("struktur",$data);
		}
	}

	public function detailStruktur($kdStruktur){
		 $this->db->where("kdStruktur",$kdStruktur);
		 return $this->db->get("struktur");
	}
}
?>