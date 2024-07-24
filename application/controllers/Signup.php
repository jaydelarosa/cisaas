<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


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
			$fields = array('first_name','last_name','email','password','cpassword');

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

				if( $this->input->post('password') == $this->input->post('cpassword') ){
					$profile_picture = '';
				
					if( !empty($_FILES['profile_picture']) ){
						$profile_picture = $this->fileupload('profile_picture');
						$this->session->set_userdata('profile_picture', $profile_picture);
					}

					$user_id = $this->Accounts_model->save_account(0);
					$this->Accounts_model->create_profile($user_id, $profile_picture);

					$notif = 'Your account has been created. You can now <a href="'.base_url().'login">login</a>';
					$notif_type = 'success';

				}
				else{
					$notif = 'Passwords does not match. Please try again.';
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
		$this->load->view('signup_view', $data);
		$this->load->view('footer_view', $data);
	}

	function fileupload( $upval = '' )
	{
		if( $upval != '' )
		{
			$filename = '';
			$resfilename = '';
			$targetFolder = './data'; // Relative to the root

			$images = $_FILES[$upval];
			if( $_FILES[$upval]['name'] != '' ){
				// foreach ($_FILES[$upval]['name'] as $i => $x) {

					$tempFile = $images['tmp_name'];
					$fileParts = pathinfo($images['name']);
					$targetPath = $targetFolder;
					$filename = time()."_".mt_rand().".".$fileParts['extension'];
					$filename = $images['name'];
					$targetFile = $targetPath . '/' . $filename;

					if(move_uploaded_file($tempFile,$targetFile))
					{
						$resfilename .= $filename;		
					}

				// }
			}
	        

			return $resfilename;
		}
	}
}
