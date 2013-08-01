<?php

class Likes_model extends CI_Model
{
	public function get_likes($likes)
	{
		return $this->db->get_where('likes', array('id' => $id));
						->get('likes')
						->row();  

		return $this->db->query("SELECT *
								 FROM likes
								 WHERE likes = '{$likes['user']}'"
								 )->row();	
	}
	public function add_like($likes)
	{
		return $this->db->insert('likes', $likes['user']);
	}
	public function delete_like($likes)
	{
		return $this->db->delete('likes', array('id' => $id));
	}
}	
?>