<title> Sewa Berlangsung </title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Sewa Berlangsung
        <small>Sewa yang sedang berjalan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Sewa Berlangsung</li>
      </ol>
    </section>
    <section class="content">

        <div class="row">
    <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
        </div>
        
<div class="row">
<div class="col-lg-6 col-xs-6">

    <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo count($pesanan2); ?></h3>
                <p>Jumlah Pesanan</p>
            </div>
                <div class="icon">
                    <i class="ion ion-home"></i>
                </div>
            <a href="<?php echo base_url(); ?>rumah/sewa_berlangsung" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- <div class="col-lg-4 col-xs-6">

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
</div> -->

<div class="col-lg-6 col-xs-6">

    <div class="small-box bg-yellow">
        <div class="inner">
            <h3><?php echo count($pesanan2) - count($pesanan);?></h3>
            <p>Jumlah Sewa yang sudah selesai</p>
        </div>
                <div class="icon">
                    <i class="ion ion-checkmark-round"></i>
                </div>
            <a href="<?php echo base_url(); ?>rumah/pesanan_selesaiU" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
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
                    $periksa=$this->db->query("SELECT `nama_l`, DATEDIFF(`tgl_akhir`,'$tgl') AS interval_tgl 
                    FROM `pemesanan` 
                    INNER JOIN `login` 
                    ON `login`.`id_l`= `pemesanan`.`id_user` 
                    INNER JOIN `tb_produk` 
                    ON `tb_produk`.`id` = `pemesanan`.`id_rumah`
                    WHERE `pemesanan`.`sewa_selesai`='FALSE'
                    AND `pemesanan`.`id_user` = '$id'")->result_array();
                    // print_r($periksa);die;

                    foreach($periksa as $pes){
                        // print_r($pes);die;
                        $nama = $pes['nama_l'];
                        if($pes['interval_tgl']==1){ 
                            echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Penghuni dengan nama <a style='color:red'>" .$nama."</a>, Besok adalah batas akhir sewa </div>"; 
                        } elseif ($pes['interval_tgl']==2) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Penghuni dengan nama <a style='color:red'>" .$nama."</a> batas akhir sewa tinggal 2 hari </div>"; 
                        } elseif ($pes['interval_tgl']==3) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Penghuni dengan nama <a style='color:red'>" .$nama."</a> batas akhir sewa tinggal 3 hari </div>"; 
                        } elseif ($pes['interval_tgl']==0) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Penghuni dengan nama <a style='color:red'>" .$nama."</a> Hari ini adalah batas akhir sewa </div>"; 
                        } elseif ($pes['interval_tgl']<0) {
                             echo "<div style='padding:5px' style='width:50px' ><span class='glyphicon glyphicon-info-sign'></span> Penghuni dengan nama <a style='color:red'>" .$nama."</a> Telah melewati batas akhir sewa </div>"; 
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
                <th>Nama Rumah</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Biaya</th>
                <th>STATUS</th>
                <th colspan="2">AKSI</th>
        
            </tr>
             <!-- Query Rumah -->
            <?php 
            $no =1;
            foreach ($pesanan as $pes):
                ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pes->nama; ?></td>
                <td><?php echo $pes->tgl_mulai; ?></td>
                <td><?php echo $pes->tgl_akhir; ?></td>
                <td><?php echo number_format($pes->biaya * $pes->durasi); ?></td>
                <td><?php echo $pes->status_p; ?></td>
                <!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$pes->id_pes,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td> -->
                <td><?php echo anchor('rumah/detail_selesai/'.$pes->id_pes,'<div class="btn btn-primary btn-sm"><i class="fa fa-check"></i></div>') ?>
            </td>
            </tr>
            <?php endforeach; ?>
        </table>

</div>

    </section> 
</div>
