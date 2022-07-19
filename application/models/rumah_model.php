<?php 

class rumah_model extends CI_Model {
    public function tampil_data()
    {
        return $this->db->get('tb_produk');
    }

    public function adminTampilData(){
        $hasil=$this->db->query("SELECT * FROM tb_produk");
        return $hasil->result();
    }

    public function tampil_data_member(){
        $hasil=$this->db->query("SELECT * FROM login");
        return $hasil->result();
        /* return $this->db->get('login'); */
       /*  $this->db->select('
            login.*, user_profil.*');
        $this->db->from('login');
        $this->db->join('user_profil', 'user_profil.username = login.username');
        $this->db->where('login.id_l', $id);
        $query = $this->db->get();
        return $query->result(); */

    }

   /*  public function tampil_fasilitas(){
        $this->db->select('kamar_mandi, kasur, lemari, meja, ac');
        $this->db->where('kamar_mandi','TRUE');
        $this->db->where('kasur','TRUE');
        $this->db->where('lemari','TRUE');
        $this->db->where('meja','TRUE');
        $this->db->where('ac','TRUE');
        $query = $this->db->get('tb_produk');
        return $query;
        
    } */
    public function input_data($data){
        $this->db->insert('tb_produk', $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('tb_produk', array('id' => $id))->row();
        return $query;
    }

    public function tambah_rumah1(){
        $arrDataIdPackage	= $this->db->query("SELECT MAX(id) AS id
												FROM tb_produk
												LIMIT 1")->result_array();
		return $arrDataIdPackage;
    }

    public function insertRumah($param)
     {
        /* $this->fasilitas = implode(',',$post["fasilitas"]); */
        
        $this->db->trans_begin();
        $this->db->insert("tb_produk", $param);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return "Gagal";
        } else {
            $this->db->trans_commit();
            return "Berhasil";
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama', $keyword);
        $this->db->or_like('biaya', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('luas', $keyword);
        return $this->db->get()->result();

    }

    public function join_profil(){
        $id = $this->session->userdata['csIdUser'];
        $this->db->select('
            login.*, user_profil.*');
        $this->db->from('login');
        $this->db->join('user_profil', 'user_profil.username = login.username');
        $this->db->where('login.id_l', $id);
        $query = $this->db->get();
        return $query->result();
        
    }

    public function update_profil($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //pemilik
    public function data_pesan(){
       /*  return $this->db->get_where($table,$where); */
        $id = $this->session->userdata['csIdUser'];
        $this->db->select('
            login.*, pemesanan.*, tb_produk.*, pemesanan.status as status_p, tb_produk.status as status_r');
        $this->db->from('pemesanan');
        $this->db->join('login', 'pemesanan.id_user = login.id_l');
        $this->db->join('tb_produk', 'pemesanan.id_rumah = tb_produk.id');
        $this->db->where('tb_produk.user_id', $id);   
        $query = $this->db->get();
        return $query->result(); 
    }

    //pencari
    public function tambah_pesan($data){

        $this->db->insert('pemesanan', $data);

    }

    //pemilik
    public function tampilan_konfirmasi($where,$table){
        return $this->db->get_where($table,$where);
        /* $this->db->select('pemesanan.*, tb_produk.*, 
            login.*, pemesanan.status as status_p, tb_produk.status as status_r');
        $this->db->from('pemesanan');
        $this->db->join('login', 'pemesanan.id_user = login.id_l');
        $this->db->join('tb_produk', 'pemesanan.id_rumah = tb_produk.id');
        $this->db->where('id_pes', $id); */
        /* $query = $this->db->get();
        return $query->result();  */
    }

    //pemilik
    public function konfirmasi_p($where,$table,$data){
        $this->db->where($where);
        $this->db->update($table,$data);

    }

    //pencari
    public function data_pesanan_pen(){
        /*  return $this->db->get_where($table,$where); */
         $id = $this->session->userdata['csIdUser'];
         $this->db->select('
             login.*, pemesanan.*, tb_produk.*, pemesanan.status as status_p, tb_produk.status as status_r');
         $this->db->from('pemesanan');
         $this->db->join('login', 'pemesanan.id_user = login.id_l');
         $this->db->join('tb_produk', 'pemesanan.id_rumah = tb_produk.id');
         $this->db->where('pemesanan.id_user', $id);   
         $query = $this->db->get();
         return $query->result(); 
     }

     //sortir
     public function getAscBiaya()
		{
			$this->db->order_by('biaya', 'asc');
			return $this->db->get('tb_produk')->result();
		}
 
	public function getDescBiaya()
		{
			$this->db->order_by('biaya', 'desc');
			return $this->db->get('tb_produk')->result();
		}
    
        // ini modal
    public function selectData($param)
	{
		$arrData = $this->db->query("SELECT * FROM tb_produk ORDER BY biaya $param")->result_array();
		return $arrData;
	}
}