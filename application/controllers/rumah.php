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
        // print_r($user);die;
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
		$user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $data['rumah'] = $this->rumah_model->tampil_data()->result();
        /* print_r($data['user']);die; */
        /* print_r($data);die; */
        $this->form_validation->set_rules('nama_l', 'nama_l', 'required|trim',
                                            ['required' => 'Nama wajib diisi']);
        $this->form_validation->set_rules('alamat_user', 'alamat_user', 'required|trim',
                                            ['required' => 'Harap mengisi alamat']);
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim|numeric',
                                            ['required' => 'Harap mengisi nomor telepon']);
        $this->form_validation->set_rules('latitudeU', 'latitudeU', 'required|trim',
                                            ['required' => 'Harap memilih titik lokasi']);
        $this->form_validation->set_rules('longitudeU', 'longitudeU', 'required|trim',
                                            ['required' => 'Harap memilih titik lokasi']);
        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $user);
            $this->load->view('setting', $data);
            $this->load->view('templates/footer');
        }else{
                    $username = $this->input->post('username');
                    $nama_l = $this->input->post('nama_l');
                    $alamat_user = $this->input->post('alamat_user');
                    $no_telp = $this->input->post('no_telp');
                    $latitude = $this->input->post('latitudeU');
                    $longitude = $this->input->post('longitudeU');

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
                        'foto_profil'  => $gambar_baru,
                        'latitudeU'     => $latitude,
                        'longitudeU'    => $longitude
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
        $data['rumah1'] = $this->rumah_model->edit_data($where,'tb_produk')->result();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $data['rumah'] = $this->rumah_model->tampil_data()->result();
       /*  print_r($data);die;    */                    
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
        
    }

    public function update(){
        /* $id = $this->input->post('id'); */
        
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('biaya', 'biaya', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']); 
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('luas', 'luas', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']); 
        if($this->form_validation->run() == false){
            /* $where = array(
                'id' =>$id
            ); */
           /*  $result = $this->rumah_model->update_data($where,$data, 'tb_produk');
            echo $result;
        }else{  */
                    
                    $id = $this->input->post('id');
                    $where = array('id' => $id);
                    $data['rumah1'] = $this->rumah_model->edit_data($where,'tb_produk')->result();
                    // print_r($data);die;
                    $nama = $this->input->post('nama');
                    $biaya = $this->input->post('biaya');
                    $alamat = $this->input->post('alamat');
                    $luas = $this->input->post('luas');
                    $latitude = $this->input->post('latitude');
                    $longitude= $this->input->post('longitude');
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
                        'ac' => $ac,
                        'latitude' => $latitude,
                        'longitude' => $longitude
                    );
                    // print_r($data);die;
                    ///////////BATAS SUCI ///////////////////
                    $upload = 0;

                    $fullPath = "foto/";
                   
                    $id_paket   = $this->rumah_model->tambah_rumah1();
                    $lastId     = $id_paket[0]["id"];
                    $currId     = $lastId+1;      

                    $userId = $this->session->userdata("csIdUser");  
                    $filenameTemp = "Rumah_".$userId."_".$id."_";
                    
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
                        } 
                        /* else {
                            $data[$foto] = NULL;
                        } */
                    }
                    
            
                    if ($upload == $_POST["jumlah_foto"] && $data['nama'] != "") {
                        if($data['biaya'] != "" && $data['alamat'] != ""){
                            $where = array(
                                'id' =>$id
                            );
                            /* print_r($where);
                            die; */
                            $result = $this->rumah_model->update_data($where, $data,'tb_produk');
                            echo $result;
                        }
                        
                        /* echo "Berhasil"; */
                    } else {
                        echo "Foto gagal di upload";
                    }




                    ///////////////////////////BATAS SUCI
                    
                    // $where = array(
                    //     'id' =>$id
                    // );
                    
                    // $result = $this->rumah_model->update_data($where, $data,'tb_produk');
                    // echo $result;
                    // redirect('rumah/rumah');
                // }
    }

    public function detail($id){
        $this->load->model('rumah_model');
        $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail;
        $ulas = $this->rumah_model->ulasan($id);
        $data['ulasan'] = $ulas;

        $rating_avg = $this->rumah_model->rating($id);
        $data['avg'] = $rating_avg[0]['AVG'];
        // print_r($data['avg']);die;
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        // print_r($data);die;
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }

    public function ulasan_lengkap($id){
        $data['ulasan'] = $this->rumah_model->ulasan($id);
        // print_r($data);die;
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('ulasan_lengkap', $data);
		$this->load->view('templates/footer');

    }

    public function tampilan_tambah_rumah()
    {
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar',$user);
		$this->load->view('tambah_rumah');
		$this->load->view('templates/footer');
    }

    public function tambah_rumah1(){
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim',
                                          ['required' => 'Nama Wajib Diisi']);
        $this->form_validation->set_rules('biaya', 'biaya', 'required|trim',
                                          ['required' => 'biaya Wajib Diisi']); 
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim',
                                          ['required' => 'alamat Wajib Diisi']);
        $this->form_validation->set_rules('luas', 'luas', 'required|trim',
                                          ['required' => 'luas Wajib Diisi']); 
        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $user);
            $this->load->view('tambah_rumah');
            $this->load->view('templates/footer');
        }else{ */
          
        $upload = 0;

        $fullPath = "foto/";
       
        $id_paket   = $this->rumah_model->tambah_rumah1();
        $lastId     = $id_paket[0]["id"];
        $currId     = $lastId+1;      
        $userId = $this->session->userdata("csIdUser");  
        $filenameTemp = "Rumah_".$userId."_".$currId."_";
        
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
            "latitude"      => $_POST["latitude"],
            "longitude"     => $_POST["longitude"],
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

        if ($upload == $_POST["jumlah_foto"] && $data['nama'] != "") {
            if($data['biaya'] != "" && $data['alamat'] != ""){
            $result = $this->rumah_model->insertRumah($data);
            echo $result;
            }
            
            /* echo "Berhasil"; */
        } else {
            echo "Foto gagal di upload";
        }
    //  }

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
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('pesan', $data);
        $this->load->view('templates/footer');        
    }
    //pencari
    public function tambah_pesan(){
        
        $this->load->library('form_validation');
      
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $user = $data['user'];
        /* print_r($data);die; */
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required|trim',
                                            ['required' => 'Tanggal mulai wajib diisi']);
        $this->form_validation->set_rules('durasi', 'durasi', 'required|trim',
                                            ['required' => 'Durasi wajib diisi']);
        if($this->form_validation->run() == FALSE){ 
            $result = $this->rumah_model->tambah_pesan($data, 'pemesanan');
            echo $result;
            /* $errors = validation_errors();  
            echo json_encode(['error'=>$errors]);    */            
           /* $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $user);
            $this->load->view('pesan', $data);
            $this->load->view('templates/footer');  */
        }else{
            $id_rumah = $this->input->post('id_rumah');
            $tgl_mulai = $this->input->post('tgl_mulai');
            $durasi = $this->input->post('durasi');
            $alamat_user = $this->input->post('alamat_user');
            $no_telp = $this->input->post('no_telp');
            $tgl_mulai1 = date_create($tgl_mulai);
            $durasi2 = $durasi." months";
            $cari_tgl_akhir = date_modify($tgl_mulai1, $durasi2);
            $tgl_akhir = date_format($cari_tgl_akhir, "Y-m-d");
            // print_r($tgl_akhir);die;
                $data = array(
                        'id_rumah'    => $this->input->post('id_rumah'),
                        'id_user'     => $user['id_l'],
                        'tgl_mulai'   => $this->input->post('tgl_mulai'),
                        'durasi'      => $this->input->post('durasi'),
                        'tgl_akhir'   => $tgl_akhir,
                        'waktu_pesan' => date('Y-m-d H:i:s')
                        /* 'foto_bukti'    => $foto_bukti */
                        );
                // print_r($data);die;
                
                $result = $this->rumah_model->tambah_pesan($data, 'pemesanan');
                echo $result;
                /* echo json_encode(['success'=>'Berhasil Memesan.']); */
                /* redirect('rumah/tampil_konfirmasi'); */
            }
            
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
        // $status_r = $this->input->post('status_r');
        $tgl_terima_kunci = $this->input->post('tgl_terima_kunci');
        $status_p = $this->input->post('status_p');
        $id_pes = $this->input->post('id_pes');
        $id_rumah = $this->input->post('id_rumah');
        if($tgl_terima_kunci == "" && $status_p == ""){
            $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">Pesanan belum dikonfirmasi, Silahkan isi kembali</div>');
            redirect('rumah/tampil_pesanan');
        }else{
        $data = array(
            'tgl_terima_kunci' => $tgl_terima_kunci,
            'status' => $status_p
        );
        
        $where = array(
            'id_pes'     => $id_pes
        );
        /* $data1 = array(
            'status' => $status_r
        );
        
        $where1 = array(
            'id'     => $id_pes
        ); */
        /* print_r($where);die; */
    
        $this->rumah_model->update_data1($where, $data,'pemesanan');
        if($data['status'] == "DITERIMA"){
            $data1 = array(
                'status' => 'terisi'
            );
            $where1 = array(
                'id'     => $id_rumah
            ); 
            // print_r($data1);die;
            $this->rumah_model->update_data1($where1, $data1, 'tb_produk');
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pesanan sudah Diterima</div>');
            redirect('rumah/tampil_pesanan');
        }
        else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Pesanan Ditolak!</div>');
            redirect('rumah/tampil_pesanan'); 
        }
    }
    }
    ///////////////////////////////////////////////////////
    //pemilik
    public function pesanan_berlangsung(){
        $data['pesanan'] = $this->rumah_model->data_pesan();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
       /* print_r($data);die; */
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('pesanan_berlangsung', $data);
        $this->load->view('templates/footer');
    }

    public function konfirmasi_selesai($id){
        $where = array('id_pes' => $id);
        $data['pesanan'] = $this->rumah_model->tampilan_konfirmasi($where,'pemesanan')->row();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        /* print_r($data);die; */            
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('konfirmasi_selesai', $data);
        $this->load->view('templates/footer');
    }

    public function konfirmasi_selesai_do()
    {       
            date_default_timezone_set('Asia/Jakarta');
            $sewa_selesai = $this->input->post('sewa_selesai');
            $id_pes = $this->input->post('id_pes');
            $id_rumah = $this->input->post('id_rumah');
            $data = array(
                'sewa_selesai' => $sewa_selesai,
                'waktu_selesai' => date('Y-m-d H:i:s')
            );
            
            $where = array(
                'id_pes'     => $id_pes
            );
            $this->rumah_model->update_data1($where, $data,'pemesanan');
            if($data['sewa_selesai'] == "TRUE"){
                $data1 = array(
                    'status' => 'tersedia'
                );
                $where1 = array(
                    'id'     => $id_rumah
                ); 
                // print_r($where1);die;
                $this->rumah_model->update_data1($where1, $data1, 'tb_produk');
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pesanan Sudah Selesai</div>');
                redirect('rumah/pesanan_berlangsung');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Pesanan Gagal selesai!</div>');
                redirect('rumah/pesanan_berlangsung'); 
            }
        }
    //////////////////////////////////////////////////////

    


    //pemilik
    public function pesanan_berhasil(){
        $data['pesanan'] = $this->rumah_model->data_pesan();
        
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
       /* $data['fasilitas'] = $this->rumah_model->tampil_fasilitas()->result(); */
        // print_r($data);die;
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('pesanan_berhasil', $data);
        $this->load->view('templates/footer');
        }
    public function detail_berhasil($id){
        $where = array('id_pes' => $id);
        $data['pesanan'] = $this->rumah_model->tampilan_konfirmasi($where,'pemesanan')->row();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        // print_r($data);die;     
           
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('detail_berhasil', $data);
        $this->load->view('templates/footer');
        }
        ////////////////////////////
    // PENCARI
    public function pesanan_selesaiU(){
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $data['pesanan'] = $this->rumah_model->data_pesan2();
        // print_r($data);die;
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('pesanan_selesaiU', $data);
        $this->load->view('templates/footer');
    } 
    public function tambah_ulasan($id){
        /* $where = array('id' => $id);
        $rumah = $this->rumah_model->data_pesan($id);
        $data['rumah'] = $this->rumah_model->edit_data($where,'tb_produk')->result(); */
        $detail = $this->rumah_model->tambah_ulasan($id);
        $data['detail'] = $detail;
        // print_r($detail);die;
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $user = $data['user'];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('tambah_ulasan', $data);
        $this->load->view('templates/footer');        
    }

    public function tambah_ulasan_do(){
        
        $this->load->library('form_validation');
      
        $data['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        $user = $data['user'];
        /* print_r($data);die; */
        $this->form_validation->set_rules('ulasan', 'ulasan', 'required|trim',
                                            ['required' => 'Ulasan wajib diisi']);
        $this->form_validation->set_rules('star', 'star', 'required|trim',
                                            ['required' => 'Ulasan wajib diisi']);
        if($this->form_validation->run() == FALSE){ 
            /* $result = $this->rumah_model->tambah_ulasan_do($data, 'ulasan');
            echo $result; */
            echo "<script>alert('Ulasan tidak boleh kosong, Mohon isi kembali!');</script>";
			echo "<script>document.location='./pesanan_selesaiU'</script>";
        }else{
            $id_rumah = $this->input->post('id_rumah');
            $id_user = $this->input->post('id_user');
            $id_pes = $this->input->post('id_pes');
            $star = $this->input->post('star');
            $ulasan = $this->input->post('ulasan');
            $userId = $this->session->userdata("csIdUser"); 
            //gambar
            $filenameTemp = "Ulasan_".$id_pes;
            $edit_foto = $_FILES['foto_ulasan']['name'];

            if($edit_foto){
                $config['allowed_types']            = 'jpeg|jpg|png';
                $config['overwrite']	            = TRUE;
                $config['max_size']                 = '2048';
                $config['upload_path']              = './assets/foto_ulasan/';
                $config['file_name'] 			    = $filenameTemp;

                $this->load->library('upload', $config);
                // $this->upload->initialize($config);
                    
                if($this->upload->do_upload('foto_ulasan')){
                        $foto_ulasan = $this->upload->data('file_name');
                        
                        /* $this->db->set('foto_profil', $gambar_baru); */
                }else{
                        echo $this->upload->display_errors();
                    }
                }
                $data = array(
                        'id_rumah'      => $id_rumah,
                        'id_user'       => $user['id_l'],
                        'id_pes'        => $id_pes,
                        'ulasan'        => $ulasan,
                        'rating'        => $star,
                        'foto_ulasan'   => $foto_ulasan
                    );
                
                // print_r($data);die;
                $result = $this->rumah_model->tambah_ulasan_do($data);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ulasan telah berhasil dikirim</div>');
                    redirect('rumah/pesanan_selesaiU');
                echo $result;
                 
                /* echo json_encode(['success'=>'Berhasil Memesan.']); */
                /* redirect('rumah/tampil_konfirmasi'); */
            }
            
        }
    
    public function detail_selesai($id){
        $where = array('id_pes' => $id);
        $data['pesanan'] = $this->rumah_model->tampilan_konfirmasi($where,'pemesanan')->row();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
        // print_r($data);die;            
           
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('detail_selesai', $data);
        $this->load->view('templates/footer');
    }

    //////////////////////////////////////////////////
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
        // print_r($edit_foto);die;
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

                    $data = array(
                        'foto_bukti'    => $foto_bukti
                );
                        
                $where = array(
                        'id_pes'     => $id_pes
                );
                $this->rumah_model->update_data1($where, $data,'pemesanan');
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Upload bukti telah berhasil</div>');
                    redirect('rumah/tampil_konfirmasi'); 
                }else{
                   echo "<script>alert('File belum diunggah!');</script>";
				    echo "<script>document.location='./tampil_konfirmasi'</script>";

                }   
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

    public function selectAvgR()
	{
		$id	= $this->input->post("id");
        $result = $this->rumah_model->selectAvgR($id);
        $avg = $result['avg'];
        // print_r($avg);die;
		echo json_encode($avg); 
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

    public function crit_biaya()
    {
        //BIAYA
        // nah klo misal dri footer ada kirim data ke controller jdnya gini
        // $contoh = $this->input->post("data");
        // baru datanya dikirim ke model..kurleb kaya gtu..
        // "data" itu bukan data: tpi nama di dalemnya
        $result = $this->rumah_model->selectCriteria();
        echo json_encode($result);
        // bedanya echo sama echo json_encode itu klo echo dia nyetak data yg berupa text, tpi klo json itu di cetak data yg berupa json atau array
    }

    public function crit_luas()
    {
        //luas
        $result = $this->rumah_model->selectCriteria2();
        echo json_encode($result);
        // bedanya echo sama echo json_encode itu klo echo dia nyetak data yg berupa text, tpi klo json itu di cetak data yg berupa json atau array
    }

    public function crit_fasilitas()
    {
        //fasilitas
        $result = $this->rumah_model->selectCriteria3();
        echo json_encode($result);
        // bedanya echo sama echo json_encode itu klo echo dia nyetak data yg berupa text, tpi klo json itu di cetak data yg berupa json atau array
    }

    public function crit_jarak(){
        //jarak
        $result = $this->rumah_model->selectCriteria4();
        echo json_encode($result);
    }

    //tampil maut
    public function getMaut()
	{
		$id	= $this->input->post("id");
        // print_r($id);die;
        $result = $this->rumah_model->showMaut($id);
       /*  print_r($result);die; */
		echo json_encode($result);
	}

    //      PENCARI////////
    public function pdf($id)
    {
        $this->load->library('pdfbaru');

        // $data['pesanan'] = $this->rumah_model->pdf($id);
        // print_r($data);die;
        // $this->load->view('kuitansi_pdf', $data);

        /* $path = 'assets/foto_profil/default.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        <img src="<?php echo $base64?>" width="150" height="150"/> */
        // $paper_size = 'A4';
        // $orientation = 'portrait';
        // $html = $this->output->get_output();
        // $this->dompdf->set_paper($paper_size, $orientation);
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->pdfbaru->stream("kuitansi"+$id+".pdf", array('Attachment' => 0));

        //////baru
        $data['pesanan'] = $this->rumah_model->pdf($id);
        $this->pdfbaru->generate('kuitansi_pdf', $data);


    }

    ////USER??????
    public function unggahktp($id)
    {
        // print_r($id);die;
        $where = array('id_l' => $id);
        $data['data'] = $this->rumah_model->edit_data($where,'login')->row_array();
        // print_r($data);die;

        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();          
           
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('unggahKtp_view', $data);
        $this->load->view('templates/footer');

    }
    public function unggahktp_do()
    {   
        
        $id_l = $this->input->post('id_l');
        //  if()
         // jika ada gambar diubah
         $userId = $this->session->userdata("csIdUser");  
                    // print_r($userId);die;
         $filenameKtp = "KTP_".$userId;
         $edit_foto = $_FILES['foto_ktp']['name'];
        //  print_r($edit_foto);die;
         if($edit_foto){
            $config['allowed_types']            = 'jpeg|jpg|png';
            $config['overwrite']	            = TRUE;
            $config['max_size']                 = '2048';
            $config['upload_path']              = './assets/foto_ktp/';
            $config['file_name'] 			    = $filenameKtp;

            $this->load->library('upload', $config);
                
            if($this->upload->do_upload('foto_ktp')){
                    $foto_ktp = $this->upload->data('file_name');
                    /* $this->db->set('foto_profil', $gambar_baru); */
                }else{
                    echo $this->upload->display_errors();
                }

                $data = array(
                    'foto_ktp'    => $foto_ktp
                    );
                    // print_r($data);die;
                $where = array(
                    'id_l'     => $id_l
                    );
            $this->rumah_model->update_data1($where, $data,'login');
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Upload KTP telah berhasil, Silahkan Tunggu Verifikasi Admin</div>');
                redirect('rumah/dashboard'); 
            }else{
               echo "<script>alert('File belum diunggah!');</script>";
                echo "<script>document.location='./dashboard'</script>";

            }   
    }

    public function dashboard_pemilik()
    {   
        $data['pesanan'] = $this->rumah_model->data_pesan();
        // print_r($data);die;
        $id = $this->session->userdata('csIdUser');
        $queryJumlahPesananBerlangsung = "SELECT COUNT(id_pes)
                                    FROM `pemesanan`
                                    JOIN `tb_produk`
                                    ON `tb_produk`.`id` = `pemesanan`.`id_rumah`
                                    JOIN `login`
                                    ON `login`.`id_l` = `pemesanan`.`id_user`
                                    WHERE `tb_produk`.`user_id` =  '$id'
                                    AND `pemesanan`.`sewa_selesai` =  'FALSE'";
        $berlangsung = $this->db->query($queryJumlahPesananBerlangsung)->result_array();
        // print_r($berlangsung['0']['COUNT(id_pes)']);die;
        $data['jml1'] = $berlangsung['0']['COUNT(id_pes)'];
        // print_r($jmlBerl);die;
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();          
           
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $user);
        $this->load->view('dashboard_pemilik', $data);
        $this->load->view('templates/footer');
    }

    ///////
    /////// Menu masa tenggang Pencari ///////
    public function sewa_berlangsung()
    {
        $data['pesanan2'] = $this->rumah_model->data_pesan2();
        $data['pesanan'] = $this->rumah_model->data_pesan_berlangsung();
        $user['user'] = $this->db->get_where('login', ['username' => $this->session->userdata('csUsername')])->row_array();
    //    print_r($data);die;
        $this->load->view('templates/header', $user);
        $this->load->view('templates/sidebar', $user);
        $this->load->view('sewa_berlangsung', $data);
        $this->load->view('templates/footer');
    }
}
?>