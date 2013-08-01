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
}

?>