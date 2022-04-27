<?php

class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index(){
        $this->load->view('register_view');
    }

    public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[30]|is_unique[login.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('nama_l', 'nama_l','trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('role_l', 'role_l','trim|required');

		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama_l = $this->input->post('nama_l');
            $role_l = $this->input->post('role_l');

			$this->register_model->register($username,$password,$nama_l,$role_l);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}


?>