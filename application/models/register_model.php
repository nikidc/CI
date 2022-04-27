<?php

class register_model extends CI_Model {

    function register($username,$password,$nama_l,$role_l)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,/* password_hash($password,PASSWORD_DEFAULT), */
			'nama_l'=>$nama_l,
            'role_l'=>$role_l
		);
		$this->db->insert('login',$data_user);
    }

}

?>