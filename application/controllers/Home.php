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
	public function kontak()
	{
		$data['main'] = "front/extra/kontak";
		$this->load->view('layouts/main',$data);
	}
	public function faq()
	{
		$data['main'] = "front/extra/faq";
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

	public function rekapitulasiInformasi(){
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

		$this->form_validation->set_rules('jenis_pengaduan','Jenis Pengaduan','trim|required');
		$this->form_validation->set_rules('fl_photo','File Photo','trim');
		$this->form_validation->set_rules('nama','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('telepon','Telepon','trim|required');
		$this->form_validation->set_rules('informasi','Informasi','trim|required');
		$this->form_validation->set_rules('deskripsi_informasi','Deskripsi Informasi','trim|required');
		$this->form_validation->set_rules('deskripsi_kegunaan','Deskripsi Kegunaan','trim|required');
		$this->form_validation->set_rules('setuju','Approval','trim|required');

		if( $this->form_validation->run() == FALSE ){

			$data['main'] = "front/pip/formPemohon";
			$this->load->view('layouts/main',$data);
		}
		
	}

	public function store() {

			$config = array(

			'upload_path' => './assets/img/bukti',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 1024,
            'max_width' => 2000,
            'max_height' => 2000,
            'encrypt_name' => TRUE


			);

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('fl_photo'))
		      {
		          $this->upload->display_errors();
		          //$this->load->view('modul/news/create_news', $error);
		          redirect('Home/formPemohon');
		      } 
            
            else {

            	$file = $this->upload->data();
            	$data = array(

				'jenis_pengaduan' => $this->input->post('jenis_pengaduan'),
				'fl_photo' => $file['file_name'],
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepon' => $this->input->post('telepon'),
				'informasi' => $this->input->post('informasi'),
				'deskripsi_informasi' => $this->input->post('deskripsi_informasi'),
				'deskripsi_kegunaan' => $this->input->post('deskripsi_kegunaan'),
				'setuju' => $this->input->post('setuju')


			);


			if ($this->pemohon_model->create_pemohon($data)) {
				$this->session->set_flashdata('create_data','Terima Kasih Data Anda Sudah Kami Terima');
				redirect('Home/formPemohon');
			}
			




            }
	}




	
}