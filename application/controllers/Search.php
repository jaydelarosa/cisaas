<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Accounts_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['meta_title'] = 'Search';
		$data['meta_desc'] = '';

		$notif = '';
		$notif_type = '';

		$pixabay_results = array();
		if( !empty($_POST['search']) ){

			// Replace with your Pixabay API key
			$api_key = '44808391-78dbcea69d00163a7617ececf';

			// Example usage
			$search_query = $_POST['search']; // Replace with your search query
			$pixabay_results = $this->search_pixabay($search_query, $api_key);
			$notif = 'There are '.count($pixabay_results).' images found.';
		}

		// echo '<pre>';
		// print_R($pixabay_results);

		$data['notif'] = $notif;
		$data['notif_type'] = $notif_type;
		$data['pixabay_results'] = $pixabay_results;
		

		$this->load->view('header_view', $data);
		$this->load->view('search_view', $data);
		$this->load->view('footer_view', $data);	
		

	}

	// Function to search for images on Pixabay
	function search_pixabay($query, $api_key) {
		$url = 'https://pixabay.com/api/';
		$params = array(
			'key' => $api_key,
			'q' => urlencode($query),  // URL encode the search query
			'image_type' => 'photo',    // You can change this to 'illustration', 'vector', etc.
			'per_page' => 10            // Number of results per page
		);

		// Make GET request to Pixabay API
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url . '?' . http_build_query($params),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false, // Enable if you have SSL issues
		));

		$response = curl_exec($curl);
		if ($response === false) {
			echo curl_error($curl);
		} else {
			$data = json_decode($response, true);
			if (isset($data['hits'])) {
				return $data['hits'];
			} else {
				echo "No results found.";
			}
		}
		curl_close($curl);
	}

}
