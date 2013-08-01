<?php

class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

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
    public function login($user)
    {
        $query = $this->db->get_where('users', $user);

        if ($query->num_rows() == 1) {
            return $query->result();
        }else {
            return false;
        }
    }
    public function edit_user($user)
    {
    	return $this->db->update('users',$user);
    }
}

?>
