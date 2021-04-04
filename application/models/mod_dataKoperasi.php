<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataKoperasi extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inputDataKoperasi(){
		
			$idKop 				= $this->input->post('idKop');
			$koperasi 			= $this->input->post('koperasi');
			$noBadanHukum 		= $this->input->post('noBadanHukum');
			$tglBadanHukum 		= $this->input->post('tglBadanHukum');
			$alamat 			= $this->input->post('alamat');
			$desa_kel 			= $this->input->post('desa_kel');
			$kecamatan 			= $this->input->post('kecamatan');
			$kabupaten 			= $this->input->post('kabupaten');
            $provinsi           = $this->input->post('provinsi');
            $kodePos            = $this->input->post('kodePos');
			$noTelepon1 		= $this->input->post('noTelepon1');
            $email              = $this->input->post('email');
			$ketua 				= $this->input->post('ketua');
			$noTelpKetua 		= $this->input->post('noTelpKetua');
			$bentukKoperasi		= $this->input->post('bentukKoperasi');
			$jenisKoperasi 		= $this->input->post('jenisKoperasi');
			$kelKoperasi 		= $this->input->post('kelKoperasi');
            $sektor_Usaha       = $this->input->post('sektorUsaha');
			$jml_anggota		= $this->input->post('jml_anggota');
			$jml_karyawan		= $this->input->post('jml_karyawan');
			$jml_manajer		= $this->input->post('jml_manajer');
			$tglRAT				= $this->input->post('tglRAT');
			$status		        = $this->input->post('statusAktif');
			$mdl_sendiri		= $this->input->post('mdl_sendiri');
			$mdl_luar			= $this->input->post('mdl_luar');
			$aset				= $this->input->post('aset');
			$vlm_usaha			= $this->input->post('vlm_usaha');
			$SHU				= $this->input->post('shu');
            $tahun              = $this->input->post('tahunRekap');

			$data = array(
				"idKoperasi" 		=> $idKop,
				"koperasi" 			=> $koperasi,
				"noBadanHukum" 		=> $noBadanHukum,
				"tglBadanHukum" 	=> $tglBadanHukum,
				"alamat" 			=> $alamat,
				"desa_kel" 			=> $desa_kel,
				"kecamatan" 		=> $kecamatan,
				"kabupaten" 		=> $kabupaten,
                "provinsi"          => $provinsi,
                "kodePos"           => $kodePos,
				"noTelpon1" 		=> $noTelepon1,
                "email"             => $email,
				"ketua"				=> $ketua,
				"noTelponKetua"		=> $noTelpKetua,
				"bentukKoperasi"  	=> $bentukKoperasi,
				"jenisKoperasi"		=> $jenisKoperasi,
				"kelompokKoperasi" 	=> $kelKoperasi,
                "sektorUsaha"       => $sektor_Usaha,
				"jml_anggota"		=> $jml_anggota,
				"jml_karyawan"		=> $jml_karyawan,
				"jml_manajer"		=> $jml_manajer,
				"tanggalRAT"		=> $tglRAT,
				"statusAktif"		=> $status,
				"mdl_sendiri"		=> $mdl_sendiri,
				"mdl_luar"			=> $mdl_luar,
				"aset"				=> $aset,
				"vlm_usaha"			=> $vlm_usaha,
				"SHU"				=> $SHU,
                "tahunRekap"        => $tahun
			);

				$this->db->insert('koperasi',$data);
	}

	public function lihatDataPengunduh(){
		$this->db->order_by('tglUnduh', 'DESC');
		return $this->db->get("pengunduh");
	}

	public function lihatDataKoperasi(){
		//$this->db->order_by('tglBadanHukum', 'ASC');
		return $this->db->get("koperasi");
	}
	
	public function deleteDataKoperasi($idKop){
		$this->db->where("idKop",$idKop);
		return $this->db->delete("koperasi");
	}

	public function deleteDataPengunduh($idPengunduh){
		$this->db->where("idPengunduh",$idPengunduh);
		return $this->db->delete("pengunduh");
	}

	public function detailDataKoperasi($idKop){
		$this->db->where("idKop",$idKop);
		return $this->db->get("koperasi");
	}

	public function updateDataKoperasi($idKop){
		 $this->db->where("idKop",$idKop);
		 return $this->db->get("koperasi");
	}

	public function prosesUpdateDataKoperasi(){

		$idKop 				= $this->input->post('idKop');
        $idKoperasi         = $this->input->post('idKoperasi');
		$koperasi 			= $this->input->post('koperasi');
		$noBadanHukum 		= $this->input->post('noBadanHukum');
		$tglBadanHukum 		= $this->input->post('tglBadanHukum');
		$alamat 			= $this->input->post('alamat');
		$desa_kel 			= $this->input->post('desa_kel');
		$kecamatan 			= $this->input->post('kecamatan');
		$kabupaten 			= $this->input->post('kabupaten');
        $provinsi           = $this->input->post('provinsi');
        $kodePos            = $this->input->post('kodePos');
		$noTelepon1 		= $this->input->post('noTelepon1');
        $email              = $this->input->post('email');
		$ketua 				= $this->input->post('ketua');
		$noTelpKetua 		= $this->input->post('noTelpKetua');
		$bentukKoperasi		= $this->input->post('bentukKoperasi');
		$jenisKoperasi 		= $this->input->post('jenisKoperasi');
		$kelKoperasi 		= $this->input->post('kelKoperasi');
		$sektorUsaha        = $this->input->post('sektorUsaha');
		$jml_anggota		= $this->input->post('jml_anggota');
		$jml_karyawan		= $this->input->post('jml_karyawan');
		$jml_manajer		= $this->input->post('jml_manajer');
		$tglRAT				= $this->input->post('tglRAT');
		$statusAktif	    = $this->input->post('statusAktif');
		$mdl_sendiri		= $this->input->post('mdl_sendiri');
		$mdl_luar			= $this->input->post('mdl_luar');
		$aset				= $this->input->post('aset');
		$vlm_usaha			= $this->input->post('vlm_usaha');
		$SHU				= $this->input->post('shu');
        $tahunRekap         = $this->input->post('tahunRekap');

		$data = array(
		    "idKoperasi"        => $idKoperasi,  
			"koperasi" 			=> $koperasi,
			"noBadanHukum" 		=> $noBadanHukum,
			"tglBadanHukum" 	=> $tglBadanHukum,
			"alamat" 			=> $alamat,
			"desa_kel" 			=> $desa_kel,
			"kecamatan" 		=> $kecamatan,
			"kabupaten" 		=> $kabupaten,
            "provinsi"          => $provinsi,
            "kodePos"           => $kodePos,
			"noTelpon1" 		=> $noTelepon1,
            "email"             => $email,
			"ketua"				=> $ketua,
			"noTelponKetua"		=> $noTelpKetua,
			"bentukKoperasi"  	=> $bentukKoperasi,
			"jenisKoperasi"		=> $jenisKoperasi,
			"kelompokKoperasi" 	=> $kelKoperasi,
            "sektorUsaha"       => $sektorUsaha,
			"jml_anggota"		=> $jml_anggota,
			"jml_karyawan"		=> $jml_karyawan,
			"jml_manajer"		=> $jml_manajer,
			"tanggalRAT"		=> $tglRAT,
			"statusAktif"		=> $statusAktif,
			"mdl_sendiri"		=> $mdl_sendiri,
			"mdl_luar"			=> $mdl_luar,
			"aset"				=> $aset,
			"vlm_usaha"			=> $vlm_usaha,
			"SHU"				=> $SHU,
            "tahunRekap"        => $tahunRekap,
		);

		$this->db->where("idKop",$idKop);
		return $this->db->update("koperasi",$data);
	}
  	
  	public function filter(){
        return $this->db->query("SELECT DISTINCT bentukKoperasi FROM koperasi  order by bentukKoperasi desc");
    }

    public function filterStatus(){
        return $this->db->query("SELECT DISTINCT statusAktif FROM koperasi ");
    }

    public function jenisKoperasi(){
        return $this->db->query("SELECT DISTINCT jenisKoperasi FROM koperasi");
    }

    public function kabupaten(){
        return $this->db->query("SELECT DISTINCT kabupaten FROM koperasi");
    }

    public function excelFilter($bentuk,$status,$kabupaten)
    {
     
        $query = "select * from koperasi where";

        if($bentuk != ""){
         $query = $query." bentukKoperasi = '".$bentuk."' and";
        }

        if($status != ""){
        $query = $query." statusAktif = '".$status."' and";
        }

        if($kabupaten != ""){
        $query = $query." kabupaten = '".$kabupaten."' and";
        }

        $bismillah = substr($query, 0,-3);// membuang and

        return $this->db->query("$bismillah");        
    }

    public function excelFilter2($jenis,$status,$kabupaten)
    {
        $query = "select * from koperasi where";

        if($jenis != ""){
         $query = $query." jenisKoperasi = '".$jenis."' and";
        }

        if($status != ""){
         $query = $query." statusAktif = '".$status."' and";
        }

        if($kabupaten != ""){
         $query = $query." kabupaten = '".$kabupaten."' and";
        }

        $bismillah = substr($query, 0,-3);// membuang and

        return $this->db->query("$bismillah");        
    }

    public function inputPengunduh(){
		
			$namaLengkap 	= $this->input->post('namaLengkap');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$alamat 		= $this->input->post('alamat');

			$data = array(
				"namaLengkap" 	=> $namaLengkap,
				"email" 		=> $email,
				"noTelepon" 	=> $noTelepon,
				"alamat" 		=> $alamat,
				"tglUnduh" 		=> date("Y-m-d")
			);

				$this->db->insert('pengunduh',$data);
	}

	function exportFilter(){
        $jenis 		= $this->session->userdata('jenis');
        $kabupaten 	= $this->session->userdata('kabupaten');
        $status 	= $this->session->userdata('status');
        
        //return $this->db->query("SELECT * from koperasi where tahun_daftar = '$nilai'");
        $query = "select * from koperasi where";

        if($jenis != ""){
         $query = $query." jenisKoperasi = '".$jenis."' and";
        }

        if($status != ""){
         $query = $query." statusAktif = '".$status."' and";
        }

        if($kabupaten != ""){
         $query = $query." kabupaten = '".$kabupaten."' and";
        }

        $bismillah = substr($query, 0,-3);// membuang and

        return $this->db->query("$bismillah");
    }
    //====================================================================
    //berdasarkan status RAT

    function get_status($status){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusAktif) as data_status
                                FROM koperasi
                                WHERE statusAktif= '".$status."'";
        return $this->db->query("$query");
    }

    function get_bentuk($bentuk){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(bentukKoperasi) as data_bentuk
                                FROM koperasi
                                WHERE bentukKoperasi= '".$bentuk."'";
        return $this->db->query("$query");
    }
  	//======================================================================
  	//Berdasarkan Kabupaten dan kota

    function get_primerkab($primer_kab){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kabupaten) as primer_kab
                                FROM koperasi
                                WHERE kabupaten= '".$primer_kab."' AND bentukKoperasi='Primer Kabupaten/Kota'";
        return $this->db->query("$query");
    }

    function get_sekunderkab($sekunder_kab){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kabupaten) as sekunder_kab
                                FROM koperasi
                                WHERE kabupaten= '".$sekunder_kab."' AND bentukKoperasi='Sekunder Kabupaten/Kota'";
        return $this->db->query("$query");
    }

    //=======================================================================
    //berdasarkan koperasi
    function get_koperasi(){
        //$filter = $this->session->userdata('filtering');
        $query = "SELECT COUNT(idKop) as jml_koperasi
                                from koperasi ";
        return $this->db->query("$query");
    }
    //========================================================================
    //berdasarkan pendaftar koperasi dalam bentuk widget
    function pendaftar(){
        //$filter = $this->session->userdata('filtering');
        $query = "SELECT  COUNT(idPendaftar) as jml_pendaftar
                                FROM daftar_koperasi";
        return $this->db->query("$query");
    }
    //============================================================================
    //berdasarkan pengunduh
    function unduh(){
        //$filter = $this->session->userdata('filtering');
        $query = "SELECT  COUNT(idPengunduh) as jml_pengunduh
                                FROM pengunduh";
        return $this->db->query("$query");
    }
    //==============================================================================
    //berdasarkan jenis koperasi
    function get_jenis($jenis){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(jenisKoperasi) as data_jenis
                                FROM koperasi
                                WHERE jenisKoperasi= '".$jenis."'";
        return $this->db->query("$query");
    }

    
    //======================================================================
    //Berdasarkan Kabupaten dan kota dan primer koperasi 
    function get_primerprov($primer_prov){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kabupaten) as primer_prov
                                FROM koperasi
                                WHERE kabupaten= '".$primer_prov."' AND bentukKoperasi='Primer Provinsi'";
        return $this->db->query("$query");
    }

    function get_sekunderprov($sekunder_prov){
        //$tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kabupaten) as sekunder_prov
                                FROM koperasi
                                WHERE kabupaten= '".$sekunder_prov."' AND bentukKoperasi='Sekunder Provinsi'";
        return $this->db->query("$query");
    }
    
    //===========================================================================
    
    public function inputDaftarKoperasi($gambar){
        
            $namaLengkap        = $this->input->post('namaLengkap');
            $namaKoperasi       = $this->input->post('namaKoperasi');
            $noTelepon          = $this->input->post('noTelepon');
            $noTelepon2         = $this->input->post('noTelepon2');
            $alamat             = $this->input->post('alamat');
            $tglPenyuluhan      = $this->input->post('tglPenyuluhan');
            $jamPenyuluhan      = $this->input->post('jamPenyuluhan');
            $tempatPenyuluhan   = $this->input->post('tempatPenyuluhan');

            $data = array(
                "namaLengkap"       => $namaLengkap,
                "namaKoperasi"      => $namaKoperasi,
                "noTelepon"         => $noTelepon,
                "noTelepon2"         => $noTelepon2,
                "alamat"            => $alamat,
                "tglDaftar"         => date("Y-m-d"),
                "tglPenyuluhan"     => $tglPenyuluhan,
                "tempatPenyuluhan"  => $tempatPenyuluhan,
                "jamPenyuluhan"     => $jamPenyuluhan,
                "suratPermohonan"   => $gambar
            );

                $this->db->insert('daftar_koperasi',$data);
    }

    public function lihatDaftarKoperasi(){
        $this->db->order_by('tglDaftar', 'DESC');
        return $this->db->get("daftar_koperasi");
    }

    public function deleteDaftarKoperasi($idPendaftar){
        $this->db->where("idPendaftar",$idPendaftar);
        return $this->db->delete("daftar_koperasi");
    }

    public function detailDaftarKoperasi($idPendaftar){
        $this->db->where("idPendaftar",$idPendaftar);
        return $this->db->get("daftar_koperasi");
    }

    public function updateDaftarKoperasi($idPendaftar){
         $this->db->where("idPendaftar",$idPendaftar);
         return $this->db->get("daftar_koperasi");
    }

    public function prosesDaftarKoperasi($gambar){
        if($gambar==null){

            $idPendaftar        = $this->input->post('idPendaftar');
            $namaLengkap        = $this->input->post('namaLengkap');
            $namaKoperasi       = $this->input->post('namaKoperasi');
            $noTelepon          = $this->input->post('noTelepon');
            $noTelepon2          = $this->input->post('noTelepon2');
            $alamat             = $this->input->post('alamat');
            $tglPenyuluhan      = $this->input->post('tglPenyuluhan');
            $jamPenyuluhan      = $this->input->post('jamPenyuluhan');
            $tempatPenyuluhan   = $this->input->post('tempatPenyuluhan');

            $data = array(
                "namaLengkap"       => $namaLengkap,
                "namaKoperasi"      => $namaKoperasi,
                "noTelepon"         => $noTelepon,
                "noTelepon2"         => $noTelepon2,
                "alamat"            => $alamat,
                "tglPenyuluhan"     => $tglPenyuluhan,
                "tempatPenyuluhan"  => $tempatPenyuluhan,
                "jamPenyuluhan"     => $jamPenyuluhan
            );

            $this->db->where("idPendaftar",$idPendaftar);
            return $this->db->update("daftar_koperasi",$data);
        }else{

            $idPendaftar        = $this->input->post('idPendaftar');
            $namaLengkap        = $this->input->post('namaLengkap');
            $namaKoperasi       = $this->input->post('namaKoperasi');
            $noTelepon          = $this->input->post('noTelepon');
            $noTelepon2          = $this->input->post('noTelepon2');
            $alamat             = $this->input->post('alamat');
            $tglPenyuluhan      = $this->input->post('tglPenyuluhan');
            $jamPenyuluhan      = $this->input->post('jamPenyuluhan');
            $tempatPenyuluhan   = $this->input->post('tempatPenyuluhan');

            $data = array(
                "namaLengkap"       => $namaLengkap,
                "namaKoperasi"      => $namaKoperasi,
                "noTelepon"         => $noTelepon,
                "noTelepon2"         => $noTelepon2,
                "alamat"            => $alamat,
                "tglPenyuluhan"     => $tglPenyuluhan,
                "tempatPenyuluhan"  => $tempatPenyuluhan,
                "jamPenyuluhan"     => $jamPenyuluhan,
                "suratPermohonan"   => $gambar
            );

            $this->db->where("idPendaftar",$idPendaftar);
            return $this->db->update("daftar_koperasi",$data);
        }
    }
}
?>