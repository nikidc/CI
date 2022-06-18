
<div class="content-wrapper row">
    <h4>
        Konfirmasi Pesanan
      </h4>
    <section class="content">
        <!-- Query Percobaan -->
        <?php 
                $id_pes = $pesanan->id_pes;
                $queryKonfirm = "SELECT * , `tb_produk`.`status` AS `status_r`,
                                     `pemesanan`.`status` AS `status_p`
                                FROM `pemesanan` JOIN `login` 
                                  ON `pemesanan`.`id_user` = `login`.`id_l`
                                 JOIN `tb_produk`
                                  ON `pemesanan`.`id_rumah` = `tb_produk`.`id`
                               WHERE `pemesanan`.`id_pes` = '$id_pes'
                            /* ORDER BY `user_access_menu`.`menu_id` ASC */
                                ";

                                $pesanan = $this->db->query($queryKonfirm)->result_array();
                                /* var_dump($pesanan);
                                die; */
                    ?> 
                 
        <?php 
        $no=1;
        foreach($pesanan as $pes) : 
            /* print_r($pesanan);
            die; */?>

        <form action="<?php echo base_url().'rumah/konfirmasi_p'; ?>"
        method="post">
    <div class="form-group row">
        <label class="col-sm-2">ID</label>
        <div class="col-sm-8">
        <input type="text" name="id_pes" class="form-control" value="<?php echo $pes['id_pes']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Pemesan</label>
        <div class="col-sm-8">
            
            <input type="text" name="nama" class="form-control" value="<?php echo $pes['nama_l']?>" readonly>
            <!-- <php echo form_error('nama','<small class="text-danger" pl-3>','</small>'); ?> -->
        </div>
        
        
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Nomor Telepon</label>
        <div class="col-sm-8">
            <input type="text" name="no_telp" class="form-control" value="<?php echo $pes['no_telp']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Nama Rumah</label>
        <div class="col-sm-8">
            <input type="text" name="nama" class="form-control" value="<?php echo $pes['nama']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Tanggal Mulai</label>
        <div class="col-sm-8">
            <input type="text" name="tgl_mulai" class="form-control" value="<?php echo $pes['tgl_mulai']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Durasi</label>
        <div class="col-sm-8">
            <input type="text" name="durasi" class="form-control" value="<?php echo $pes['durasi']." Bulan"?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Waktu Pesan</label>
        <div class="col-sm-8">
            <input type="text" name="waktu_pesan" class="form-control" value="<?php echo $pes['waktu_pesan']?>"readonly>
        </div>
    </div>
     
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Pilih Konfirmasi</label>
        <div class="col-sm-2">
            <input type="radio" id="status_p" name="status_p" value="DITERIMA" class="custom-control-input">
            <label class="custom-control-label" for="status_p">Diterima</label>
        </div>
        <div class="col-sm-2">
            <input type="radio" id="status_p" name="status_p" value="DITOLAK" class="custom-control-input">
            <label class="custom-control-label" for="status_p">Ditolak</label>
        </div>
    </div>
    <!-- <div class="form-group row">
        <label class="col-sm-2">Fasilitas</label>
        <div class="col-sm-8">
            <input type="checkbox" name="kamar_mandi" value="TRUE" <?php echo $pes->kamar_mandi == 'TRUE' ? ' checked' : '';?>> Kamar Mandi
            <input type="checkbox" name="kasur" value="TRUE" <?php echo $pes->kasur == 'TRUE' ? ' checked' : '';?>> Kasur
            <input type="checkbox" name="lemari" value="TRUE" <?php echo $pes->lemari == 'TRUE' ? ' checked' : '';?>> Lemari
            <input type="checkbox" name="meja" value="TRUE" <?php echo $pes->meja == 'TRUE' ? ' checked' : '';?>> Meja
            <input type="checkbox" name="ac" value="TRUE" <?php echo $pes->ac == 'TRUE' ? ' checked' : '';?>> AC

        </div>
    </div> -->

    <!-- <div class="form-group">
        <label >Upload Foto</label>
        <input type="file" id ="foto2" class="form-control" accept="image/jpeg, image/png, image/jpg">
        </div>      

    <div class="form-group">
        <label >Upload Foto</label>
        <input type="file" id ="foto3" class="form-control" accept="image/jpeg, image/png, image/jpg">
        </div> -->
    <div class="form-group row">
        <div class="col-sm-2">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

        </form>
        <?php endforeach; ?>
    </section>
</div>