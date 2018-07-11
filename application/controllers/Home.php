<?php 


/**
* 
*/
class Home extends CI_Controller
{

	
	public function index()
	{
		$data['main'] = "front/display";
		$this->load->view('layouts/main',$data);
	}


	/*
		Method For Layanan Informasi Publik
	*/
	public function dasarHukum(){

		$data['main'] = "front/lip/dasarHukum";
		$this->load->view('layouts/main',$data);

	}
	public function hakKewajiban(){

		$data['main'] = "front/lip/hakKewajiban";
		$this->load->view('layouts/main',$data);

	}
	public function registrasi(){

		$data['main'] = "front/lip/registrasi";
		$this->load->view('layouts/main',$data);

	}
	public function sejarahKip(){

		$data['main'] = "front/lip/sejarahKip";
		$this->load->view('layouts/main',$data);

	}
	public function pip(){

		$data['main'] = "front/lip/sop";
		$this->load->view('layouts/main',$data);

	}

	/*
		Method For Tata Cara Permohonan Informasi
	*/

	public function permohonanInformasi(){
		$data['main'] = "front/tcpip/permohonanInformasi";
		$this->load->view('layouts/main',$data);
	}

	public function pengajuanKeberatan(){
		$data['main'] = "front/tcpip/pengajuanKeberatan";
		$this->load->view('layouts/main',$data);
	}

	/*
		Method For Daftar Informasi Publik
	*/

	public function risalahUu(){
		$data['main'] = "front/dip/risalahUU";
		$this->load->view('layouts/main',$data);
	}
	public function daftarWajib(){
		$data['main'] = "front/dip/daftarWajib";
		$this->load->view('layouts/main',$data);
	}
	public function daftarUmum(){
		$data['main'] = "front/dip/daftarUmum";
		$this->load->view('layouts/main',$data);
	}

	/*
		Method For Laporan layanan PIP
	*/

	public function daftarUmum(){
		$data['main'] = "front/pip/rekapitulasiInformasi";
		$this->load->view('layouts/main',$data);
	}

	public function informasiPublik(){
		$data['main'] = "front/pip/informasiPublik";
		$this->load->view('layouts/main',$data);
	}

	public function laporanPpid(){
		$data['main'] = "front/pip/laporanPpid";
		$this->load->view('layouts/main',$data);
	}

	/*
		Method For Pemohon
	*/

	public function formPemohon(){
		$data['main'] = "front/pip/formPemohon";
		$this->load->view('layouts/main',$data);
	}


	
}