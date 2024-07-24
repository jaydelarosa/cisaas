<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Accounts_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['meta_title'] = 'Login';
		$data['meta_desc'] = '';
		
		$notif = '';
		$notif_type = '';


		if( $this->input->post('email') AND $this->input->post('password') ){

			$email = $this->input->post('email', TRUE);
			$password = $this->input->post('password', TRUE);

			$response = array();
			$this->form_validation->set_message('required', '%s');
			$fields = array('email','password');

			foreach($fields as $f)
			{
				$this->form_validation->set_rules($f, $f, 'required');	
			}
			
			if ($this->form_validation->run() == FALSE)
			{
				$notif = 'All Fields are required.';
				$notif_type = 'danger';
			}
			else
			{
				$user_account = $this->Accounts_model->user_login( $email, $password );

				if( count($user_account) == 1 ){

					$this->session->set_userdata('user_id', $user_account[0]['user_id']);
					$this->session->set_userdata('first_name', $user_account[0]['first_name']);
					$this->session->set_userdata('last_name', $user_account[0]['last_name']);
					$this->session->set_userdata('email', $user_account[0]['email']);
					$this->session->set_userdata('profile_picture', $user_account[0]['profile_picture']);
					$this->session->set_userdata('user_hash', md5(time()));

					redirect( base_url().'dashboard/' );

				}
				else{

					$notif = 'Invalid username or password, please try again.';
					$notif_type = 'danger';

				}

				
			}

		}

		if( isset( $_GET['sessionexpired'] ) ){
			$notif = 'Your session has expired, please login again.';
			$notif_type = 'warning';
		}

		$data['notif'] = $notif;
		$data['notif_type'] = $notif_type;

		$this->load->view('header_view', $data);
		$this->load->view('login_view', $data);
		$this->load->view('footer_view', $data);
	}
}
