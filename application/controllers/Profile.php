<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Accounts_model');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		
		$data['meta_title'] = 'My Profile';
		$data['meta_desc'] = '';

		$notif = '';
		$notif_type = '';

		$user_id = $this->session->userdata('user_id');

		if( $this->input->post('email') ){

			
			$response = array();
			$this->form_validation->set_message('required', '%s');
			$fields = array('first_name','last_name','email');

			foreach($fields as $f)
			{
				$this->form_validation->set_rules($f, $f, 'required');	
			}
			
			if ($this->form_validation->run() == FALSE)
			{
				$notif = 'Fields width * are required.';
				$notif_type = 'danger';
			}
			else
			{
				$profile_picture = '';
				
				if( !empty($_FILES['profile_picture']) ){
					$profile_picture = $this->fileupload('profile_picture');
					$this->session->set_userdata('profile_picture', $profile_picture);
				}

				$this->Accounts_model->save_account($user_id);
				$this->Accounts_model->save_profile($user_id, $profile_picture);

				$notif = 'Your account has been saved.';
				$notif_type = 'success';
			}
		}

		$data['notif'] = $notif;
		$data['notif_type'] = $notif_type;

		$account_profile = $this->Accounts_model->get_profile($user_id);
		$data['account_profile'] = $account_profile;

		$this->load->view('header_view', $data);
		$this->load->view('profile_view', $data);
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
