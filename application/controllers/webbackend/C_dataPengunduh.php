<?php
class C_dataPengunduh extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->helper('url');
		$this->load->model('mod_dataPengunduh');
	}

	public function lihatPengunduh(){
		$data['pengunduh'] = $this->mod_dataPengunduh->lihatDataPengunduh()->result();
		$this->load->view('webbackend/V_lihatPengunduh',$data);
	}

	public function exportPengunduh(){
		$data['pengunduh'] = $this->mod_dataPengunduh->lihatDataPengunduh()->result();
		$this->load->view('webbackend/V_excelPengunduh',$data);
	}

	public function deleteDataPengunduh($idPengunduh){
		$this->session->set_flashdata('pesan1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data pengunduh</p>
		                </div>');
		$this->mod_dataPengunduh->deleteDataPengunduh($idPengunduh);
		redirect('webbackend/C_dataPengunduh/lihatPengunduh');
	}
    
}

?>