<?php

class Login_model extends CI_Model {
    public function loginModel($post)
	{
		$user = $this->db->get_where(
			'login',
			[
				'username'     => $post['txt_username'],
				'password'     => $post['txt_password'],
				/* 'is_active !=' => 'N' */
			]
		)->row_array();
		//count($user)
		if (count((array)$user) > 0) {
			return array(
				"isTrue"    => TRUE,
				"id_l"      => $user['id_l'],
				"username"  => $user['username'],
				"role_l"    => $user['role_l']
			);
		} else {
			return array("isTrue" => FALSE);
		}
	}

}

?>