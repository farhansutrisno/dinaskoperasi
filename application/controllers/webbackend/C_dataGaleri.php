<?php
class C_dataGaleri extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataGaleri');
	}

	public  function lihatGaleri(){
		$data['galeri'] = $this->mod_dataGaleri->lihatDataGaleri()->result();
		$this->load->view('webbackend/V_lihatDataGaleri',$data);
	}

	public function inputDataGaleri(){
		$this->load->view('webbackend/V_inputDataGaleri');
	}

	public function prosesInputDataGaleri(){

		$this->form_validation->set_rules('judul','judul','trim|required|min_length[4]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$this->load->view('webbackend/V_inputDataGaleri');

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
			                    <p>Berhasil memasukan galeri</p>
			                </div>');
				$this->mod_dataGaleri->inputDataGaleri($data['file_name']);
				redirect('webbackend/C_dataGaleri/lihatGaleri');

		    }
		}
	}

	public function updateDataGaleri($kdGaleri){
		$data["galeri"] = $this->mod_dataGaleri->updateDataGaleri($kdGaleri)->result();
		$this->load->view('webbackend/V_updateDataGaleri', $data);
	}

	public function prosesUpdateDataGaleri(){

		$this->form_validation->set_rules('judul','judul','trim|required|min_length[4]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdGaleri = $this->input->post('kdGaleri');
		    	$data["galeri"] = $this->mod_dataGaleri->updateDataGaleri($kdGaleri)->result();
				$this->load->view('webbackend/V_updateDataGaleri', $data);

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
			                    <p>Berhasil mengubah data galeri</p>
			                </div>');
				$this->mod_dataGaleri->prosesUpdateDataGaleri($data['file_name']);
				redirect('webbackend/C_dataGaleri/lihatGaleri');

		    }
		}
	}

	public function deleteDataGaleri($kdGaleri){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data galeri<br/></p>
		                </div>');
		$this->mod_dataGaleri->deleteDataGaleri($kdGaleri);
		redirect('webbackend/C_dataGaleri/lihatGaleri');
	}

	public function detailDataGaleri($kdGaleri){
		$data["row"] = $this->mod_dataGaleri->detailDataGaleri($kdGaleri)->result();
		$this->load->view('webbackend/V_detailGaleri', $data);
	}
}
?>