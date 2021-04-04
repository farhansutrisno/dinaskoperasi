<?php
class C_agendaKerja extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_agendaKerja');
	}

	public  function lihatAgendaKerja(){
		$data['agenda'] = $this->mod_agendaKerja->lihatAgendaKerja()->result();
		$this->load->view('webbackend/V_lihatAgendaKerja',$data);
	}

	public function inputAgendaKerja(){
		$this->load->view('webbackend/V_inputAgendaKerja');
	}

	public function prosesInputAgendaKerja(){

		$this->form_validation->set_rules('agenda','agenda','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiAgendaKerja','isi agenda','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('webbackend/V_inputAgendaKerja');

		    }
		    else{

		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg|gif';
	            $config['max_size'] = 500000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan1', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil memasukan data agenda kerja</p>
			                </div>');
				$this->mod_agendaKerja->inputAgendaKerja($data['file_name']);
				redirect('webbackend/C_agendaKerja/lihatAgendaKerja');

		    }
		}
		
	}

	public function updateAgendaKerja($kdAgenda){
		$data["agenda"] = $this->mod_agendaKerja->updateAgendaKerja($kdAgenda)->result();
		$this->load->view('webbackend/V_updateAgendaKerja', $data);
	}

	public function prosesUpdateAgendaKerja(){

		$this->form_validation->set_rules('agenda','agenda','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiAgendaKerja','isi agenda','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdAgenda		= $this->input->post('kdAgenda');
		    	$data["agenda"] = $this->mod_agendaKerja->updateAgendaKerja($kdAgenda)->result();
				$this->load->view('webbackend/V_updateAgendaKerja', $data);

		    }
		    else{

		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg|gif';
	            $config['max_size'] = 500000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengubah data agenda kerja</p>
			                </div>');
				$this->mod_agendaKerja->prosesUpdateAgendaKerja($data['file_name']);
				redirect('webbackend/C_agendaKerja/lihatAgendaKerja');

		    }
		}

	}

	public function deleteAgendaKerja($kdAgenda){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data agenda kerja<br/></p>
		                </div>');
		$this->mod_agendaKerja->deleteAgendaKerja($kdAgenda);
		redirect('webbackend/C_agendaKerja/lihatAgendaKerja');
	}

	public function detailAgendaKerja($kdAgenda){
		$data["row"] = $this->mod_agendaKerja->detailAgendaKerja($kdAgenda)->result();
		$this->load->view('webbackend/V_detailAgendaKerja', $data);
	}
}
?>