<?php
class C_pesanMasuk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataPesanMasuk');
	}
	
	public function lihatPesanMasuk(){
		$data['pesan'] = $this->mod_dataPesanMasuk->lihatPesanMasuk()->result();
		$this->load->view('webbackend/V_lihatPesanMasuk',$data);
	}

	//function dibawah ini tidak dipakai
	/*public function kirimPesan(){
		$this->load->view('V_kirimPesan');
	}*/

	public function prosesKirimPesan(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('noTelepon','no telepon','trim|required|min_length[10]|numeric');
	    $this->form_validation->set_rules('judulPesan','judul pesan','trim|required|min_length[8]');
	    $this->form_validation->set_rules('isiPesan','isi pesan','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('V_pesan');

		    }
		    else{

		        $this->session->set_flashdata('pesan1', 
                        '<div class="alert alert-info ">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>BERHASIL ! </h7>
                            <p>Berhasil Kirim Pesan</p>
                        </div>');

	            $this->mod_dataPesanMasuk->kirimPesan();
	            redirect('C_frontEnd/kirimPesan');

		    }
		}
    }

	public function deletePesanMasuk($kdPesanMasuk){
		$this->session->set_flashdata('pesan3', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data pesan masuk</p>
		                </div>');
		$this->mod_dataPesanMasuk->deletePesanMasuk($kdPesanMasuk);
		redirect('webbackend/C_pesanMasuk/lihatPesanMasuk');
	}

	public function detailPesanMasuk($kdPesanMasuk){
		$data["row"] = $this->mod_dataPesanMasuk->detailPesanMasuk($kdPesanMasuk)->result();
		$this->load->view('webbackend/V_detailPesanMasuk', $data);
	}
}
?>