<?php 

class admin_model extends CI_Model {
    public function tampil_data()
    {
        return $this->db->get('login');
        // $hasil=$this->db->query("SELECT * FROM login");
        // return $hasil->result();
    }
    public function tampil_data_verif($where,$table){
        return $this->db->get_where($table,$where);
    }
    //////////////////////////////////////RUMAH
    public function tampil_rumah()
    {
        return $this->db->get('tb_produk');
    }
    public function tampil_rumah_verif($where,$table){
        return $this->db->get_where($table,$where);
    }


    /////////////////////////////////////PEMB
    public function tampil_pesanan()
    {
        // return $this->db->get('pesanan');
        // $id = $this->session->userdata['csIdUser'];
        $this->db->select('
            login.*, pemesanan.*, tb_produk.*, pemesanan.status as status_p, tb_produk.status as status_r');
        $this->db->from('pemesanan');
        $this->db->join('login', 'pemesanan.id_user = login.id_l');
        $this->db->join('tb_produk', 'pemesanan.id_rumah = tb_produk.id');
        $this->db->where('pemesanan.verifikasi_pemb', 'FALSE');   
        $query = $this->db->get();
        return $query->result(); 
    }
    public function tampil_pemb_verif($where,$table){
        return $this->db->get_where($table,$where);
    }
}