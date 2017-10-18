<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __contruct(){
		parent::__construct();
		$this->load->model('model_kos');
	}

	public function index()
	{
        $this->load->view('header_login');
	}
	
	
	public function admin()
	{
		$this->home();	
	}
	
	public function home()
	{
		$this->load->model('model_talking');
		$data['title'] = 'MVC Cool Title';
		$data['pageheader'] = 'Hello World';
		$data['nama_depan'] = $this->kos->getData('user');
		
		$this->load->view('header', $data);
		$this->load->view('beranda', $data);
		$this->load->view('footer');
	}
	

}
