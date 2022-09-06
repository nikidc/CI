<!-- Content Wrapper. Contains page content -->
<title>Pemesanan</title>
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
        <div class="alert alert-danger print-error-msg" style="display:none">
              </div>
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
                <label>Biaya</label> (bulan)
            </div>
            <div class="box-text col">
                Rp<?php echo number_format($detail->biaya); ?>
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
            
        
            <div class="form-group">

                <label >TANGGAL MULAI</label>
                <input type="hidden" id ="id_rumah" name="id_rumah" class="form-control" value="<?php echo $detail->id?>">
                <input type="hidden" id="id_user" name="id_user" class="form-control" value="<?php echo $user['id_l']?>">
                <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control">
                <?php echo form_error('tgl_mulai','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group">
                <label >Durasi Sewa</label>(bulan)
                <input type="number" id="durasi" name="durasi" class="form-control" maxlength="2">
                <?php echo form_error('durasi','<small class="text-danger">','</small>'); ?>
            </div>
            <button class="btn btn-danger" value="Reset">Reset</button>
            <button class="btn btn-primary btn-submit">Simpan</button>
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