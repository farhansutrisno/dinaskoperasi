<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataPesanMasuk extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function kirimPesan(){
		
			$namaLengkap 	= $this->input->post('namaLengkap');
			$email		 	= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$judulPesan 	= $this->input->post('judulPesan');
			$isiPesan 		= $this->input->post('isiPesan');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"email"				=> $email,
				"noTelepon" 		=> $noTelepon,
				"judulPesan" 		=> $judulPesan,
				"isiPesan" 			=> $isiPesan,
				"tanggalPesan" 		=> date("Y-m-d") );

				$this->db->insert('pesanMasuk',$data);
	}

	public function lihatPesanMasuk(){
		$this->db->order_by('tanggalPesan', 'DESC');
		return $this->db->get("pesanMasuk");
	}
	
	public function deletePesanMasuk($kdPesanMasuk){
		$this->db->where("kdPesanMasuk",$kdPesanMasuk);
		return $this->db->delete("pesanMasuk");
	}

	public function detailPesanMasuk($kdPesanMasuk){
		 $this->db->where("kdPesanMasuk",$kdPesanMasuk);
		 return $this->db->get("pesanMasuk");
	}

}
?>