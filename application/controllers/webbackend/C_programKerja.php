<?php
class C_programKerja extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_programKerja');
	}

	public  function lihatProgramKerja(){
		$data['program'] = $this->mod_programKerja->lihatProgramKerja()->result();
		$this->load->view('webbackend/V_lihatProgramKerja',$data);
	}

	public function inputProgramKerja(){
		$this->load->view('webbackend/V_inputProgramKerja');
	}

	public function prosesInputProgramKerja(){

		$this->form_validation->set_rules('program','program','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiProgramKerja','isi program kerja','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$this->load->view('webbackend/V_inputProgramKerja');

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
			                    <p>Berhasil memasukan data program kerja</p>
			                </div>');
				$this->mod_programKerja->inputProgramKerja($data['file_name']);
				redirect('webbackend/C_programKerja/lihatProgramKerja');
		
		    }
		}
	}

	public function updateProgramKerja($kdProgram){
		$data["program"] = $this->mod_programKerja->updateProgramKerja($kdProgram)->result();
		$this->load->view('webbackend/V_updateProgramKerja', $data);
	}

	public function prosesUpdateProgramKerja(){

		$this->form_validation->set_rules('program','program','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiProgramKerja','isi program kerja','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdProgram		= $this->input->post('kdProgram');
		    	$data["program"] = $this->mod_programKerja->updateProgramKerja($kdProgram)->result();
				$this->load->view('webbackend/V_updateProgramKerja', $data);

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
			                    <p>Berhasil mengubah data program kerja</p>
			                </div>');
				$this->mod_programKerja->prosesUpdateProgramKerja($data['file_name']);
				redirect('webbackend/C_programKerja/lihatProgramKerja');
		
		    }
		}
	}

	public function deleteProgramKerja($kdProgram){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data program kerja<br/></p>
		                </div>');
		$this->mod_programKerja->deleteProgramKerja($kdProgram);
		redirect('webbackend/C_programKerja/lihatProgramKerja');
	}

	public function detailProgramKerja($kdProgram){
		$data["row"] = $this->mod_programKerja->detailProgramKerja($kdProgram)->result();
		$this->load->view('webbackend/V_detailProgramKerja', $data);
	}
}
?>