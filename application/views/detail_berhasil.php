<title>Pesanan Berhasil</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DETAIL PESANAN BERHASIL
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>rumah/pesanan_berhasil">Pesanan Berhasil</a></li>
        <li class="active">Detail Pesanan Berhasil</li>
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
        <label class="col-sm-2">Waktu Pesan</label>
        <div class="col-sm-8">
            <input type="text" name="waktu_pesan" class="form-control" value="<?php echo $pes['waktu_pesan']?>"readonly>
        </div>
    </div>
     
    <div class="form-group row">
        <label class="col-sm-2">Serah Terima Kunci</label>
        <div class="col-sm-1">
           Tanggal
        </div>
        <div class="col-sm-3">
            <input type="text" name="tgl_mulai" class="form-control" value="<?php echo $pes['tgl_mulai']?>"readonly>
        </div>
        <div class="col-sm-1">
           Jam
        </div>
        <div class="col-sm-3">
            <input type="text" name="tgl_terima_kunci" class="form-control" value="<?php echo $pes['tgl_terima_kunci']?>"readonly>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2">Foto Bukti</label>
        <div class="col-sm-8">
            <img src="<?php echo base_url('assets/bukti_bayar/').$pes['foto_bukti'] ?>" class="img-thumbnail">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
        <?php echo anchor('rumah/pesanan_berhasil/','<div class="btn btn-primary btn-sm">Kembali</div>') ?>
        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
        </div>
    </div>

        </form>
        <?php endforeach; ?>
    </section>
</div>