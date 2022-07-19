<!-- Content Wrapper. Contains page content -->
<title>ULASAN</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ULASAN
        <small>Silahkan isi ulasan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>rumah/pesanan_selesaiU">Pesanan Selesai</a></li>
        <li class="active">Tambah Ulasan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="alert alert-danger print-error-msg" style="display:none">
              </div>
        <div class="box-header with-border">
          <h3 class="box-title">FORM ULASAN</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"> -->
              <!-- <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <!-- <form> -->
        <?php echo form_open_multipart('rumah/tambah_ulasan_do'); ?>
        <!--  -->
        <div class="box-body">
            <div class="box-text col">
              <label>Nama Rumah</label>
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
            <div class="box-text col">
                <label>Tanggal Mulai</label>
            </div>
            <div class="box-text col">
                <?php echo $detail->tgl_mulai; ?>
            </div> 
        </div>

        <div class="box-body">
            <div class="form-group">
                <label >Ulasan</label>
                <input type="hidden" id ="id_rumah" name="id_rumah" class="form-control" value="<?php echo $detail->id?>">
                <input type="hidden" id="id_user" name="id_user" class="form-control" value="<?php echo $user['id_l']?>">
                <input type="hidden" id="id_pes" name="id_pes" class="form-control" value="<?php echo $detail->id_pes?>">
                <textarea id="ulasan" name="ulasan" class="form-control" rows="3"></textarea>
                <?php echo form_error('ulasan','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="form-group stars">
            <div><label>Rating</label></div>
                <input class="star star-5" id="star-5" type="radio" name="star" value="5">
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star" value="4">
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star" value="3">
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star" value="2">
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star" value="1">
                <label class="star star-1" for="star-1"></label>
            </div>
            <div class="form-group">
                <label >Foto Rumah </label>(opsional)
                <div class="box-text col">
                    <input type="file" id ="foto_ulasan" name="foto_ulasan" class="form-control" accept="image/jpeg, image/png, image/jpg">
                  </div>
            </div>
            <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
            <button type="submit" class="btn btn-primary" id="ulasan">Simpan</button>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          Footer
        </div> -->
        <!-- /.box-footer-->
      </div>
<!-- </form> -->
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->