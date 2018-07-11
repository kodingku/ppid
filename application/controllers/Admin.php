<?php

/**
* 
*/
class Admin extends CI_Controller
{
	
	public function __construct() {

			parent::__construct();

			if (!$this->session->userdata('logged_in')) {
			
			$this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

			redirect('login/index');
			}



		}

	public function index(){


		$data['main_admin'] = "back/display";
		$this->load->view('layouts/main_admin',$data);
	}
}