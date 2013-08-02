<?php
class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	public function show_all_events()
	{
		$this->load->model('events_model');
    	$data['events'] = $this->events_model->get_all_event();
    	$this->load->view('event_page');
	}
    public function user_add_event()
    {
    	$this->load->model('events_model');
        $data['events'] = $this->input->post();
    	$this->events_model->add_event($data);
        redirect(base_url('/user/events'));
    	
    }
    public function user_delete_event()
    {
    	$this->load->model('events_model');
    	$this->events_model->delete_event();
    	$data['events'] = $this->input->post('events');
    	$this->load->view('event_page', delete_event($data));
    }
      
}
?>