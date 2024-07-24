<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Accounts_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$data['meta_title'] = 'Dashboard';
		$data['meta_desc'] = '';

		$notif = '';
		$notif_type = '';




		$data['notif'] = $notif;
		$data['notif_type'] = $notif_type;

		$this->load->view('header_view', $data);
		$this->load->view('dashboard_view', $data);
		$this->load->view('footer_view', $data);	
		

	}

}
