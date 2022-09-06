<!-- Content Wrapper. Contains page content -->
<title>Unggah Bukti</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bukti Pembayaran
        <small>Silahkan unggah bukti pembayaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>rumah/tampil_konfirmasi">Tampil Upload Bukti</a></li>
        <li class="active">upload bukti</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
       <!-- Query Join -->
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
                                /* print_r($pesanan);
                                die; */
                    ?> 
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">FORM UPLOAD BUKTI</h3>
          <?php 
            $no=1;
            foreach($pesanan as $pes) : 
            /* print_r($pesanan);
            die; */?>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"> -->
              <!-- <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <!--  -->
        <div class="box-body">
            <div class="box-text col">
                    <label>Nama Produk</label>
            </div>
            <div class="box-text col">
                    <?php echo $pes['nama']; ?>
            </div>
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Alamat</label>
            </div>
            <div class="box-text col">
                <?php echo $pes['alamat']; ?>
            </div>
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Biaya (bulan)</label>
            </div>
            <div class="box-text col">
                <?php echo number_format($pes['biaya']); ?>
            </div>            
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Luas</label>
            </div>
            <div class="box-text col">
                <?php echo $pes['luas']; ?>
            </div> 
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Tanggal terima kunci</label>
            </div>
            <div class="box-text col">
                <?php echo $pes['tgl_mulai']; ?>
            </div> 
            <div class="box-text col">
                <?php echo $pes['tgl_terima_kunci']; ?>
            </div> 
        </div>
        <div class="box-body">
          <?php echo form_open_multipart('rumah/upload_bukti_do'); ?>
            <!-- <div class="form-group"> -->
                
                  <div class="box-text col">
                    <label >TANGGAL MULAI</label>
                  </div>
                  <div class="box-text col">
                    <?php echo $pes['tgl_mulai']; ?>
                  </div>
        </div>
        <div class="box-body">
          
            <!-- <div class="form-group"> -->
                
                  <div class="box-text col">
                    <label >Durasi</label>
                  </div>
                  <div class="box-text col">
                    <?php echo $pes['durasi']; ?>
                  </div>
        </div>  

        <div class="box-body">
          
            <!-- <div class="form-group"> -->
                
                  <div class="box-text col">
                    <label >Total Biaya</label>
                  </div>
                  <div class="box-text col">
                    <?php $total = $pes['durasi'] * $pes['biaya'];
                      echo number_format($total);?>
                  </div>
        </div>  
        
        <div class="box-body">
          
            <!-- <div class="form-group"> -->
                
                  <div class="box-text col">
                    <label >Nomor Rekening</label>
                  </div>
                  <div class="box-text col">
                    712345987675
                  </div>
        </div>  
        
        <div class="box-body">
          
            <!-- <div class="form-group"> -->
                
                  <div class="box-text col">
                    <label >Upload Bukti Pembayaran</label>
                  </div>
                  <div class="box-text col">
                  <input type="hidden" name="id_pes" class="form-control" value="<?php echo $pes['id_pes']?>">
                    <input type="file" id ="foto_bukti" name="foto_bukti" class="form-control" accept="image/jpeg, image/png, image/jpg">
                  </div>
        </div> 
            <!-- <div class="form-group">
                <label >Upload Bukti Pembayaran</label>
                <input type="file" id ="foto_bukti" name="foto_bukti" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div> -->
        <div class="box-body">
            <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
            <button type="submit" class="btn btn-primary" onclick="tambahpesan();">Simpan</button>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        <?php endforeach; ?>
          Footer
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->