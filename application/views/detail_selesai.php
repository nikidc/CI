<title>Konfirmasi Pemesanan</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DETAIL PESANAN BERHASIL
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?php echo base_url(); ?>rumah/pesanan_selesaiU">Pesanan Selesai</a></li>
        <li class="active">Detail Pesanan Selesai</li>
      </ol>
    </section>
    <section class="content">
        <!-- Query Percobaan -->
        <?php 
                $id_pes = $pesanan->id_pes;
                $queryDetail = "SELECT * , `tb_produk`.`status` AS `status_r`,
                                     `pemesanan`.`status` AS `status_p`
                                FROM `pemesanan` JOIN `login` 
                                  ON `pemesanan`.`id_user` = `login`.`id_l`
                                JOIN `tb_produk` 
                                  ON `pemesanan`.`id_rumah` = `tb_produk`.`id`
                                WHERE `pemesanan`.`id_pes` = '$id_pes'
                                ";

                                $pesanan = $this->db->query($queryDetail)->result_array();
                               /*  var_dump($pesanan);
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
        <label class="col-sm-2">Durasi Sewa</label>
        <div class="col-sm-8">
            <input type="text" name="durasi" class="form-control" value="<?php echo $pes['durasi']." Bulan"?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Biaya Total</label>
        <div class="col-sm-8">
            <input type="text" name="biaya" class="form-control" value="<?php echo number_format($pes['biaya']*$pes['durasi'])?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Waktu Pesan</label>
        <div class="col-sm-8">
            <input type="text" name="waktu_pesan" class="form-control" value="<?php echo $pes['waktu_pesan']?>"readonly>
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
        <?php echo anchor('rumah/pesanan_selesaiU/','<div class="btn btn-primary btn-sm">Kembali</div>') ?>
        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
        </div>
    </div>

        </form>
        <?php endforeach; ?>
    </section>
</div>