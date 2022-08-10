<?php

class Login extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
	}

	public function index()
	{
		
		$this->session_check();
	}

	public function session_check()
	{
		$id_user    = $this->session->userdata("csIdUser");
		$username   = $this->session->userdata("csUsername");
		$role    	= $this->session->userdata("csRole");
		if (!empty($username) && !empty($role)) {
			redirect("rumah/dashboard", "refresh");
		}else {
			$this->load->view("login");
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('txt_username', 'Username', 'trim|alpha_numeric|required');
		$this->form_validation->set_rules('txt_password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>document.location('./')</script>";
		} else {
			$post  = $this->input->post(null, true);
			$hasil = $this->login_model->loginModel($post);
			if ($hasil['isTrue']) {
				$sessionData = array(
					"csIdUser"     	=> $hasil['id_l'],
					"csUsername"   	=> $hasil['username'],
					"csName"   		=> $hasil['nama_l'],
					"csRole"     	=> $hasil['role_l'],
					"csSignInTime" 	=> date('Y-m-d H:i'),
				);
				$this->session->set_userdata($sessionData);

				if($hasil['role_l'] == 'pemilik'){
					redirect('rumah/rumah');
				} elseif($hasil['role_l'] == 'admin'){
					redirect('rumah/data_member');
				}else{
					$this->session_check();
				}
				
			} else {
				echo "<script>alert('Nama pengguna atau Sandi salah!');</script>";
				echo "<script>document.location='./'</script>";
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("csIdUser");
		$this->session->unset_userdata("csUsername");
		$this->session->unset_userdata("csRole");
		$this->session->sess_destroy();
		echo "<script>document.location='./'</script>";
	}

	public function blocked(){
		
		$this->load->view('templates/blocked');
	}

}

?>