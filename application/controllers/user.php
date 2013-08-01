<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->output->enable_profiler(TRUE);
	}
	public function process_login()
	{
        $this->load->model("users_model");
        $data = array();
        $data['password'] = md5($this->input->post('password'));
        $data['email'] = $this->input->post('email');
        $user = $this->users_model->login($data);
        if ($user)
        {
            $this->session->set_userdata('user_session', $user);
            redirect(base_url('/user/profile'));
        }
		else
		{
            $this->load->view("sign_in");
		}
	}
	public function process_registration()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirm_password]|min_length[6]|md5');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if($this->form_validation->run() === FALSE)
		{
            $this->load->view('sign_in');
		}
		else
		{
			$this->load->model('users_model');
            $data = array();
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['created_at'] = date('Y-m-d'); 
            $this->users_model->register_user($data);
			$user = array('email' => $data['email'],
                          'first_name' => $data['first_name'],
						  'login_status' => TRUE
						  );
			$this->session->set_userdata('user_session', $user);
            redirect(base_url('/user/profile'));
		}	
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/user/login'));
	}

    public function profile() {
        $this->load->view("event_page");
    }
}











