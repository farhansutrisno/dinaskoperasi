<?php
class C_dataKoperasi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->library('pdf','tcpdf');
		$this->load->helper('url');
		$this->load->model('mod_dataKoperasi');
	}
	
	public function lihatDataKoperasi(){
		$data['koperasi'] = $this->mod_dataKoperasi->lihatDataKoperasi()->result();
		$data['bentuk'] = $this->mod_dataKoperasi->filter()->result();
		$data['status'] = $this->mod_dataKoperasi->filterStatus()->result();
		$data['kabupaten'] = $this->mod_dataKoperasi->kabupaten()->result();
		$this->load->view('webbackend/V_lihatDataKoperasi',$data);
	}

	public function exportAll(){
		$data['koperasi'] = $this->mod_dataKoperasi->lihatDataKoperasi()->result();
		$this->load->view('webbackend/V_excelKoperasi',$data);
	}

	public function exportDataAll(){
		$data['koperasi'] = $this->mod_dataKoperasi->lihatDataKoperasi()->result();
		$this->load->view('V_excelKoperasi2',$data);
	}

	public function exportFilter(){
		$data['koperasi'] = $this->mod_dataKoperasi->exportFilter()->result();
		$this->load->view('V_excelKoperasi2',$data);
	}

    function filter(){
        $jenis 		= $this->input->post('jenisKoperasi');
        $this->session->set_userdata('jenis',$jenis);
        $status 	= $this->input->post('statusAktif');
        $this->session->set_userdata('status',$status);
        $kabupaten 	= $this->input->post('kabupaten');
        $this->session->set_userdata('kabupaten',$kabupaten);
        
        $data['jenis'] = $this->mod_dataKoperasi->jenisKoperasi()->result();
		$data['status'] = $this->mod_dataKoperasi->filterStatus()->result();
		$data['kabupaten'] = $this->mod_dataKoperasi->kabupaten()->result();

        $data['koperasi']=  $this->mod_dataKoperasi->excelFilter2($jenis,$status,$kabupaten)->result();
        $this->load->view('V_dataKoperasi',$data);
    }

	public function dataFilter(){
       if(isset($_POST['submit'])){
            $bentuk 	= $this->input->post('bentukKoperasi');
            $status 	= $this->input->post('statusAktif');
            $kabupaten 	= $this->input->post('kabupaten');
            
            $data['koperasi']= $this->mod_dataKoperasi->excelFilter($bentuk,$status,$kabupaten)->result();
            $this->load->view('webbackend/V_excelKoperasi',$data);
        }
    }

	public function lihatDataKoperasi2(){
		$data['jenis'] = $this->mod_dataKoperasi->jenisKoperasi()->result();
		$data['status'] = $this->mod_dataKoperasi->filterStatus()->result();
		$data['kabupaten'] = $this->mod_dataKoperasi->kabupaten()->result();

		$this->session->unset_userdata('jenis');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('kabupaten');

		$data['koperasi'] = $this->mod_dataKoperasi->lihatDataKoperasi()->result();
		$this->load->view('V_dataKoperasi',$data);
	}

	public  function inputPengunduh(){
		$this->load->view('V_pengunduh');
	}

	public function prosesInputPengunduh(){
		
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('noTelepon','no telepon','trim|required|min_length[10]|numeric');
	    $this->form_validation->set_rules('alamat','alamat','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('V_pengunduh');

		    }
		    else{

		       $this->session->set_flashdata('pesan6', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil memasukan data pengunduh</p>
		                </div>');
			
				$this->mod_dataKoperasi->inputPengunduh();
				redirect('webbackend/C_dataKoperasi/exportDataAll'); 

		    }
		}
	}

	public  function inputPengunduh2(){
		$this->load->view('V_pengunduh2');
	}

	public function prosesInputPengunduh2(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('noTelepon','no telepon','trim|required|min_length[10]|numeric');
	    $this->form_validation->set_rules('alamat','alamat','required|min_length[8]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('V_pengunduh2');

		    }
		    else{

		       $this->session->set_flashdata('pesan8', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil memasukan data pengunduh</p>
		                </div>');
			
				$this->mod_dataKoperasi->inputPengunduh();
				redirect('webbackend/C_dataKoperasi/exportFilter');

		    }
		}
	}

	public function importDataKoperasi(){
		$this->load->view('webbackend/V_importDataKoperasi');
	}

	public  function inputDataKoperasi(){
		$this->load->view('webbackend/V_inputDataKoperasi');
	}

	public function prosesInputDataKoperasi(){

		$this->form_validation->set_rules('idKop','id koperasi','trim|required|min_length[4]');
		$this->form_validation->set_rules('koperasi','koperasi','required|min_length[5]');
		$this->form_validation->set_rules('noBadanHukum','no badan hukum','trim|required|min_length[8]');
	    $this->form_validation->set_rules('tglBadanHukum','tanggal badan hukum','required|min_length[1]');
	    $this->form_validation->set_rules('noTelepon1','no telepon','trim|required|min_length[10]');
		$this->form_validation->set_rules('email','email','required|min_length[5]|valid_email');
		$this->form_validation->set_rules('ketua','ketua','trim|required|min_length[4]');
	    $this->form_validation->set_rules('noTelpKetua','no telepon ketua','required|min_length[10]');
	    $this->form_validation->set_rules('bentukKoperasi','bentuk koperasi','trim|required|min_length[4]');
		$this->form_validation->set_rules('jenisKoperasi','jenis koperasi','required|min_length[4]');
		$this->form_validation->set_rules('kelKoperasi','kelompok koperasi','trim|required|min_length[4]');
	    $this->form_validation->set_rules('sektorUsaha','sektor usaha','required|min_length[4]');
	    $this->form_validation->set_rules('mdl_sendiri','modal sendiri','trim|required|min_length[4]|numeric');
		$this->form_validation->set_rules('mdl_luar','modal luar','required|min_length[4]|numeric');
		$this->form_validation->set_rules('aset','aset','trim|required|min_length[4]|numeric');
	    $this->form_validation->set_rules('vlm_usaha','volume usaha','required|min_length[4]|numeric');
	    $this->form_validation->set_rules('shu','sisa hasil usaha','trim|required|min_length[2]|numeric');
		$this->form_validation->set_rules('jml_anggota','jumlah anggota','required|min_length[1]|numeric');
		$this->form_validation->set_rules('jml_karyawan','jumlah karyawan','trim|required|min_length[1]|numeric');
	    $this->form_validation->set_rules('jml_manajer','jumlah manajer','required|min_length[1]|numeric');
	    $this->form_validation->set_rules('tglRAT','tanggal RAT','trim|required');
		$this->form_validation->set_rules('statusAktif','status aktif','required');
		$this->form_validation->set_rules('alamat','alamat','trim|required|min_length[8]');
	    $this->form_validation->set_rules('desa_kel','desa/kelurahan','required|min_length[4]');
	    $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
		$this->form_validation->set_rules('kabupaten','kabupaten','trim|required|min_length[4]');
	    $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('kodePos','kode pos','trim|required|min_length[4]|numeric');
		$this->form_validation->set_rules('tahunRekap','tahun rekap','required|min_length[4]|numeric');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('webbackend/V_inputDataKoperasi');

		    }
		    else{

		       $this->session->set_flashdata('pesan1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menginputkan data koperasi</p>
		                </div>');
				$this->mod_dataKoperasi->inputDataKoperasi();
				redirect('webbackend/C_dataKoperasi/lihatDataKoperasi');

		    }
		}
	}

	public function updateDataKoperasi($idKop){
		$data["koperasi"] = $this->mod_dataKoperasi->updateDataKoperasi($idKop)->result();
		$this->load->view('webbackend/V_updateDataKoperasi', $data);
	}

	public function prosesUpdateDataKoperasi(){

		$this->form_validation->set_rules('idKoperasi','id koperasi','trim|required|min_length[4]');
		$this->form_validation->set_rules('koperasi','koperasi','required|min_length[4]');
		$this->form_validation->set_rules('noBadanHukum','no badan hukum','trim|required|min_length[8]');
	    $this->form_validation->set_rules('tglBadanHukum','tanggal badan hukum','required|min_length[1]');
	    $this->form_validation->set_rules('noTelepon1','no telepon','trim|required|min_length[10]');
		$this->form_validation->set_rules('email','email','required|min_length[5]|valid_email');
		$this->form_validation->set_rules('ketua','ketua','trim|required|min_length[4]');
	    $this->form_validation->set_rules('noTelpKetua','no telepon ketua','required|min_length[10]');
	    $this->form_validation->set_rules('bentukKoperasi','bentuk koperasi','trim|required|min_length[4]');
		$this->form_validation->set_rules('jenisKoperasi','jenis koperasi','required|min_length[4]');
		$this->form_validation->set_rules('kelKoperasi','kelompok koperasi','trim|required|min_length[4]');
	    $this->form_validation->set_rules('sektorUsaha','sektor usaha','required|min_length[4]');
	    $this->form_validation->set_rules('mdl_sendiri','modal sendiri','trim|required|min_length[4]|numeric');
		$this->form_validation->set_rules('mdl_luar','modal luar','required|min_length[4]|numeric');
		$this->form_validation->set_rules('aset','aset','trim|required|min_length[4]|numeric');
	    $this->form_validation->set_rules('vlm_usaha','volume usaha','required|min_length[4]|numeric');
	    $this->form_validation->set_rules('shu','sisa hasil usaha','trim|required|min_length[2]|numeric');
		$this->form_validation->set_rules('jml_anggota','jumlah anggota','required|min_length[1]|numeric');
		$this->form_validation->set_rules('jml_karyawan','jumlah karyawan','trim|required|min_length[1]|numeric');
	    $this->form_validation->set_rules('jml_manajer','jumlah manajer','required|min_length[1]|numeric');
	    $this->form_validation->set_rules('tglRAT','tanggal RAT','required');
		$this->form_validation->set_rules('statusAktif','status aktif','required');
		$this->form_validation->set_rules('alamat','alamat','trim|required|min_length[8]');
	    $this->form_validation->set_rules('desa_kel','desa/kelurahan','required|min_length[4]');
	    $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
		$this->form_validation->set_rules('kabupaten','kabupaten','trim|required|min_length[4]');
	    $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('kodePos','kode pos','trim|required|min_length[4]|numeric');
		$this->form_validation->set_rules('tahunRekap','tahun rekap','required|min_length[4]|numeric');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$idKop = $this->input->post('idKop');
		        $data["koperasi"] = $this->mod_dataKoperasi->updateDataKoperasi($idKop)->result();
				$this->load->view('webbackend/V_updateDataKoperasi', $data);

		    }
		    else{

		       	$this->mod_dataKoperasi->prosesUpdateDataKoperasi();
				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengupdate data koperasi</p>
			                </div>');
				
				redirect('webbackend/C_dataKoperasi/lihatDataKoperasi');

		    }
		}
	}

	public function deleteDataKoperasi($idKop){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data produk</p>
		                </div>');
		$this->mod_dataKoperasi->deleteDataKoperasi($idKop);
		redirect('webbackend/C_dataKoperasi/lihatDataKoperasi');
	}

	public function detailDataKoperasi($idKop){
		$data['row'] = $this->mod_dataKoperasi->detailDataKoperasi($idKop)->result();
		$this->load->view('webbackend/V_detailDataKoperasi',$data);
	}

    function lihatGrafik(){ 
 
    	$x['jml_kop'] 	= $this->mod_dataKoperasi->get_koperasi()->result();
    	$x['pendaftar'] = $this->mod_dataKoperasi->pendaftar()->result();
    	$x['unduh'] 	= $this->mod_dataKoperasi->unduh()->result();

    	$x['kab_pangandaran'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Pangandaran')->row()->primer_kab;
		$x['kab_bogor'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Bogor')->row()->primer_kab;
		$x['kab_sukabumi'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Sukabumi')->row()->primer_kab;
		$x['kab_cianjur'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Cianjur')->row()->primer_kab;
		$x['kab_bandung'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Bandung')->row()->primer_kab;
		$x['kab_bandungBarat'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Bandung Barat')->row()->primer_kab;
		$x['kab_sumedang'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Sumedang')->row()->primer_kab;
		$x['kab_garut'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Garut')->row()->primer_kab;
		$x['kab_tasikmalaya'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Tasikmalaya')->row()->primer_kab;
		$x['kab_ciamis'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Ciamis')->row()->primer_kab;
		$x['kab_kuningan'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Kuningan')->row()->primer_kab;
		$x['kab_cirebon'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Cirebon')->row()->primer_kab;
		$x['kab_majalengka'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Majalengka')->row()->primer_kab;
		$x['kab_indramayu'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Indramayu')->row()->primer_kab;
		$x['kab_subang'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Subang')->row()->primer_kab;
		$x['kab_purwakarta'] 	= $this->mod_dataKoperasi->get_primerkab('Kab. Purwakarta')->row()->primer_kab;
		$x['kab_karawang'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Karawang')->row()->primer_kab;
		$x['kab_bekasi'] 		= $this->mod_dataKoperasi->get_primerkab('Kab. Bekasi')->row()->primer_kab;
		$x['kota_bogor'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Bogor')->row()->primer_kab;
		$x['kota_sukabumi'] 	= $this->mod_dataKoperasi->get_primerkab('Kota Sukabumi')->row()->primer_kab;
		$x['kota_bandung'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Bandung')->row()->primer_kab;
		$x['kota_cirebon'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Cirebon')->row()->primer_kab;
		$x['kota_bekasi'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Bekasi')->row()->primer_kab;
		$x['kota_depok'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Depok')->row()->primer_kab;
		$x['kota_cimahi'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Cimahi')->row()->primer_kab;
		$x['kota_tasikmalaya']	= $this->mod_dataKoperasi->get_primerkab('Kota Tasikmalaya')->row()->primer_kab;
		$x['kota_banjar'] 		= $this->mod_dataKoperasi->get_primerkab('Kota Banjar')->row()->primer_kab;

		$x['kab_pangandaran3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Pangandaran')->row()->sekunder_kab;
		$x['kab_bogor3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Bogor')->row()->sekunder_kab;
		$x['kab_sukabumi3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Sukabumi')->row()->sekunder_kab;
		$x['kab_cianjur3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Cianjur')->row()->sekunder_kab;
		$x['kab_bandung3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Bandung')->row()->sekunder_kab;
		$x['kab_bandungBarat3'] = $this->mod_dataKoperasi->get_sekunderkab('Kab. Bandung Barat')->row()->sekunder_kab;
		$x['kab_sumedang3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Sumedang')->row()->sekunder_kab;
		$x['kab_garut3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Garut')->row()->sekunder_kab;
		$x['kab_tasikmalaya3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Tasikmalaya')->row()->sekunder_kab;
		$x['kab_ciamis3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Ciamis')->row()->sekunder_kab;
		$x['kab_kuningan3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Kuningan')->row()->sekunder_kab;
		$x['kab_cirebon3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Cirebon')->row()->sekunder_kab;
		$x['kab_majalengka3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Majalengka')->row()->sekunder_kab;
		$x['kab_indramayu3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Indramayu')->row()->sekunder_kab;
		$x['kab_subang3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Subang')->row()->sekunder_kab;
		$x['kab_purwakarta3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Purwakarta')->row()->sekunder_kab;
		$x['kab_karawang3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kab. Karawang')->row()->sekunder_kab;
		$x['kab_bekasi3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kab. Bekasi')->row()->sekunder_kab;
		$x['kota_bogor3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kota Bogor')->row()->sekunder_kab;
		$x['kota_sukabumi3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kota Sukabumi')->row()->sekunder_kab;
		$x['kota_bandung3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kota Bandung')->row()->sekunder_kab;
		$x['kota_cirebon3'] 	= $this->mod_dataKoperasi->get_sekunderkab('Kota Cirebon')->row()->sekunder_kab;
		$x['kota_bekasi3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kota Bekasi')->row()->sekunder_kab;
		$x['kota_depok3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kota Depok')->row()->sekunder_kab;
		$x['kota_cimahi3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kota Cimahi')->row()->sekunder_kab;
		$x['kota_tasikmalaya3']	= $this->mod_dataKoperasi->get_sekunderkab('Kota Tasikmalaya')->row()->sekunder_kab;
		$x['kota_banjar3'] 		= $this->mod_dataKoperasi->get_sekunderkab('Kota Banjar')->row()->sekunder_kab;    	

    	$x['tidakAktif'] 		= $this->mod_dataKoperasi->get_status('Tidak Aktif')->row()->data_status;
		$x['aktif'] 			= $this->mod_dataKoperasi->get_status('Aktif')->row()->data_status;

		$x['primer_prov'] 		= $this->mod_dataKoperasi->get_bentuk('Primer Provinsi')->row()->data_bentuk;
		$x['sekunder_prov'] 	= $this->mod_dataKoperasi->get_bentuk('Sekunder Provinsi')->row()->data_bentuk;
		$x['primer_kab'] 		= $this->mod_dataKoperasi->get_bentuk('Primer Kabupaten/Kota')->row()->data_bentuk;
		$x['sekunder_kab'] 		= $this->mod_dataKoperasi->get_bentuk('Sekunder Kabupaten/Kota')->row()->data_bentuk;

		$x['simpan_pinjam'] = $this->mod_dataKoperasi->get_jenis('Simpan Pinjam')->row()->data_jenis;
		$x['produsen'] 		= $this->mod_dataKoperasi->get_jenis('Produsen')->row()->data_jenis;
		$x['konsumen'] 		= $this->mod_dataKoperasi->get_jenis('Konsumen')->row()->data_jenis;
		$x['pemasaran'] 	= $this->mod_dataKoperasi->get_jenis('Pemasaran')->row()->data_jenis;
		$x['jasa'] 			= $this->mod_dataKoperasi->get_jenis('Jasa')->row()->data_jenis;

		$x['kab_pangandaran1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Pangandaran')->row()->primer_prov;
		$x['kab_bogor1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Bogor')->row()->primer_prov;
		$x['kab_sukabumi1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Sukabumi')->row()->primer_prov;
		$x['kab_cianjur1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Cianjur')->row()->primer_prov;
		$x['kab_bandung1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Bandung')->row()->primer_prov;
		$x['kab_bandungBarat1'] = $this->mod_dataKoperasi->get_primerprov('Kab. Bandung Barat')->row()->primer_prov;
		$x['kab_sumedang1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Sumedang')->row()->primer_prov;
		$x['kab_garut1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Garut')->row()->primer_prov;
		$x['kab_tasikmalaya1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Tasikmalaya')->row()->primer_prov;
		$x['kab_ciamis1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Ciamis')->row()->primer_prov;
		$x['kab_kuningan1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Kuningan')->row()->primer_prov;
		$x['kab_cirebon1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Cirebon')->row()->primer_prov;
		$x['kab_majalengka1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Majalengka')->row()->primer_prov;
		$x['kab_indramayu1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Indramayu')->row()->primer_prov;
		$x['kab_subang1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Subang')->row()->primer_prov;
		$x['kab_purwakarta1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Purwakarta')->row()->primer_prov;
		$x['kab_karawang1'] 	= $this->mod_dataKoperasi->get_primerprov('Kab. Karawang')->row()->primer_prov;
		$x['kab_bekasi1'] 		= $this->mod_dataKoperasi->get_primerprov('Kab. Bekasi')->row()->primer_prov;
		$x['kota_bogor1'] 		= $this->mod_dataKoperasi->get_primerprov('Kota Bogor')->row()->primer_prov;
		$x['kota_sukabumi1'] 	= $this->mod_dataKoperasi->get_primerprov('Kota Sukabumi')->row()->primer_prov;
		$x['kota_bandung1'] 	= $this->mod_dataKoperasi->get_primerprov('Kota Bandung')->row()->primer_prov;
		$x['kota_cirebon1'] 	= $this->mod_dataKoperasi->get_primerprov('Kota Cirebon')->row()->primer_prov;
		$x['kota_bekasi1'] 		= $this->mod_dataKoperasi->get_primerprov('Kota Bekasi')->row()->primer_prov;
		$x['kota_depok1'] 		= $this->mod_dataKoperasi->get_primerprov('Kota Depok')->row()->primer_prov;
		$x['kota_cimahi1'] 		= $this->mod_dataKoperasi->get_primerprov('Kota Cimahi')->row()->primer_prov;
		$x['kota_tasikmalaya1'] = $this->mod_dataKoperasi->get_primerprov('Kota Tasikmalaya')->row()->primer_prov;
		$x['kota_banjar1'] 		= $this->mod_dataKoperasi->get_primerprov('Kota Banjar')->row()->primer_prov;

		$x['kab_pangandaran2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Pangandaran')->row()->sekunder_prov;
		$x['kab_bogor2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Bogor')->row()->sekunder_prov;
		$x['kab_sukabumi2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Sukabumi')->row()->sekunder_prov;
		$x['kab_cianjur2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Cianjur')->row()->sekunder_prov;
		$x['kab_bandung2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Bandung')->row()->sekunder_prov;
		$x['kab_bandungBarat2'] = $this->mod_dataKoperasi->get_sekunderprov('Kab. Bandung Barat')->row()->sekunder_prov;
		$x['kab_sumedang2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Sumedang')->row()->sekunder_prov;
		$x['kab_garut2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Garut')->row()->sekunder_prov;
		$x['kab_tasikmalaya2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Tasikmalaya')->row()->sekunder_prov;
		$x['kab_ciamis2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Ciamis')->row()->sekunder_prov;
		$x['kab_kuningan2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Kuningan')->row()->sekunder_prov;
		$x['kab_cirebon2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Cirebon')->row()->sekunder_prov;
		$x['kab_majalengka2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Majalengka')->row()->sekunder_prov;
		$x['kab_indramayu2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Indramayu')->row()->sekunder_prov;
		$x['kab_subang2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Subang')->row()->sekunder_prov;
		$x['kab_purwakarta2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Purwakarta')->row()->sekunder_prov;
		$x['kab_karawang2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kab. Karawang')->row()->sekunder_prov;
		$x['kab_bekasi2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kab. Bekasi')->row()->sekunder_prov;
		$x['kota_bogor2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kota Bogor')->row()->sekunder_prov;
		$x['kota_sukabumi2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kota Sukabumi')->row()->sekunder_prov;
		$x['kota_bandung2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kota Bandung')->row()->sekunder_prov;
		$x['kota_cirebon2'] 	= $this->mod_dataKoperasi->get_sekunderprov('Kota Cirebon')->row()->sekunder_prov;
		$x['kota_bekasi2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kota Bekasi')->row()->sekunder_prov;
		$x['kota_depok2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kota Depok')->row()->sekunder_prov;
		$x['kota_cimahi2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kota Cimahi')->row()->sekunder_prov;
		$x['kota_tasikmalaya2'] = $this->mod_dataKoperasi->get_sekunderprov('Kota Tasikmalaya')->row()->sekunder_prov;
		$x['kota_banjar2'] 		= $this->mod_dataKoperasi->get_sekunderprov('Kota Banjar')->row()->sekunder_prov;
     	
    	$this->load->view('webbackend/V_lihatGrafik',$x);
    }

    function exportExcel(){
        $data['excel']=  $this->mod_dataKoperasi->lihatDataKoperasi()->result();
        $this->load->view('webbackend/V_dataExcel',$data);
    }

    public function upload(){
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = FCPATH.'assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 50000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = $this->upload->data('full_path');
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row
                                                );
                // $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                //                                 NULL,
                //                                 TRUE,
                //                                 FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "idKop"                    => $rowData[0][0],
                    "idKoperasi"               => $rowData[0][1],
                    "koperasi"                 => $rowData[0][2],
                    "noBadanHukum"             => $rowData[0][3],
                    "tglBadanHukum"            => $rowData[0][4],
                    "alamat"                   => $rowData[0][5],
                    "desa_kel"                 => $rowData[0][6],
                    "kecamatan"                => $rowData[0][7],
                    "kabupaten"                => $rowData[0][8],
                    "provinsi"                 => $rowData[0][9],
                    "kodePos"                  => $rowData[0][10],
                    "noTelpon1"                => $rowData[0][11],
                    "email"	                   => $rowData[0][12],
                    "statusAktif"	           => $rowData[0][13],
                    "ketua"                    => $rowData[0][14],
                    "noTelponKetua"            => $rowData[0][15],
                    "bentukKoperasi"           => $rowData[0][16],
                    "jenisKoperasi"            => $rowData[0][17],
                    "kelompokKoperasi"         => $rowData[0][18],
                    "sektorUsaha" 	           => $rowData[0][19],
                    "jml_anggota"	           => $rowData[0][20],
                    "jml_manajer"              => $rowData[0][21],
                    "jml_karyawan"             => $rowData[0][22],
                    "tanggalRAT"           	   => $rowData[0][23],
                    "mdl_sendiri"              => $rowData[0][24],
                    "mdl_luar"                 => $rowData[0][25],
                    "aset"           		   => $rowData[0][26],
                    "vlm_usaha"		           => $rowData[0][27],
                    "tahunRekap"           	   => $rowData[0][28],
                    "SHU"           		   => $rowData[0][29]
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("koperasi",$data);
                delete_files($media['file_path']);
                     
            }
        redirect('webbackend/C_dataKoperasi/lihatDataKoperasi');
    }
    
    public function lihatDaftarKoperasi(){
		$data['daftar'] = $this->mod_dataKoperasi->lihatDaftarKoperasi()->result();
		$this->load->view('webbackend/V_lihatDaftarKoperasi',$data);
	}

	public  function inputDaftarKoperasi(){
		$this->load->view('webbackend/V_inputDaftarKoperasi');
	}

	public function prosesInputDaftarKoperasi(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
        $this->form_validation->set_rules('namaKoperasi','nama koperasi','trim|required|min_length[4]');
        $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
        $this->form_validation->set_rules('noTelepon2','no telepon2','required|min_length[10]|numeric');
        $this->form_validation->set_rules('alamat','alamat','required|min_length[8]');
        $this->form_validation->set_rules('tempatPenyuluhan','tempat penyuluhan','required|min_length[8]');
        $this->form_validation->set_rules('tglPenyuluhan','tanggal penyuluhan','required');
        $this->form_validation->set_rules('jamPenyuluhan','jam penyuluhan','required|min_length[4]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('webbackend/V_inputDaftarKoperasi');

		    }
		    else{

		       	$config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='gif|jpg|jpeg|png|pdf';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('notif1', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil menginputkan data pendaftar koperasi</p>
			                </div>');
				$this->mod_dataKoperasi->inputDaftarKoperasi($data['file_name']);
				redirect('webbackend/C_dataKoperasi/lihatDaftarKoperasi');

		    }
		}
	}

	public function updateDaftarKoperasi($idPendaftar){
		$data["daftar"] = $this->mod_dataKoperasi->updateDaftarKoperasi($idPendaftar)->result();
		$this->load->view('webbackend/V_updateDaftarKoperasi', $data);
	}

	public function prosesUpdateDaftarKoperasi(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
        $this->form_validation->set_rules('namaKoperasi','nama koperasi','trim|required|min_length[4]');
        $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
        $this->form_validation->set_rules('noTelepon2','no telepon2','required|min_length[10]|numeric');
        $this->form_validation->set_rules('alamat','alamat','required|min_length[8]');
        $this->form_validation->set_rules('tempatPenyuluhan','tempat penyuluhan','required|min_length[8]');
        $this->form_validation->set_rules('tglPenyuluhan','tanggal penyuluhan','required');
        $this->form_validation->set_rules('jamPenyuluhan','jam penyuluhan','required|min_length[4]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$idPendaftar 	= $this->input->post('idPendaftar');
		        $data["daftar"] = $this->mod_dataKoperasi->updateDaftarKoperasi($idPendaftar)->result();
				$this->load->view('webbackend/V_updateDaftarKoperasi', $data);

		    }
		    else{

		       	$config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='gif|jpg|jpeg|png|pdf';
	            $config['max_size'] = 5000000;

	            $this->load->library('upload');
	            $this->upload->initialize($config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('notif3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengubah data pendaftar koperasi</p>
			                </div>');
				$this->mod_dataKoperasi->prosesDaftarKoperasi($data['file_name']);
				redirect('webbackend/C_dataKoperasi/lihatDaftarKoperasi');

		    }
		}
	}

	public function deleteDaftarKoperasi($idPendaftar){
		$this->session->set_flashdata('notif5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data daftar koperasi</p>
		                </div>');
		$this->mod_dataKoperasi->deleteDaftarKoperasi($idPendaftar);
		redirect('webbackend/C_dataKoperasi/lihatDaftarKoperasi');
	}

	public function detailDaftarKoperasi($idPendaftar){
		$data['row'] = $this->mod_dataKoperasi->detailDaftarKoperasi($idPendaftar)->result();
		$this->load->view('webbackend/V_detailDaftarKoperasi',$data);
	}
}

?>