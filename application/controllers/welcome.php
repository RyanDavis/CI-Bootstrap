<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('site_info');
		$this->load->library('tank_auth');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sample_content');
		$this->load->view('footer');
	}

	public function secure()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['role']		= $this->tank_auth->get_role();

			$this->load->view('header');
			$this->load->view('secure_content', $data);
			$this->load->view('footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
