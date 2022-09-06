<title> Dashboard Pemilik </title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Dashboard
        <small>Dashboard Pemilik</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Dashboard Pemilik</li>
      </ol>
    </section>
    <section class="content">
        <!-- Query Hitung Jumlah data -->
        <!-- <?php 
            
            $queryJumlahPesanan = "SELECT COUNT(id_pes)
                                    FROM pemesanan
                                    JOIN tb_produk
                                    ON `tb_produk`.`user_id` = `pemesanan`.`id_l`
                                    WHERE condition";
        ?> -->
        <div class="row">
    <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
        </div>
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Rumah</button>
        <div class="navbar-form navbar-right">
            <?php echo form_open('rumah/search') ?>
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div> -->
<div class="row">
<div class="col-lg-4 col-xs-6">

    <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo count($pesanan); ?></h3>
                <p>Jumlah Pesanan</p>
            </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
            <a href="<?php echo base_url(); ?>rumah/tampil_pesanan" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-xs-6">

<div class="small-box bg-green">
    <div class="inner">
        <h3><?php echo $jml1; ?></h3>
        <p>Pesanan Berlangsung</p>
    </div>
        <div class="icon">
            <i class="ion ion-calendar"></i>
        </div>
        <a href="<?php echo base_url(); ?>rumah/pesanan_berlangsung" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-xs-6">

    <div class="small-box bg-yellow">
        <div class="inner">
            <h3><?php echo count($pesanan)-$jml1; ?></h3>
            <p>Pesanan Selesai</p>
        </div>
                <div class="icon">
                    <i class="ion ion-checkmark-round"></i>
                </div>
            <a href="<?php echo base_url(); ?>rumah/pesanan_berhasil" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

<!-- <div class="col-lg-3 col-xs-6">

    <div class="small-box bg-red">
        <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
        </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            <a href="#" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
 </div>-->

</div> 

<div class="row">
                <?php
                $id = $this->session->userdata('csIdUser');
                $tgl = date("Y-m-d");
                    $periksa=$this->db->query("SELECT `nama_l`, DATEDIFF(`tgl_akhir`,'$tgl') AS interval_tgl , `id_pes`
                    FROM `pemesanan` 
                    INNER JOIN `login` 
                    ON `login`.`id_l`= `pemesanan`.`id_user` 
                    INNER JOIN `tb_produk` 
                    ON `tb_produk`.`id` = `pemesanan`.`id_rumah`
                    WHERE `pemesanan`.`sewa_selesai`='FALSE'
                    AND `tb_produk`.`user_id` = '$id'")->result_array();
                    // print_r($periksa[0]['nama_l']);die;
                    
                    foreach($periksa as $pes){
                        // print_r($pes);die;
                        $nama = $pes['nama_l'];
                        $nomor = $pes['id_pes'];
                        if($pes['interval_tgl']==1){ 
                            echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Member <a style='color:red'>" .$nama."</a> dengan ID = ".$nomor.", Besok adalah Batas akhir sewa </div>"; 
                        } elseif ($pes['interval_tgl']==2) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Member <a style='color:red'>" .$nama."</a> dengan ID = ".$nomor.", Batas akhir sewa tinggal 2 hari </div>"; 
                        } elseif ($pes['interval_tgl']==3) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Member <a style='color:red'>" .$nama."</a> dengan ID = ".$nomor.", Batas akhir sewa tinggal 3 hari </div>"; 
                        } elseif ($pes['interval_tgl']==0) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Member <a style='color:red'>" .$nama."</a> dengan ID = ".$nomor.", Hari ini adalah batas akhir sewa </div>"; 
                        } elseif ($pes['interval_tgl']<0) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Member <a style='color:red'>" .$nama."</a> dengan ID = ".$nomor.", Telah melewati batas akhir sewa </div>"; 
                        } else {
                            echo "";
                        }
                    }
                    ?>
</div>

<div class="row">
<table class="table">
    <label >Daftar Batas Akhir Sewa</label>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Pemesan</th>
                <th>No HP</th>
                <th>Nama Rumah</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>STATUS</th>
                <th colspan="2">AKSI</th>
        
            </tr>
             <!-- Query Rumah -->
            <?php 
            $no =1;
            foreach ($pesanan as $pes):
            if($pes->sewa_selesai == "FALSE"){?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pes->id_pes; ?></td>
                <td><?php echo $pes->nama_l; ?></td>
                <td><?php echo $pes->no_telp; ?></td>
                <td><?php echo $pes->nama; ?></td>
                <td><?php echo $pes->tgl_mulai; ?></td>
                <td><?php echo $pes->tgl_akhir; ?></td>
                <td><?php echo $pes->status_p; ?></td>
                <!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$pes->id_pes,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td> -->
                <td><?php echo anchor('rumah/konfirmasi_selesai/'.$pes->id_pes,'<div class="btn btn-primary btn-sm"><i class="fa fa-check"></i></div>') ?>
            </td>
            </tr>
            <?php } endforeach; ?>
        </table>

</div>

    </section> 
</div>
