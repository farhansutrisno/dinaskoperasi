<?php
class C_dataBerita extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataBerita');
	}

	public  function lihatBerita(){
		$data['berita'] = $this->mod_dataBerita->lihatDataBerita()->result();
		$this->load->view('webbackend/V_lihatDataBerita',$data);
	}

	public function inputDataBerita(){
		$this->load->view('webbackend/V_inputDataBerita');
	}

	public function prosesInputDataBerita(){

		$this->form_validation->set_rules('judul','judul','trim|required|min_length[4]');
	    $this->form_validation->set_rules('narasi','narasi','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$this->load->view('webbackend/V_inputDataBerita');

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
			                    <p>Berhasil memasukan berita</p>
			                </div>');
				$this->mod_dataBerita->inputDataBerita($data['file_name']);
				redirect('webbackend/C_dataBerita/lihatBerita');	

		    }
		}
		
	}

	public function updateDataBerita($kdBerita){
		$data["berita"] = $this->mod_dataBerita->updateDataBerita($kdBerita)->result();
		$this->load->view('webbackend/V_updateDataBerita', $data);
	}

	public function prosesUpdateDataBerita(){

		$this->form_validation->set_rules('judul','judul','trim|required|min_length[4]');
	    $this->form_validation->set_rules('narasi','narasi','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdBerita = $this->input->post('kdBerita');
		    	$data["berita"] = $this->mod_dataBerita->updateDataBerita($kdBerita)->result();
				$this->load->view('webbackend/V_updateDataBerita', $data);

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
			                    <p>Berhasil mengubah data berita</p>
			                </div>');
				$this->mod_dataBerita->prosesUpdateDataBerita($data['file_name']);
				redirect('webbackend/C_dataBerita/lihatBerita');

		    }
		}
	
	}

	public function deleteDataBerita($kdBerita){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data berita<br/></p>
		                </div>');
		$this->mod_dataBerita->deleteDataBerita($kdBerita);
		redirect('webbackend/C_dataBerita/lihatBerita');
	}

	public function detailDataBerita($kdBerita){
		$data["row"] = $this->mod_dataBerita->updateDataBerita($kdBerita)->result();
		$this->load->view('webbackend/V_detailBerita', $data);
	}
}
?>