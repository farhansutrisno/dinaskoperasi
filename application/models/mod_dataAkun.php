<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataAkun extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login(){
		return $this->db->get('dataakun'); 
	}

	public function createAkun($gambar){
		
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$tanggal_lahir 	= $this->input->post('tanggal_lahir');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"tglLahir" 			=> $tanggal_lahir,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				"foto"				=> $gambar 
			);

				$this->db->insert('dataakun',$data);
	}

	public function lihatAkun(){
		return $this->db->get("dataakun");
	}

	public function prosesUpdateAkun($gambar){
		if($gambar==null){
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$tglLahir 		= $this->input->post('tglLahir');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"tglLahir" 			=> $tglLahir,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("dataakun",$data);
		}else{
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$tglLahir 		= $this->input->post('tglLahir');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"tglLahir" 			=> $tglLahir,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				"foto"				=> $gambar 
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("dataakun",$data);
		}
	}

	public function prosesUpdateDataPembeli(){

			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("dataakun",$data);
	}
	
}
?>