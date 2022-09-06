<title>Konfirmasi Pemesanan Selesai</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        KONFIRMASI PESANAN Selesai
        <small>Konfirmasikan Pesanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>rumah/pesanan_berlangsung">Daftar Pesanan Berlangsung</a></li>
        <li class="active">Konfirmasi Pesanan Selesai</li>
      </ol>
    </section>
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
        /* print_r($pesanan);
            die; */
        foreach($pesanan as $pes) : 
            ?>

        <form action="<?php echo base_url().'rumah/konfirmasi_selesai_do'; ?>"
        method="post">
    <div class="form-group row">
        <label class="col-sm-2">ID</label>
        <div class="col-sm-8">
        <input type="text" name="id_pes" class="form-control" value="<?php echo $pes['id_pes']?>"readonly>
        <input type="hidden" name="id_rumah" class="form-control" value="<?php echo $pes['id_rumah']?>"readonly>
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
        <label class="col-sm-2">Biaya Total</label>
        <div class="col-sm-8">
            <input type="text" name="biaya" class="form-control" value="<?php echo number_format($pes['biaya']*$pes['durasi'])?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Durasi Sewa  (bulan)</label>
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
        <label class="col-sm-2">Foto Bukti</label>
        <div class="col-sm-8">
            <img style="width:200px;height:200px;" src="<?php echo base_url('assets/bukti_bayar/').$pes['foto_bukti'] ?>" class="img-thumbnail">
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-sm-2">Konfirmasi Pesanan Selesai</label>
        <div class="col-sm-4">
            <input type="checkbox" id="sewa_selesai" name="sewa_selesai" value="TRUE">Pesanan Sudah Selesai
      </div>
    </div>
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