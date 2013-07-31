<?php

class User extends CI_Controller
{
	public $username;
	public $view_data;

	public function __construct()
	{
		parent::__construct();
		$this->username = "{$user['first_name']}"
	}
	public function profile()
	{
		echo "Welcome back to your profile " .$this->user_session['first_name'];
	}
	public function index()
	{
		echo "This is the default page";
		echo $this->get_name();
	}
	public function get_name()
	{
		return " Johnny";
	}
	public function get_user()
	{
		$user = array(
			'email' => 'john@john.com',
			'password' => md5('sample_password')
		);
		$this->load->model('User_model');
		$user = $this->User_model->get_user($user_details);	

		var_dump($user);

		echo $user->first_name;
		
	}
	public function login()
	{
		$user_details = array(
			'email'=> 'john@john.com',
			'password' => md5('sample_password')
			);
		
		$this->load->model('User_model');
		$user = $this->User_model->get_user($user_details);

		$this->view_data = array(
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'email' => $user->email
			);
		$this->load->view('login_view', $this->view_data);
	
		// $this->load->view('login_view');
	}
	public function process_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() === FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$user = array('id' => 1,
						  'email' =>'john@john.com',
						  'login_status' => TRUE
						  );
			$this->session->set_userdata('user_session', $user);
			redirect(base_usl('/user/profile'));
		}
	}
	public function process_registration()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean', 'callback_username_check');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		
		if($this->form_validation->run() === FALSE)
		{
			echo validation_errors();
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/user/login'));
	}
}











