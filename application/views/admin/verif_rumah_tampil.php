<title>Verifikasi Rumah</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifikasi Rumah
        <small>\\</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>admin/verif_rumah">Daftar Verifikasi Rumah</a></li>
        <li class="active">Verifikasi Rumah</li>
      </ol>
    </section>
    <section class="content">
        <!-- Query Percobaan -->                 
        <?php 

        /* var_dump($user);
            die; */
        // foreach($user as $us) : 
            ?>

        <form action="<?php echo base_url().'admin/verif_rumah_do'; ?>"
        method="post">
    <div class="form-group row">
        <label class="col-sm-2">ID</label>
        <div class="col-sm-8">
            <input type="text" id="id" name="id" class="form-control" value="<?php echo $rumah['id'];?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Pengguna</label>
        <div class="col-sm-8">
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $rumah['nama'];?>" readonly>
            <!-- <php echo form_error('nama','<small class="text-danger" pl-3>','</small>'); ?> -->
        </div>    
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Nomor Telepon</label>
        <div class="col-sm-8">
            <input type="text" id="biaya" name="biaya" class="form-control" value="<?php echo $rumah['biaya']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Username</label>
        <div class="col-sm-8">
            <input type="text" id="luas" name="luas" class="form-control" value="<?php echo $rumah['luas']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Alamat Pengguna</label>
        <div class="col-sm-8">
            <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $rumah['alamat']?>"readonly>
        </div>
    </div>

    <!-- sini -->
    <div class="form-group row">
        <label class="col-sm-2">Fasilitas Tersedia</label>
        <div class="col-sm-8">
        <?php

            $km = $rumah['kamar_mandi'];
            $arrFasi=array($km);
            if($km == "TRUE"){
                echo "Kamar Mandi";
            }else{
                echo "";
            } ?><br>
         <?php $kasur = $rumah['kasur'];
            if($kasur == "TRUE"){
                echo "Kasur";
            }else{
                echo "";
            } ?><br>
         <?php $lemari = $rumah['lemari']; 
            if($lemari == "TRUE"){
                echo "Lemari";
            }else{
                echo "";
            }?><br>
         <?php $meja = $rumah['meja'];
            if($meja =="TRUE"){
                echo "Meja";
            }else{
                echo "";
            }?><br>
         <?php $ac = $rumah['ac']; 
            if($ac == "TRUE"){
                echo "AC";
            }else{
                echo "";
            }?>
        </div>
    </div>
    <!-- <div class="form-group row">
        <label class="col-sm-2">Fasilitas</label>
        <div class="col-sm-8">
            <input type="checkbox" name="kamar_mandi" value="TRUE" <?php echo $rumah['kamar_mandi'] == 'TRUE' ? ' checked' : '';?>> Kamar Mandi
            <input type="checkbox" name="kasur" value="TRUE" <?php echo $rumah['kasur'] == 'TRUE' ? ' checked' : '';?>> Kasur
            <input type="checkbox" name="lemari" value="TRUE" <?php echo $rumah['lemari'] == 'TRUE' ? ' checked' : '';?>> Lemari
            <input type="checkbox" name="meja" value="TRUE" <?php echo $rumah['meja'] == 'TRUE' ? ' checked' : '';?>> Meja
            <input type="checkbox" name="ac" value="TRUE" <?php echo $rumah['ac'] == 'TRUE' ? ' checked' : '';?>> AC
        </div>
    </div> -->

    <div class="form-group row">
        <label class="col-sm-2">Foto Rumah</label>
        <div class="col-sm-3">
            <img src="<?php echo base_url(); ?>foto/<?php echo $rumah['foto1']; ?>" 
                    width = "150" height="110">
            <!-- <input type="text" id="foto1" name="foto1" class="form-control" value="<?php echo $rumah['foto1'];?>"readonly> -->
        </div>
        <div class="col-sm-3">
            <img src="<?php echo base_url(); ?>foto/<?php echo $rumah['foto2']; ?>" 
                    width = "150" height="110">
            <!-- <input type="text" id="foto2" name="foto2" class="form-control" value="<?php echo $rumah['foto2'];?>"readonly> -->
        </div>
        <div class="col-sm-3">
            <img src="<?php echo base_url(); ?>foto/<?php echo $rumah['foto3']; ?>" 
                    width = "150" height="110">
            <!-- <input type="text" id="foto2" name="foto2" class="form-control" value="<?php echo $rumah['foto2'];?>"readonly> -->
        </div>
    </div>

    <!-- <div class="form-group row">
        <label class="col-sm-2">Foto KTP</label>
        <div class="col-sm-8">
            <input type="text" id="foto_ktp"name="foto_ktp" class="form-control" value="<?php echo $rumah['foto_profil'];?>"readonly>
        </div>
    </div> -->


    <!-- <div class="form-group row">
        <label class="col-sm-2">Role</label>
        <div class="col-sm-8">
            <input type="text" id="role_l" name="role_l" class="form-control" value="<?php echo $rumah['role_l']?>"readonly>
        </div>
    </div> -->

     
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Verifikasi rumah Ini?</label>
        <div class="col-sm-2">
        <input type="checkbox" id="verifikasi" name="verifikasi" value="TRUE"> YA
            
        </div>
    </div>

    <!-- <div class="form-group row">
    <label class="col-sm-2 col-form-label">Ubah Status Rumah</label>
        <div class="col-sm-2">
            <input type="radio" id="status_r" name="status_r" value="terisi" class="custom-control-input">
            <label class="custom-control-label" for="status_r">Terisi</label>
        </div>
        <div class="col-sm-2">
            <input type="radio" id="status_r" name="status_r" value="tersedia" class="custom-control-input">
            <label class="custom-control-label" for="status_r">Tersedia</label>
        </div>
    </div> -->
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
        <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
        </form>
        <!-- <php endforeach; ?> -->
    </section>
</div>