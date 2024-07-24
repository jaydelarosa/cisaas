<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['page'] = 'home';
		$data['home'] = true;

		$this->load->view('header_view', $data);
		$this->load->view('home_view', $data);
		$this->load->view('footer_view', $data);
	}
}
