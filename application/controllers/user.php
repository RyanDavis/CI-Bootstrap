<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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

	public function profile()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['role']		= $this->tank_auth->get_role();
			$data['email']		= $this->tank_auth->get_email();

			$this->load->helper('gravatar_helper');
			$this->load->view('header');
			$this->load->view('user/profile', $data);
			$this->load->view('footer');
		}		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
