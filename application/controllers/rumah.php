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
} 
?>