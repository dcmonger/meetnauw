<?php

class Events_model extends CI_Model
{
	public function get_event($events)
	{
		return $this->db->get_where('events', array('id' => $id));
						->get('events')
						->row();  

		return $this->db->query("SELECT *
								 FROM events
								 WHERE events = '{$events['user']}'"
								 )->row();	
	}
	public function make_event($events)
	{
		return $this->db->where('events', $events['user'])
						->insert
	}
	public function delete_event($events)
	{
		return $this->db->delete('mytable', array('id' => $id));
	}
}	
?>