<?php

class Events_model extends CI_Model
{
	public function get_event($events)
	{
		return $this->db->get_where('events', array('id' => $id))
						->get('events')
						->row();  

		return $this->db->query("SELECT *
								 FROM events
								 WHERE events = '{$events['user']}'"
								 )->row();	
	}
	public function add_event($events)
	{
		return $this->db->insert('events', $events['events']);
	}
	public function delete_event($events)
	{
		return $this->db->delete('events', array('id' => $id));
	}
	public function get_all_events()
	{
		return $this->db->query("SELECT *
								 FROM events")->result_array();
	}
}
?>