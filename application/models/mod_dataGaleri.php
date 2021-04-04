<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataGaleri extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputDataGaleri($foto){
			$judul 			= $this->input->post('judul');
			
			$data 			= array(
				"judul" 			=> $judul,
				"tanggalGaleri" 	=> date("Y-m-d"),
				"gambar"			=> $foto
			);
				$this->db->insert('galeri',$data);
	}

	public function lihatDataGaleri(){
		$this->db->order_by('tanggalGaleri', 'DESC');
		return $this->db->get("galeri");
	}

	public function lihatDataGaleri2($limit, $start){
		return $this->db->get("galeri",$limit, $start);
	}
	
	public function deleteDataGaleri($kdGaleri){
		$this->db->where("kdGaleri",$kdGaleri);
		return $this->db->delete("galeri");
	}

	public function detailDataGaleri($kdGaleri){
		 $this->db->where("kdGaleri",$kdGaleri);
		 return $this->db->get("galeri");
	}

	public function updateDataGaleri($kdGaleri){
		 $this->db->where("kdGaleri",$kdGaleri);
		 return $this->db->get("galeri");
	}

	public function prosesUpdateDataGaleri($foto){
		if($foto==null){
			$kdGaleri	 	= $this->input->post('kdGaleri');
			$judul 			= $this->input->post('judul');
			
			$data 			= array(
				"judul" 			=> $judul,
				"tanggalGaleri" 	=> date("Y-m-d")
			);

			$this->db->where("kdGaleri",$kdGaleri);
			return $this->db->update("galeri",$data);
		}else{
			$kdGaleri	 	= $this->input->post('kdGaleri');
			$judul 			= $this->input->post('judul');
			
			$data 			= array(
				"judul" 			=> $judul,
				"tanggalGaleri" 	=> date("Y-m-d"),
				"gambar"			=> $foto
			);

			$this->db->where("kdGaleri",$kdGaleri);
			return $this->db->update("galeri",$data);
		}
	}
}
?>