<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataOperator extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputDataOperator($gambar,$username,$password){
			
			$namaLengkap 	= $this->input->post('namaLengkap');
			$email 			= $this->input->post('email');
			$tanggalLahir 	= $this->input->post('tanggalLahir');
			$noTelepon 		= $this->input->post('noTelepon');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
		

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"tanggalLahir" 		=> $tanggalLahir,
				"jenisKelamin" 		=> $jenisKelamin,
				"foto"				=> $gambar
			);

				$this->db->insert('operator',$data);
	}

	public function lihatDataOperator(){
		return $this->db->get("operator");
	}
	
	public function deleteDataOperator($idOperator){
		$this->db->where("idOperator",$idOperator);
		return $this->db->delete("operator");
	}

	public function updateDataOperator($idOperator){
		 $this->db->where("idOperator",$idOperator);
		 return $this->db->get("operator");
	}

	public function prosesUpdateDataOperator($gambar){
		if($gambar==null){
			$idOperator 	= $this->input->post('idOperator');
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$tanggalLahir 	= $this->input->post('tanggalLahir');
			$noTelepon 		= $this->input->post('noTelepon');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
		

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"tanggalLahir" 		=> $tanggalLahir,
				"jenisKelamin" 		=> $jenisKelamin
			);

			$this->db->where("idOperator",$idOperator);
			return $this->db->update("operator",$data);
		}else{
			$idOperator 	= $this->input->post('idOperator');
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$tanggalLahir 	= $this->input->post('tanggalLahir');
			$noTelepon 		= $this->input->post('noTelepon');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
		

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"tanggalLahir" 		=> $tanggalLahir,
				"jenisKelamin" 		=> $jenisKelamin,
				"foto"				=> $gambar
			);

			$this->db->where("idOperator",$idOperator);
			return $this->db->update("operator",$data);
		}
	}

	public function detailDataOperator($idOperator){
		 $this->db->where("idOperator",$idOperator);
		 return $this->db->get("operator");
	}
}
?>