<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_agendaKerja extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputAgendaKerja($gambar){
			
			$agenda 			= $this->input->post('agenda');
			$isiAgendaKerja 	= $this->input->post('isiAgendaKerja');
			
			$data 			= array(
				"agenda"	 			=> $agenda,
				"isiAgendaKerja" 		=> $isiAgendaKerja,
				"gambar"				=> $gambar
			);

				$this->db->insert('agenda',$data);
	}

	public function lihatAgendaKerja(){
		return $this->db->get("agenda");
	}

	public function lihatAgendaKerja2($limit, $start){
		return $this->db->get("agenda",$limit, $start);
	}
	
	public function deleteAgendaKerja($kdAgenda){
		$this->db->where("kdAgenda",$kdAgenda);
		return $this->db->delete("agenda");
	}

	public function updateAgendaKerja($kdAgenda){
		 $this->db->where("kdAgenda",$kdAgenda);
		 return $this->db->get("agenda");
	}

	public function prosesUpdateAgendaKerja($gambar){
		if($gambar==null){
			$kdAgenda			= $this->input->post('kdAgenda');
			$agenda 			= $this->input->post('agenda');
			$isiAgendaKerja 	= $this->input->post('isiAgendaKerja');
		
			$data 			= array(
				"agenda" 			=> $agenda,
				"isiAgendaKerja" 	=> $isiAgendaKerja
				
			);

			$this->db->where("kdAgenda",$kdAgenda);
			return $this->db->update("agenda",$data);
		}else{
			$kdAgenda			= $this->input->post('kdAgenda');
			$agenda 			= $this->input->post('agenda');
			$isiAgendaKerja 	= $this->input->post('isiAgendaKerja');
		
			$data 			= array(
				"agenda" 			=> $agenda,
				"isiAgendaKerja" 	=> $isiAgendaKerja,
				"gambar"			=> $gambar
			);

			$this->db->where("kdAgenda",$kdAgenda);
			return $this->db->update("agenda",$data);
		}
	}

	public function detailAgendaKerja($kdAgenda){
		 $this->db->where("kdAgenda",$kdAgenda);
		 return $this->db->get("agenda");
	}
}
?>