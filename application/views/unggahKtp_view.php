<title>Unggah KTP</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unggah KTP
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Unggah KTP</li>
      </ol>
    </section>
    <section class="content">
        <!-- Query Percobaan -->                 
        <?php 

        /* var_dump($user);
            die; */
        // foreach($user as $us) : 
            ?>

    <?php echo form_open_multipart('rumah/unggahktp_do'); ?>
        <div class="form-group row">
            <label class="col-sm-2">ID</label>
            <div class="col-sm-8">
                <input type="text" id="id_l" name="id_l" class="form-control" value="<?php echo $user['id_l'];?>"readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Silahkan unggah KTP</label>
            <div class="col-sm-8">
            <input type="file" id ="foto_ktp" name="foto_ktp" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div>
        </div>

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