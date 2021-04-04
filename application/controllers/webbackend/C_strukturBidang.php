<?php
class C_strukturBidang extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_strukturBidang');
	}

	public  function lihatStruktur(){
		$data['struktur'] = $this->mod_strukturBidang->lihatStruktur()->result();
		$this->load->view('webbackend/V_lihatStruktur',$data);
	}

	public function inputStruktur(){
		$this->load->view('webbackend/V_inputStruktur');
	}

	public function prosesInputStruktur(){

		$this->form_validation->set_rules('namaPegawai','nama pegawai','trim|required|min_length[4]');
	    $this->form_validation->set_rules('nip','NIP','required|min_length[6]|numeric');
	    $this->form_validation->set_rules('jabatan','jabatan','required|min_length[8]');
	    $this->form_validation->set_rules('bagian','bagian','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$this->load->view('webbackend/V_inputStruktur');

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
			                    <p>Berhasil memasukan data struktur bidang kelembagaan koperasi</p>
			                </div>');
				$this->mod_strukturBidang->inputStruktur($data['file_name']);
				redirect('webbackend/C_strukturBidang/lihatStruktur');

		    }
		}
	}

	public function updateStruktur($kdStruktur){
		$data["struktur"] = $this->mod_strukturBidang->updateStruktur($kdStruktur)->result();
		$this->load->view('webbackend/V_updateStruktur', $data);
	}

	public function prosesUpdateStruktur(){

		$this->form_validation->set_rules('namaPegawai','nama pegawai','trim|required|min_length[4]');
	    $this->form_validation->set_rules('nip','NIP','required|min_length[6]|numeric');
	    $this->form_validation->set_rules('jabatan','jabatan','required|min_length[8]');
	    $this->form_validation->set_rules('bagian','bagian','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdStruktur		= $this->input->post('kdStruktur');
		    	$data["struktur"] = $this->mod_strukturBidang->updateStruktur($kdStruktur)->result();
				$this->load->view('webbackend/V_updateStruktur', $data);

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
			                    <p>Berhasil mengubah data struktur bidang kelembagaan koperasi</p>
			                </div>');
				$this->mod_strukturBidang->prosesUpdateStruktur($data['file_name']);
				redirect('webbackend/C_strukturBidang/lihatStruktur');

		    }
		}
	}

	public function deleteStruktur($kdStruktur){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data agenda kerja<br/></p>
		                </div>');
		$this->mod_strukturBidang->deleteStruktur($kdStruktur);
		redirect('webbackend/C_strukturBidang/lihatStruktur');
	}

	public function detailStruktur($kdStruktur){
		$data["row"] = $this->mod_strukturBidang->detailStruktur($kdStruktur)->result();
		$this->load->view('webbackend/V_detailStruktur', $data);
	}
}
?>