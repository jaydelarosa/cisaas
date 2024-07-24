<?php

class Accounts_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	function user_login($email, $password)
	{
		
		$this->db->select('*, ua.user_id as account_user_id, ');
		$this->db->from('user_accounts as ua');
		$this->db->join('user_profiles as up','up.user_id=ua.user_id','left');
		$this->db->where('ua.email', $email);
		$this->db->where('ua.password', sha1(md5($password)));
		$cats = $this->db->get();
		return $cats->result_array();
	}

	function get_profile($user_id = 0)
	{
		$this->db->select('*');
		$this->db->from('user_accounts as ua');
		$this->db->join('user_profiles as up','up.user_id=ua.user_id','left');
		$this->db->where('ua.user_id', $user_id);

		$cats = $this->db->get();
		return $cats->result_array();
	}

	function save_account( $user_id = 0 )
	{
		$data = array(
			'email' => $this->input->post('email'),
			'role_id' => 1,
			'status' => 1	
		);

		if( $this->input->post('password') ){
			$data['password'] = sha1(md5($this->input->post('password')));
		}

		$user_id = $this->session->userdata('user_id');

		if( $user_id > 0 )
		{	
			$data['date_created'] =  date('Y-m-d H:i:s');
			$this->db->where('user_id', $user_id);
			$this->db->update('user_accounts', $data);
		}
		else
		{
			$data['date_modified'] =  date('Y-m-d H:i:s');
			$this->db->insert('user_accounts', $data); 
			$user_id = $this->db->insert_id();
		}

		return $user_id;

	}

	function create_profile( $user_id = 0, $profile_image = '' )
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'profile_picture' => $profile_image,
			'user_id' => $user_id
		);

		$this->db->insert('user_profiles', $data); 
		$user_id = $this->db->insert_id();

		return $user_id;

	}

	function save_profile( $user_id = 0, $profile_image = '' )
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'profile_picture' => $profile_image,
			'user_id' => $user_id
		);

		$user_id = $this->session->userdata('user_id');

		if( $user_id > 0 )
		{	
			$this->db->where('user_id', $user_id);
			$this->db->update('user_profiles', $data);
		}
		else
		{
			$this->db->insert('user_profiles', $data); 
			$user_id = $this->db->insert_id();
		}

		return $user_id;

	}



}