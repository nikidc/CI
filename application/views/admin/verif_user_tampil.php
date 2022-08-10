<title>Verifikasi Pengguna</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifikasi Pengguna
        <small>\\</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>admin/verif_user">Daftar Verifikasi Pengguna</a></li>
        <li class="active">Verifikasi Pengguna</li>
      </ol>
    </section>
    <section class="content">
        <!-- Query Percobaan -->                 
        <?php 

        /* var_dump($user);
            die; */
        // foreach($user as $us) : 
            ?>

        <form action="<?php echo base_url().'admin/verif_user_do'; ?>"
        method="post">
    <div class="form-group row">
        <label class="col-sm-2">ID</label>
        <div class="col-sm-8">
            <input type="text" id="id_l" name="id_l" class="form-control" value="<?php echo $user['id_l'];?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Pengguna</label>
        <div class="col-sm-8">
            <input type="text" id="nama_l" name="nama_l" class="form-control" value="<?php echo $user['nama_l'];?>" readonly>
            <!-- <php echo form_error('nama','<small class="text-danger" pl-3>','</small>'); ?> -->
        </div>    
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Nomor Telepon</label>
        <div class="col-sm-8">
            <input type="text" id="no_telp" name="no_telp" class="form-control" value="<?php echo $user['no_telp']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Username</label>
        <div class="col-sm-8">
            <input type="text" id="username" name="username" class="form-control" value="<?php echo $user['username']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Alamat Pengguna</label>
        <div class="col-sm-8">
            <input type="text" id="alamat_user" name="alamat_user" class="form-control" value="<?php echo $user['alamat_user']?>"readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Foto Profil</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url('assets/foto_profil/').$user['foto_profil'] ?>" id="foto_profil" class=""
                    width = "150" height="110">
            <!-- <input type="text" id="foto_profil"name="foto_profil" class="form-control" value="<?php echo $user['foto_profil'];?>"readonly> -->
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Foto KTP</label>
        <div class="col-sm-8">
                <img src="<?php echo base_url('assets/foto_ktp/').$user['foto_ktp'] ?>" id="foto_ktp" class=""
                    width = "150" height="110">
            <!-- <input type="text" id="foto_ktp"name="foto_ktp" class="form-control" value="<?php echo $user['foto_profil'];?>"readonly> -->
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2">Role</label>
        <div class="col-sm-8">
            <input type="text" id="role_l" name="role_l" class="form-control" value="<?php echo $user['role_l']?>"readonly>
        </div>
    </div>

     
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Verifikasi User Ini?</label>
        <div class="col-sm-2">
        <input type="checkbox" id="verifikasi_user" name="verifikasi_user" value="TRUE" <?php echo $user['verifikasi_user'] == 'TRUE' ? ' checked' : '';?>> YA
            
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