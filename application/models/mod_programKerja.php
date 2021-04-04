<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_programKerja extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputProgramKerja($gambar){
			
			$program 			= $this->input->post('program');
			$isiProgramKerja 	= $this->input->post('isiProgramKerja');
			
			$data 			= array(
				"program"	 			=> $program,
				"isiProgramKerja" 		=> $isiProgramKerja,
				"gambar"				=> $gambar
			);

				$this->db->insert('program',$data);
	}

	public function lihatProgramKerja(){
		return $this->db->get("program");
	}

	public function lihatProgramKerja2($limit, $start){
		return $this->db->get("program",$limit, $start);
	}

	public function lihatAgendaKerja(){
		return $this->db->get("agenda");
	}

	public function lihatStruktur(){
		return $this->db->get("struktur");
	}
	
	public function deleteProgramKerja($kdProgram){
		$this->db->where("kdProgram",$kdProgram);
		return $this->db->delete("program");
	}

	public function updateProgramKerja($kdProgram){
		 $this->db->where("kdProgram",$kdProgram);
		 return $this->db->get("program");
	}

	public function prosesUpdateProgramKerja($gambar){
		if($gambar==null){
			$kdProgram			= $this->input->post('kdProgram');
			$program 			= $this->input->post('program');
			$isiProgramKerja 	= $this->input->post('isiProgramKerja');
		
			$data 			= array(
				"program" 			=> $program,
				"isiProgramKerja" 	=> $isiProgramKerja
			);

			$this->db->where("kdProgram",$kdProgram);
			return $this->db->update("program",$data);
		}else{
			$kdProgram			= $this->input->post('kdProgram');
			$program 			= $this->input->post('program');
			$isiProgramKerja 	= $this->input->post('isiProgramKerja');
		
			$data 			= array(
				"program" 			=> $program,
				"isiProgramKerja" 	=> $isiProgramKerja,
				"gambar"			=> $gambar
			);

			$this->db->where("kdProgram",$kdProgram);
			return $this->db->update("program",$data);
		}
	}

	public function detailProgramKerja($kdProgram){
		 $this->db->where("kdProgram",$kdProgram);
		 return $this->db->get("program");
	}
}
?>