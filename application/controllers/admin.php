<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sample_content');
		$this->load->view('footer');
	}

}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
