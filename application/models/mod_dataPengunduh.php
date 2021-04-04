<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataPengunduh extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function lihatDataPengunduh(){
		$this->db->order_by('tglUnduh', 'DESC');
		return $this->db->get("pengunduh");
	}

	public function deleteDataPengunduh($idPengunduh){
		$this->db->where("idPengunduh",$idPengunduh);
		return $this->db->delete("pengunduh");
	}
}
?>