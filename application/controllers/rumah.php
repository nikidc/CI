<?php 

class Rumah extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('rumah_model');
        /* cek_login(); */
        if (!$this->isLogin()) {
            echo "<script>alert('Session anda habis atau anda tidak memiliki hak akses!');</script>";
            redirect("login/", "refresh");
            }
    }

    private function isLogin()
	{
		if (!empty($this->session->userdata("csIdUser")) && !empty($this->session->userdata("csUsername")) && !empty($this->session->userdata("csRole"))) {
		return TRUE;
		} else {
            return FALSE;
		/* return FALSE; */
		}
	}

    public function index() {
        /* $data['rumah'] = $this->rumah_model->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer'); */
        $this->dashboard();
    }
    public function dashboard() {
        $data['rumah'] = $this->rumah_model->tampil_data()->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
    }
    public function rumah()
	{
		$data['rumah'] = $this->rumah_model->tampil_data()->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('rumah', $data);
		$this->load->view('templates/footer');
	}

    public function setting()
	{
		$data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();

        $this->form_validation->set_rules('nama_l', 'nama_l', 'required|trim',
                                            ['required' => 'Nama wajib diisi']);
        $this->form_validation->set_rules('alamat_user', 'alamat_user', 'required|trim',
                                            ['required' => 'Harap mengisi alamat']);
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim',
                                            ['required' => 'Harap mengisi nomor telepon']);
        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('setting', $data);
            $this->load->view('templates/footer');
        }else{
                    $username = $this->input->post('username');
                    $nama_l = $this->input->post('nama_l');
                    $alamat_user = $this->input->post('alamat_user');
                    $no_telp = $this->input->post('no_telp');

                    // jika ada gambar diubah
                    $userId = $this->session->userdata("csIdUser");  
                    
                    $filenameProfil = "Profil_".$userId;
                    $edit_foto = $_FILES['foto_profil']['name'];

                    if($edit_foto){
                        $config['allowed_types']   = 'jpeg|jpg|png';
                        $config['overwrite']	   = TRUE;
                        $config['max_size']        = '2048';
                        $config['upload_path']     = './assets/foto_profil/';
                        $config['file_name']       = $filenameProfil;

                        $this->load->library('upload', $config);
                        
                        if($this->upload->do_upload('foto_profil')){
                            $old_image = $data['user']['foto_profil'];
                            if($old_image != 'default.jpg'){
                                unlink(FCPATH.'assets/foto_profil/'.$old_image);
                            }
                            $gambar_baru = $this->upload->data('file_name');
                            /* $this->db->set('foto_profil', $gambar_baru); */
                        }else{
                            echo $this->upload->display_errors();
                        }
                    }

                    /* $this->db->set('nama_l', $nama_l);
                    $this->db->where('username', $username);
                    $this->db->update('login'); */

                     $data = array(
                        'nama_l'       => $nama_l,
                        'alamat_user'  => $alamat_user,
                        'no_telp'      => $no_telp,
                        'foto_profil'  => $gambar_baru
                    );
            
                    $where = array(
                        'username'     => $username,
                    );
            
             $this->rumah_model->update_profil($where, $data,'login');
           
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Profil berhasil diubah</div>');
			redirect('rumah/setting');  
        }
	}
    
    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('rumah');
		$this->load->view('templates/footer');
    }

    public function tambah_rumah(){
        $nama       = $this->input->post('nama');
        $biaya      = $this->input->post('biaya');
        $alamat     = $this->input->post('alamat');
        $luas       = $this->input->post('luas');
        $foto       = $_FILES['foto'];
        if($foto=''){}
        else{
            $config['upload_path']    =   './foto/';
            $config['allowed_types']  = 'jpg|png|gif';
            
            $this->load->library('upload',$config);
            
            if(!$this->upload->do_upload('foto')){
                echo "UPLOAD GAGAL !!"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }
        }
        
        $data = array(
            'nama'      => $nama,
            'biaya'     => $biaya,
            'alamat'    => $alamat,
            'luas'      => $luas,
            'foto'    => $foto

        );

        $this->rumah_model->input_data($data, 'tb_produk');
        redirect('rumah/index');
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->rumah_model->hapus_data($where, 'tb_produk');
        redirect ('rumah/rumah');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['rumah'] = $this->rumah_model->edit_data($where,'tb_produk')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
                                
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
        
    }

    public function update(){

       /*  $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('biaya', 'biaya', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']); 
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('luas', 'luas', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']); 
        if($this->form_validation->run() == false){
            echo "gagal";
        }else{
        } */
        
                    $id = $this->input->post('id');
                    $nama = $this->input->post('nama');
                    $biaya = $this->input->post('biaya');
                    $alamat = $this->input->post('alamat');
                    $luas = $this->input->post('luas');
                    $km = $this->input->post('kamar_mandi');
                    if($km != "TRUE"){
                        $km = "FALSE";
                    }
                    $kasur = $this->input->post('kasur');
                    if($kasur != "TRUE"){
                        $kasur = "FALSE";
                    }
                    $lemari = $this->input->post('lemari');
                    if($lemari != "TRUE"){
                        $lemari = "FALSE";
                    }
                    $meja = $this->input->post('meja');
                    if($meja != "TRUE"){
                        $meja = "FALSE";
                    }
                    $ac = $this->input->post('ac');
                    if($ac != "TRUE"){
                        $ac = "FALSE";
                    }

                    $data = array(
                        'nama'      => $nama,
                        'biaya'     => $biaya,
                        'alamat'    => $alamat,
                        'luas'      => $luas,
                        'kamar_mandi' => $km,
                        'kasur' => $kasur,
                        'lemari' => $lemari,
                        'meja' => $meja,
                        'ac' => $ac
                    );
                    
                    $where = array(
                        'id' =>$id
                    );
                    
                    $this->rumah_model->update_data($where, $data,'tb_produk');
                    redirect('rumah/rumah');
    }

    public function detail($id){
        $this->load->model('rumah_model');
        $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail;
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* print_r($data);die; */
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }

    public function tambah_rumah1(){
        $upload = 0;

        $fullPath = "foto/";
       
        /* $id_paket   = $this->rumah_model->tambah_rumah1(); */
        /* $lastId     = $id_paket[0]["id"]; */
       /*  $currId     = $lastId+1; */      
        $userId = $this->session->userdata("csIdUser");  
        $filenameTemp = "Rumah_".$userId."_";
       
        $data=array(
            "nama"          => $_POST["nama_rumah"],
            "biaya"         => $_POST["biaya"],
            "alamat"        => $_POST["alamat_rumah"],
            "luas"          => $_POST["luas_rumah"],
            "kamar_mandi"   => $_POST["kamar_mandi"],
            "kasur"         => $_POST["kasur"],
            "lemari"        => $_POST["lemari"],
            "meja"          => $_POST["meja"],
            "ac"            => $_POST["ac"],
            "user_id"       => $userId
        );
        
        for ($i=1; $i < 4; $i++) {
            $file		= "file".$i;
            $foto		= "foto".$i;
            if (isset($_FILES[$file])) {
                $name			= $_FILES[$file]["name"];
                $filename	= $filenameTemp.$i;

                if (substr($name, -5) == ".jpeg") {
                    $filename1	= $filename.".jpeg";
                } else if (substr($name, -4) == ".jpg") {
                    $filename1	= $filename.".jpg";
                } else if (substr($name, -4) == ".png") {
                    $filename1	= $filename.".png";
                }
                
                $config_image['upload_path'] 		= $fullPath;
                $config_image['allowed_types'] 	= 'jpg|jpeg|png';
                $config_image['overwrite']		 	= TRUE;
                $config_image['file_name'] 			= $filename;

                $this->load->library('upload', $config_image);
                $this->upload->initialize($config_image);
                if ($this->upload->do_upload($file)) {
                    $upload += 1;
                } else {
                    $upload += 0;
                }
                $data[$foto] = $filename1;
            } else {
                $data[$foto] = NULL;
            }
        }
        /* print_r($data);
        die; */

        if ($upload == $_POST["jumlah_foto"]) {
            $result = $this->rumah_model->insertRumah($data);
            echo $result;
            
            /* echo "Berhasil"; */
        } else {
            echo "Foto gagal di upload";
        }

    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['rumah']=$this->rumah_model->get_keyword($keyword);

        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('rumah', $data);
		$this->load->view('templates/footer');
    }

    public function search1(){
        $keyword = $this->input->post('keyword');
        $data['rumah']=$this->rumah_model->get_keyword($keyword);
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar', $user);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
    }
    //pencari
    public function pesan($id){
        /* $where = array('id' => $id);
        $rumah = $this->rumah_model->data_pesan($id);
        $data['rumah'] = $this->rumah_model->edit_data($where,'tb_produk')->result(); */
        $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail;
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $user = $data['user'];
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pesan', $data);
        $this->load->view('templates/footer');
        
        /* $data = array(
			'id_pes' 			=> set_value('id_pesan'),
            'id_rumah' 		    => set_value('id_rumah',$detail->id),
            'id_user' 		    => set_value('id_user',$user['id_l']),
            'tgl_mulai' 	    => set_value('tgl_mulai'),
			'durasi'			=> set_value('durasi')
			); */
            /* print_r($data); die; */
        
    }
    //pencari
    public function tambah_pesan(){
        /* $rumah = $this->rumah_model->data_pesan($id); */
       /*  $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail; */
        $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail;
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $user = $data['user'];

        /* $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim',
                                            ['required' => 'Tanggal mulai wajib diisi']);
        $this->form_validation->set_rules('durasi', 'durasi', 'required|trim',
                                            ['required' => 'Durasi wajib diisi']); */
        /* if($this->form_validation->run() == false){                                    
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $user);
            $this->load->view('pesan', $data);
            $this->load->view('templates/footer');
        }else{ */
            /* $id_rumah = $this->input->post('id_rumah');

            $tgl_mulai = $this->input->post('tgl_mulai');
            $durasi = $this->input->post('durasi');
            $alamat_user = $this->input->post('alamat_user');
            $no_telp = $this->input->post('no_telp'); */

                    // jika ada gambar
           
                $data = array(
                        'id_rumah'      => $this->input->post('id_rumah'),
                        'id_user'     => $user['id_l'],
                        'tgl_mulai'    => $this->input->post('tgl_mulai'),
                        'durasi'      => $this->input->post('durasi'),
                        /* 'foto_bukti'    => $foto_bukti */
                        );
                /* print_r($data);die; */
            
                $this->rumah_model->tambah_pesan($data, 'pemesanan');
                redirect('rumah/index');
            }
     //pemilik       
    public function tampil_pesanan(){
        $data['pesanan'] = $this->rumah_model->data_pesan();
        
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
       /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
       /* print_r($data);die; */
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('tampil_pesanan', $data);
        $this->load->view('templates/footer');
        }
    
        //PEMILIK
    public function tampilan_konfirmasi($id){
        $where = array('id_pes' => $id);
        $data['pesanan'] = $this->rumah_model->tampilan_konfirmasi($where,'pemesanan')->row();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* print_r($data);die; */            
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('konfirmasi_view', $data);
        $this->load->view('templates/footer');
    }
    //pemilik
    public function konfirmasi_p(){
        /* $status_r = $this->input->post('status_r'); */
        $status_p = $this->input->post('status_p');
        $id_pes = $this->input->post('id_pes');
        
        $data = array(
            /* 'status_r' => $status_r, */
            'status' => $status_p
        );
        
        $where = array(
            'id_pes'     => $id_pes
        );
        /* print_r($where);die; */
        $this->rumah_model->update_data($where, $data,'pemesanan');
        if($data['status'] == "DITERIMA"){
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pesanan sudah Diterima</div>');
        redirect('rumah/tampil_pesanan');}else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Pesanan Ditolak!</div>');
            redirect('rumah/tampil_pesanan'); 
        }
    }
    //pencari
    public function tampil_konfirmasi(){
        $data['pesanan'] = $this->rumah_model->data_pesanan_pen();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
       /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
       /* print_r($data);die; */
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('tampilan_konfirmasi', $data);
        $this->load->view('templates/footer');
    }

    //pencari
    public function upload_bukti($id){
        $where = array('id_pes' => $id);
        $data['pesanan'] = $this->rumah_model->tampilan_konfirmasi($where,'pemesanan')->row();
        /* print_r($data);die; */
        /* $data['pesanan'] = $this->rumah_model->data_pesanan_pen(); */
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();

        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('upload_bukti', $data);
        $this->load->view('templates/footer');
    }

    //pencari
    public function upload_bukti_do(){

        $id_pes = $this->input->post('id_pes');
        
        $userId = $this->session->userdata("csIdUser");  
        $filenameTemp = "Bukti_".$id_pes;
        $edit_foto = $_FILES['foto_bukti']['name'];

        if($edit_foto){
                $config['allowed_types']            = 'jpeg|jpg|png';
                $config['overwrite']	            = TRUE;
                $config['max_size']                 = '2048';
                $config['upload_path']              = './assets/bukti_bayar/';
                $config['file_name'] 			= $filenameTemp;

                $this->load->library('upload', $config);
                    
                if($this->upload->do_upload('foto_bukti')){
                        $foto_bukti = $this->upload->data('file_name');
                        /* $this->db->set('foto_profil', $gambar_baru); */
                    }else{
                        echo $this->upload->display_errors();
                    }
                }
        $data = array(
                'foto_bukti'    => $foto_bukti
        );
                
        $where = array(
                'id_pes'     => $id_pes
        );
        $this->rumah_model->update_data($where, $data,'pemesanan');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Upload bukti telah berhasil</div>');
			redirect('rumah/tampil_konfirmasi');  
        
    }

    //sortir harga
    public function urutkan_biaya()
		{
			$input = $this->input->post('urutkan');
            /* print_r($input); */
            $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
 
			if(isset($_POST['cek']) == 1 && $input == 1){
				$data['rumah'] = $this->rumah_model->getAscBiaya();
			} elseif (isset($_POST['cek']) == 2 && $input == 2) {
				$data['rumah'] = $this->rumah_model->getDescBiaya();
			} else {
				$data['rumah'] = $this->rumah_model->tampil_data();
			}
			/* print_r($data);die; */
			$this->load->view('templates/header');
            $this->load->view('templates/sidebar', $user);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
		}

    //sortir
    public function getData()
	{
		$sortir	= $this->input->post("sortir");
        $result = $this->rumah_model->selectData($sortir);
       /*  print_r($result);die; */
		echo json_encode($result);
	}
    ///////ADMIN
    public function data_rumah(){
        /* $data['rumah'] = $this->rumah_model->tampil_data()->result(); */
        /* print_r($data);die; */
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('data_rumah');
		$this->load->view('templates/footer');
    }

    public function data_member(){
        /* $data['member'] = $this->rumah_model->tampil_data_member()->result(); */
        /* $data = $this->rumah_model->tampil_data_member(); */
			 /* print_r($data);
			 die;  */
			/* echo json_encode($data); */
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
		$this->load->view('templates/header', $user);
		$this->load->view('templates/sidebar', $user);
		$this->load->view('data_member');
		$this->load->view('templates/footer');
    }

    public function getDataMember(){
        
        $data = $this->rumah_model->tampil_data_member();
			/*  print_r($data);
			 die;  */
			echo json_encode($data);
    }

    public function getDataRumah(){
        
        $data = $this->rumah_model->adminTampilData();
			 /* print_r($data);
			 die;  */
			echo json_encode($data);
    }
    /////ADMIN
}
?>