<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PESANAN
        <small>Isi form untuk memesan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rumah</a></li>
        <li class="active">Pesan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">FORM PESANAN</h3>

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
            <div class="box-text">
              <?php echo $detail->nama; ?>
            </div>        
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Alamat</label>
            </div>
            <div class="box-text col">
                <?php echo $detail->alamat; ?>
            </div>
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Biaya</label>
            </div>
            <div class="box-text col">
                <?php echo $detail->biaya; ?>
            </div>            
        </div>
        <div class="box-body">
            <div class="box-text col">
                <label>Luas</label>
            </div>
            <div class="box-text col">
                <?php echo $detail->luas; ?>
            </div> 
        </div>
        <div class="box-body">
        <?php echo form_open_multipart('rumah/tambah_pesan'); ?>
            <div class="form-group">

                <label >TANGGAL MULAI</label>
                <input type="hidden" name="id_rumah" class="form-control" value="<?php echo $detail->id?>">
                <input type="hidden" name="id_user" class="form-control" value="<?php echo $user['id_l']?>">
                <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control">
                <?php echo form_error('tgl_mulai','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
                <label >Durasi </label>(bulan)
                <input type="number" id="durasi" name="durasi" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label >Upload Bukti Pembayaran</label>
                <input type="file" id ="foto_bukti" name="foto_bukti" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div> -->
            <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
            <button type="submit" class="btn btn-primary" onclick="tambahpesan();">Simpan</button>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          Footer
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->