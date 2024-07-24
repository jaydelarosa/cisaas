<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hooks
{
	protected $CI;

	public function __construct()
    {
            // Assign the CodeIgniter super-object
            $this->CI =& get_instance();
    }

	function user_access_control()
	{
		$this->CI->load->library('session');
		$router =& load_class('Router', 'core');
		$controller = $router->fetch_class(); 	// current controller name
		$method = $router->fetch_method();	// current method name
		$uri_no_index = str_replace('/index', '', $controller."/".$method);

		$user_id = $this->CI->session->userdata('user_id');
		$role_id = $this->CI->session->userdata('role_id');
		$user_hash = $this->CI->session->userdata('user_hash');


		$restricted_controller_access = array('dashboard','profile','search');

		if( in_array($controller, $restricted_controller_access) )
		{
			if(!$user_hash){
				redirect(base_url().'login/?sessionexpired=1');
			}
		}


	}
	
	
}