<?php

class User_model extends CI_Model
{
	public function get_user($user)
	{
		return $this->db->where('email', $user['email'])
						->where('password', $user['password'])
						->get('users')
						->row();

		return $this->db->query("SELECT *
								 FROM users
								 WHERE email = '{$user['email']}'
								 AND password = '{$user['password']}'"
								 )->row();				
	}
	public function register_user($user)
	{
		return $this->db->insert('users', $user);
	}
	public function get_event($events)
	{
		return $this->db->where('events', $events['user'])
						->get('events')
						->row();  

		return $this->db->query("SELECT *
								 FROM events
								 WHERE events = '{$events['user']}'"
								 )->row();	
	}
	public function get_likes($likes)
	{
		return $this->db->where('likes', $likes['user'])
						->get('likes')
						->row();

		return $this->db->query("SELECT *
								 FROM likes
								 WHERE likes = '{$likes['user']}'"
								 )->row();					
	}
}

?>