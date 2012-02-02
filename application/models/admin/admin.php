<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	public function index()
	{
		redirect('/user/profile');	//redirect to your personal profile
	}

}

/* End of file admin.php */
/* Location: ./application/models/admin/admin.php */
