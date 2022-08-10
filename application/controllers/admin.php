<?php


class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function dashboard()
	{
		$data['rumah'] = $this->rumah_model->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
	}
	///////////USER?????????????
	public function verif_user()
	{
		// $data['rumah'] = $this->rumah_model->tampil_data()->result();
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['user'] = $this->admin_model->tampil_data()->result();
		// print_r($data);die;
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_user', $data);
		$this->load->view('templates/footer');
	}
	public function verif_user_tampil($id)
	{
		$where = array('id_l' => $id);
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['user'] = $this->admin_model->tampil_data_verif($where, 'login')->row_array();
		// print_r($data);die;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_user_tampil', $data);
		$this->load->view('templates/footer');
	}
	public function verif_user_do()
	{
		date_default_timezone_set('Asia/Jakarta');
            $verifikasi_user = $this->input->post('verifikasi_user');
            $id_l = $this->input->post('id_l');
            
            /* $data = array(
                'verifikasi_user' => $verifikasi_user,
                'waktu_verifikasi' => date('Y-m-d H:i:s')
            );
            
            $where = array(
                'id_l'     => $id_l
            );
            $this->rumah_model->update_data1($where, $data,'login'); */
            if($verifikasi_user == "TRUE"){
                $data1 = array(
                    'verifikasi_user' => $verifikasi_user,
                	'waktu_verifikasi' => date('Y-m-d H:i:s')
                );
                $where1 = array(
                    'id_l'     => $id_l
                ); 
                // print_r($data1);die;
                $this->rumah_model->update_data1($where1, $data1, 'login');
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pengguna Berhasil Diverifikasi</div>');
                redirect('admin/verif_user');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Pengguna Gagal Diverifikasi!</div>');
                redirect('admin/verif_user'); 
            }
	}


	////////// RUMAH ////////////////
	public function verif_rumah()
	{
		// $data['rumah'] = $this->rumah_model->tampil_data()->result();
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['rumah'] = $this->admin_model->tampil_rumah()->result();
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_rumah', $data);
		$this->load->view('templates/footer');
	}
	public function verif_rumah_tampil($id)
	{
		$where = array('id' => $id);
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['rumah'] = $this->admin_model->tampil_rumah_verif($where, 'tb_produk')->row_array();
		// print_r($data);die;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_rumah_tampil', $data);
		$this->load->view('templates/footer');
	}
	public function verif_rumah_do()
	{
			date_default_timezone_set('Asia/Jakarta');
            $verifikasi = $this->input->post('verifikasi');
            $id = $this->input->post('id');
            
            /* $data = array(
                'verifikasi_user' => $verifikasi_user,
                'waktu_verifikasi' => date('Y-m-d H:i:s')
            );
            
            $where = array(
                'id_l'     => $id_l
            );
            $this->rumah_model->update_data1($where, $data,'login'); */
            if($verifikasi == "TRUE"){
                $data1 = array(
                    'verifikasi' => $verifikasi,
                	'waktu_verif_rumah' => date('Y-m-d H:i:s')
                );
                $where1 = array(
                    'id'     => $id
                ); 
                // print_r($where1);die;
                $this->rumah_model->update_data1($where1, $data1, 'tb_produk');
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Rumah Berhasil Diverifikasi</div>');
                redirect('admin/verif_rumah');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Rumah Gagal Diverifikasi!</div>');
                redirect('admin/verif_rumah'); 
            }
	}

	////////PEMBAYARAN
	public function verif_pembayaran()
	{
		// $data['rumah'] = $this->rumah_model->tampil_data()->result();
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['pesanan'] = $this->admin_model->tampil_pesanan();
		// print_r($data);die;
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_pembayaran', $data);
		$this->load->view('templates/footer');
	}
	public function verif_pemb_tampil($id)
	{
		$where = array('id_pes' => $id);
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
		$data['pesanan'] = $this->admin_model->tampil_pemb_verif($where, 'pemesanan')->row_array();
		// print_r($data);die;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('admin/verif_pemb_tampil', $data);
		$this->load->view('templates/footer');
	}
	public function verif_pemb_do()
	{
		date_default_timezone_set('Asia/Jakarta');
		$verif = $this->input->post('verifikasi_pemb');
        $id_pes = $this->input->post('id_pes');
        $id_rumah = $this->input->post('id_rumah');
		// print_r($verif);die;
        if($verif == ""){
			echo "<script>alert('Gagal Melakukan Verifikasi! Silahkan pilih konfirmasi');</script>";
				    echo "<script>document.location='./verif_pembayaran'</script>";
            // $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Pesanan belum dikonfirmasi, Silahkan isi kembali</div>');
            // redirect('admin/verif_pemb');
        }else{
        	$data = array(
            	
            	'verifikasi_pemb' => $verif,
				'w_verif_pemb' => date('Y-m-d H:i:s')
        );
        
        	$where = array(
            	'id_pes'     => $id_pes
        );	
        
        // print_r($data);die;
    
			$this->rumah_model->update_data1($where, $data,'pemesanan');
			
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pesanan sudah Diverifikasi</div>');
				redirect('admin/verif_pembayaran');
		}
	}

}
