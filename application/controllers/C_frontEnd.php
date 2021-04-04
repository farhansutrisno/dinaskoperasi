<?php
class C_frontEnd extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table','pagination'));
	}

    //testing
	
	public function lihatFrontEnd(){
         $this->load->model('mod_programKerja');
         $this->load->model('mod_dataBerita');

        //konfigurasi pagination
        $config['base_url'] = site_url('C_frontEnd/lihatFrontEnd'); //site url
        $config['total_rows'] = $this->db->count_all('program'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pag'] = $this->pagination->create_links();
        $data['program'] = $this->mod_programKerja->lihatProgramKerja2($config["per_page"], $data['page'])->result();
        $data['agenda'] = $this->mod_programKerja->lihatAgendaKerja()->result();
        $data['struktur'] = $this->mod_programKerja->lihatStruktur()->result();
        $data['berita'] = $this->mod_dataBerita->lihatDataBerita()->result();
		$this->load->view('V_homeFrontEnd',$data);
	}

    public function KirimPesan(){
        $this->load->view('V_pesan');
    }
	
	public function lihatGambar(){
		$this->load->model('mod_dataGaleri');

		//konfigurasi pagination
        $config['base_url']     = site_url('C_frontEnd/lihatGambar'); //site url
        $config['total_rows']   = $this->db->count_all('galeri'); //total row
        $config['per_page']     = 4;  //show record per halaman
        $config["uri_segment"]  = 3;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pag'] = $this->pagination->create_links();
		$data['galeri'] = $this->mod_dataGaleri->lihatDataGaleri2($config["per_page"], $data['page'])->result();
		$this->load->view('V_gallery',$data);
	}

	public function lihatBerita(){
		$this->load->model('mod_dataBerita');

		//konfigurasi pagination
        $config['base_url'] = site_url('C_frontEnd/lihatBerita'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 4;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pag'] = $this->pagination->create_links();
		$data['berita'] = $this->mod_dataBerita->lihatDataBerita2($config["per_page"], $data['page'])->result();
		$this->load->view('V_lihatBerita',$data);
	}

	public function lihatProfil(){
		$this->load->view('V_profil');
	}
	
	public function detailBerita($kdBerita){
		$this->load->model('mod_dataBerita');
		$data['berita'] = $this->mod_dataBerita->detailDataBerita($kdBerita)->result();
		$this->load->view('V_detailBerita',$data);
	}

    public function detailAgenda($kdAgenda){
        $this->load->model('mod_agendaKerja');
        $data['agenda'] = $this->mod_agendaKerja->detailAgendaKerja($kdAgenda)->result();
        $this->load->view('V_detailAgenda',$data);
    }

    public function detailProgram($kdProgram){
        $this->load->model('mod_programKerja');
        $data['program'] = $this->mod_programKerja->detailProgramKerja($kdProgram)->result();
        $this->load->view('V_detailProgram',$data);
    }

    public function caraMendirikan(){
        $this->load->view('V_caraMendirikan');
    }

    public function daftarKoperasi(){
        $this->load->view('V_daftarKoperasi');
    }

    public function prosesDaftarKoperasi(){
        $this->load->model('mod_dataKoperasi');

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

                $this->load->view('V_daftarKoperasi');

            }
            else{

                $config['upload_path']='./gambar_proyek/';
                $config['allowed_types']='gif|jpg|jpeg|png|pdf';
                $config['max_size'] = 5000000;
                $this->load->library('upload',$config);
                $this->upload->do_upload();
                $data   =  $this->upload->data();

                $this->session->set_flashdata('baru1', 
                            '<div class="alert alert-info ">    
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <h7>BERHASIL ! </h7>
                                <p>Berhasil menginputkan data pendaftar koperasi dan menunggu informasi selanjutnya</p>
                            </div>');
                $this->mod_dataKoperasi->inputDaftarKoperasi($data['file_name']);
                redirect('C_frontEnd/lihatFrontEnd');

            }
        }  
    }

    public function lihatDaftarKoperasi(){
        $this->load->model('mod_dataKoperasi');

        $data['daftar'] = $this->mod_dataKoperasi->lihatDaftarKoperasi()->result();
        $this->load->view('V_dataDaftarKoperasi',$data);
    }
}
?>