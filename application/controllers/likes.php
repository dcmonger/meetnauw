<?php
class Likes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
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
    	$this->events_model->add_like();
    	$data['likes'] = $this->input->post();
    	$this->load->view('likes_sorter', add_like($data));
    }
    public function user_delete_like()
    {
    	$this->load->model('likes_model');
    	$this->events_model->delete_like();
    	$data['likes'] = $this->input->post('likes');
    	$this->load->view('likes_sorter', delete_like($data));
    }
      
}
?>