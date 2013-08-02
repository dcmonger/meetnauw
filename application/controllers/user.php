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
            $this->session->set_userdata('id', $user[0]->id);
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
		redirect(base_url('welcome'));
	}

    public function profile() 
    {
            //if isset post item, then do a function that adds the like
            //then do the rest of the stuff
            if($this->input->post('item')){
                $this->user_add_like();
            }
            $stuff = $this->session->userdata('user_session');
            // $stuff = $user_session;
            // var_dump($this->user_session);
            // die();
            $this->load->model('likes_model');
            $data['likes'] = $this->likes_model->get_likes();
            $data['name'] = $stuff[0]->first_name;
            $this->load->view("likes_sorter", $data);
    }
    public function show_all_likes()
    {
        $this->load->model('likes_model');
        $data['likes'] = $this->likes_model->get_likes();
        $this->load->view('likes_sorter', $data);
    }
    public function user_add_like()
    {
        $this->load->model('likes_model');
        $data['likes'] = $this->input->post();
        $this->likes_model->add_like($data);
        $this->load->view('likes_sorter', $likes);
    }
    public function user_delete_like()
    {
        $this->load->model('likes_model');
        $this->events_model->delete_like();
        $data['likes'] = $this->input->post('likes');
        $this->load->view('likes_sorter', delete_like($data));
    }
    public function events()
    {
        $this->load->model('events_model');
        $events['events'] = $this->events_model->get_all_events();
        $this->load->view('event_page', $events);
    }
    public function edit_profile()
    {
        $this->output->enable_profiler(TRUE);
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirm_password]|min_length[6]|md5');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if($this->form_validation->run() === FALSE)
        {
            // echo "false";
            // die();
            $this->load->view('edit_profile');
        }
        else
        {
            // echo "else";
            // die();
            $this->load->model('users_model');
            $data = array();
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['created_at'] = date('Y-m-d'); 
            $this->users_model->edit_user($data);
            $user = array('email' => $data['email'],
                          'first_name' => $data['first_name'],
                          'login_status' => TRUE
                          );
            $this->session->set_userdata('user_session', $user);
            redirect(base_url('/user/profile'));
        } 
    }  
}











