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
        
        // print_r($table);die;
        $this->db->trans_begin();
        $this->db->where($where);
        $this->db->update($table,$data);
        /* $this->db->update($where, $data); */
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return "Gagal";
        } else {
            $this->db->trans_commit();
            return "Berhasil";
        }
    }
    public function update_data1($where,$data,$table){
        
        // print_r($where);die;
        $this->db->where($where);
        $this->db->update($table,$data);
        /* $this->db->update($where, $data); */
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('tb_produk', array('id' => $id))->row();
        return $query;
    }
    ///dashboard
    public function ulasan($id){
        // $id = $id;
        // print_r($id);die;
        $queryUl = $this->db->query("SELECT `ulasan`.* , `login`.`nama_l`, `tb_produk`.`nama` FROM `ulasan` 
		                            JOIN `tb_produk` ON `ulasan`.`id_rumah` = `tb_produk`.`id`
                                    JOIN `login` ON `ulasan`.`id_user` = `login`.`id_l`
                                    WHERE `ulasan`.`id_rumah` = '$id'"
                                    )->result_array();
        return $queryUl;
    }
    public function rating($id){
        // $id = $id;
        // print_r($id);die;
        $queryUl = $this->db->query("SELECT AVG(`rating`) as AVG FROM `ulasan`
                                    WHERE `ulasan`.`id_rumah` = '$id'"
                                    )->result_array();
        return $queryUl;
    }
    //tambah ulasan
    public function tambah_ulasan($id){
        // $id = $id;
        // print_r($id);die;
        $queryUl = $this->db->query("SELECT `pemesanan`.* , `tb_produk`.*  FROM `pemesanan` 
		                            JOIN `tb_produk` ON `pemesanan`.`id_rumah` = `tb_produk`.`id`
                                    WHERE `tb_produk`.`id` = '$id'"
                                    )->row();
        return $queryUl;
    }
    public function tambah_ulasan_do($data){

        // $this->db->trans_begin();
        $this->db->insert("ulasan", $data);
        // if ($this->db->trans_status() === FALSE) {
        //     $this->db->trans_rollback();
        //     return "Gagal";
        // } else {
        //     $this->db->trans_commit();
        //     return "Berhasil";
        // }
/*     $this->db->insert('pemesanan', $data); */

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
    //////////////////////////
    //pencari
    public function data_pesan2(){
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

    //pencari
    public function tambah_pesan($data){

        $this->db->trans_begin();
        $this->db->insert("pemesanan", $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return "Gagal";
        } else {
            $this->db->trans_commit();
            return "Berhasil";
        }
/*     $this->db->insert('pemesanan', $data); */

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
    //  public function getAscBiaya()
	// 	{
	// 		$this->db->order_by('biaya', 'asc');
	// 		return $this->db->get('tb_produk')->result();
	// 	}
 
	// public function getDescBiaya()
	// 	{
	// 		$this->db->order_by('biaya', 'desc');
	// 		return $this->db->get('tb_produk')->result();
	// 	}
    
        // ini modal
    public function selectData($param)
	{
		$arrData = $this->db->query("SELECT *
                                        FROM tb_produk 
                                        ORDER BY biaya $param")->result_array();
       /*  $arrUlas = $this->db->query("SELECT ulasan.rating
                                        FROM ulasan")->result_array();  
        // print_r($arrUlas);die;
        array_push($arrData, $arrUlas); */
		return $arrData;
	}

    public function selectAvgR($id)
    {
        $arrUlas = $this->db->query("SELECT AVG(rating) as avg
                                    FROM ulasan
                                    WHERE id_rumah = $id ")->row_array();
        return $arrUlas; 
    }
    public function selectCriteria(){
        //biaya
        // biasain klo abis select itu jadiin aray
        // kok di controller gk ada function ini? belum dibikin pur
        // ohh
        $arrB1 = [];
        $rumah = $this->db->query("SELECT * FROM tb_produk")->result_array();
        $count1 = $this->db->query("SELECT Count(id) AS row_biaya FROM tb_produk")->result_array();
        // print_r($rumah);
        /* print_r($count1);
        die; */
        // gua baru inget itu array
        array_push($arrB1, $count1);
        // dari awal itu salah nik.. mustinya klo pun gk pake result array harus ada [row_biaya]
        // tambahin dlu nik
        // oiyaa pakein petik.. tambahin nik
        for($a = 0; $a < $count1[0]['row_biaya']; $a++){
            if($rumah[$a]['biaya'] <= 500000){
                $B1 = 5;
            }else if($rumah[$a]['biaya'] > 500000 && $rumah[$a]['biaya'] <= 750000){
                $B1 = 4;
            }
            else if($rumah[$a]['biaya'] > 750000 && $rumah[$a]['biaya'] <= 1000000){
                $B1 = 3;
            }else if($rumah[$a]['biaya'] > 1000000 && $rumah[$a]['biaya'] <= 1250000){
                $B1 = 2;
            }else{
                $B1 = 1;
            }

            $arrTemp = array(
                "B1" => $B1
            );
            array_push($arrB1, $arrTemp);
        }

        /* print_r($arrB1);
        die; */
        // return $arrB1;

        // kaya gitu nik kurleb
        // berarti tiap for kasih $arrTemp ya? iya buat inisialisasi aja itu mah
        // klo bisa tiap kriteria func nya beda" mulai dari footer, controller, model
        // beda apa nya pur? nama? biar lebih enak aja pas manggil..oke pisahin dlu ya 
        //Luas
        
        
        return $arrB1;
    }

    // ketik fun trus tab ok
    public function selectCriteria2()
    {
        //luas
        $arrB3 = []; //ini ganti ya angkanya?bebas itu mah
        $rumah = $this->db->query("SELECT * FROM tb_produk")->result_array();
        $count1 = $this->db->query("SELECT Count(id) AS row_biaya FROM tb_produk")->result_array();
        array_push($arrB3, $count1);
        for($a = 0; $a < $count1[0]['row_biaya']; $a++){
            // print_r($a);die;
            if($rumah[$a]['luas'] >= 20){
                $B3 = 5;
            }else if($rumah[$a]['luas'] == 16){
                $B3 = 4;
            }
            else if($rumah[$a]['luas'] == 12){
                $B3 = 3;
            }else if($rumah[$a]['luas'] == 9){
                $B3 = 2;
            }else{
                $B3 = 1;
            }
            $arrTemp = array(
                "B3" => $B3
            );
            
            array_push($arrB3, $arrTemp);
        }
        // print_r($arrB3);die;
        return $arrB3;
        
    }

    public function selectCriteria3()
    {
        //fasilitas
        $arrB4 = [];
        $rumah = $this->db->query("SELECT * FROM tb_produk")->result_array();
        $count1 = $this->db->query("SELECT Count(id) AS row_biaya FROM tb_produk")->result_array();
        array_push($arrB4, $count1);
        // print_r($arrB4);die;
        for($a = 0; $a < $count1[0]['row_biaya']; $a++){
            $value = 0;
            if($rumah[$a]['kamar_mandi']=="TRUE"){
                $value++;
                if($rumah[$a]['kasur']=="TRUE"){
                    $value++;
                    if($rumah[$a]['lemari']=="TRUE"){
                        $value++;
                        if($rumah[$a]['meja']=="TRUE"){
                            $value++;
                            if($rumah[$a]['ac']=="TRUE"){
                                $value++;
                            }else{
                                $value;
                            }
                        }else if($rumah[$a]['ac']=="TRUE"){
                            $value++;
                        }else{
                            $value;
                        }
                    }else if($rumah[$a]['meja']=="TRUE"){
                        $value++;
                        if($rumah[$a]['ac']=="TRUE"){
                            $value++;
                        }
                    }else if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }else{
                        $value;
                    }
                }else if($rumah[$a]['lemari']=="TRUE"){
                    $value++;
                    if($rumah[$a]['meja']=="TRUE"){
                        $value++;
                        if($rumah[$a]['ac']=="TRUE"){
                            $value++;
                        }
                    }else if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }
                }else if($rumah[$a]['meja']=="TRUE"){
                    $value++;
                    if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }
                }else if($rumah[$a]['ac']=="TRUE"){
                    $value++;
                }else{
                    $value;
                }
            }else if($rumah[$a]['kasur']=="TRUE"){
                $value++;
                if($rumah[$a]['lemari']=="TRUE"){
                    $value++;
                    if($rumah[$a]['meja']=="TRUE"){
                        $value++;
                        if($rumah[$a]['ac']=="TRUE"){
                            $value++;
                        }
                    }else if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }
                }else if($rumah[$a]['meja']=="TRUE"){
                    $value++;
                    if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }
                }
            }else if($rumah[$a]['lemari']=="TRUE"){
                $value++;
                if($rumah[$a]['meja']=="TRUE"){
                    $value++;
                    if($rumah[$a]['ac']=="TRUE"){
                        $value++;
                    }
                }else if($rumah[$a]['ac']=="TRUE"){
                    $value++;
                }
            }else if($rumah[$a]['meja']=="TRUE"){
                $value++;
                if($rumah[$a]['ac']=="TRUE"){
                    $value++;
                }
            }else if($rumah[$a]['ac']=="TRUE"){
                $value++;
            }else{
                $value;
            }
            // print_r($value);die;
            /////////////////////////////////////////////////////////////////////
        if($value == 5){
            $B4 = 5;
        }else if($value == 4){
            $B4 = 4;
        }else if($value == 3){
            $B4 = 3;
        }else if($value == 2){
            $B4 = 2;
        }else{
            $B4 = 1;
        }
        $arrTemp = array(
            "B4" => $B4
        );
        array_push($arrB4, $arrTemp);
        }
        // print_r($arrB4);die;
        return $arrB4;
        // iya kay gtu
        // nah skrg lu bikin dlu di footer sama controllernya
    }

    public function selectCriteria4()
    {
        //luas
        $arrB2 = []; //ini ganti ya angkanya?bebas itu mah
        $rumah = $this->db->query("SELECT * FROM tb_produk")->result_array();
        $count1 = $this->db->query("SELECT Count(id) AS row_biaya FROM tb_produk")->result_array();
        array_push($arrB2, $count1);
        array_push($arrB2, $rumah);
        // print_r($arrB2);die;
        return $arrB2;
        // print_r($arrB2);die;
    }
    // ambil data sesuai hasil maut
    public function showMaut($id)
    {
        $maut = $this->db->query("SELECT * FROM tb_produk WHERE ID in ($id)")->result_array();
        return $maut;
    }

    public function pdf($id){
        // $id = $id;
        // print_r($id);die;
        $query = $this->db->query("SELECT `pemesanan`.* , `tb_produk`.*, `login`.`nama_l`, `login`.`no_telp` 
                                    FROM `pemesanan` 
		                            JOIN `tb_produk` ON `pemesanan`.`id_rumah` = `tb_produk`.`id`
		                            JOIN `login` ON `pemesanan`.`id_user` = `login`.`id_l`
                                    WHERE `pemesanan`.`id_pes` = '$id'"
                                    )->row_array();
        return $query;
    }

}