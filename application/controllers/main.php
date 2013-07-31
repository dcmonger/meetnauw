<?php

class Main extends CI_Controller
{
	protected $view_data = array();
	protected $user_session = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->user_session = $this->session->userdata('user_session');

		var_dump($this->user_session);
	}

	public function index()
	{

	}
}