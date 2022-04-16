<?php 

class Rumah extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('rumah_model');
    }

    public function index() {
        $data['rumah'] = $this->rumah_model->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('rumah', $data);
		$this->load->view('templates/footer');
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
        redirect ('rumah/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['rumah'] = $this->rumah_model->edit_data($where,'tb_produk')->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $biaya = $this->input->post('biaya');
        $alamat = $this->input->post('alamat');
        $luas = $this->input->post('luas');
       
        $data = array(
            'nama'      => $nama,
            'biaya'     => $biaya,
            'alamat'    => $alamat,
            'luas'      => $luas
        );

        $where = array(
            'id' =>$id
        );

        $this->rumah_model->update_data($where, $data,'tb_produk');
        redirect('rumah/index');
    }

    public function detail($id){
        $this->load->model('rumah_model');
        $detail = $this->rumah_model->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }

    public function tambah_rumah1(){
        $upload = 0;

        $fullPath = "foto/";
       
        $id_paket   = $this->rumah_model->tambah_rumah1();
        $lastId     = $id_paket[0]["id"];
        $currId     = $lastId+1;        
        $filenameTemp = "Rumah_".$currId."_";

        $data=array(
            "nama"        => $_POST["nama_rumah"],
            "biaya"       => $_POST["biaya"],
            "alamat"      => $_POST["alamat_rumah"],
            "luas"        => $_POST["luas_rumah"]
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
} 
?>