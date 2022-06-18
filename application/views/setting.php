<title>Setting</title>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Profil
        <small>Detail Profil</small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Profil</li>
      </ol>
      <!-- <div class="navbar-form">
            <?php echo form_open('rumah/search1') ?>
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
           </div> -->
     <br>
 <div class="container" >
         
    <div class="row">
    <h3><center>PROFIL USER</center></h3>
    <div class="row mb-3">
        <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
    </div> 
        <div class="card mb-3 col-lg-6">
          <img class="card-img-top img-thumbnail" src="<?php echo base_url().'/assets/foto_profil/'.$user['foto_profil'] ?>">
          <div class="card-body col-lg-6">
            <!-- <h5 class="card-title"><?php echo strtoupper($user['nama_l']); ?></h5> -->
            <p class="card-text">Username :</p>
            <p class="card-text">Nama : </p>
            <p class="card-text">Alamat : </p>
            <p class="card-text">Nomor Telepon : </p>
          </div>
          <div class="card-body row col-lg-6">
            <p class="card-text"><?php echo $user['username']; ?></p>
            <p class="card-text"><?php echo $user['nama_l']; ?></p>
            <p class="card-text"><?php echo $user['alamat_user']; ?></p>
            <p class="card-text"><?php echo $user['no_telp']; ?></p>
          </div>
        </div>
       
        <!-- mulai -->
       <!--  <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- akhir-->
        <!-- coba-->
          <div class="row">
              <div class="col-lg-8">
                <?php echo form_open_multipart('rumah/setting'); ?>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $user['id_l'];?>">
                      <input type="text" class="form-control" id="username" name="username"
                        value="<?php echo $user['username'] ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_l" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_l" name="nama_l"
                      value="<?php echo $user['nama_l'] ?>">
                      <?php echo form_error('nama_l','<small class="text-danger" pl-3>','</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat_user" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_user" name="alamat_user"
                      value="<?php echo $user['alamat_user'] ?>">
                      <?php echo form_error('alamat_user','<small class="text-danger" pl-3>','</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_telp" name="no_telp"
                      value="<?php echo $user['no_telp'] ?>">
                      <?php echo form_error('no_telp','<small class="text-danger">','</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto Profil</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-3">
                          <img src="<?php echo base_url('assets/foto_profil/').$user['foto_profil'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                          <input type="file" id ="foto_profil" name="foto_profil" class="form-control" accept="image/jpeg, image/png, image/jpg">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row justify-content-end">
                    <div class="col-lg-8">
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>

      </div>
    </div>
    


    </section>
    <!-- section end-->
    <!-- Modal -->

    <!-- <div class="modal" tabindex="-1" role="dialog" id="editModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Profil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php foreach ($profil as $p) { ?>
          <div class="modal-body">
             <div class="form-group">
                <label >Username</label>
                <input type="text" id = "username" name ="username" value="<?php echo $p->username;?>" readonly class="form-control">
             </div>
          
             <div class="form-group">
                <label >Nama Pengguna</label>
                <input type="text" id = "nama_l" name ="nama_l" value="<?php echo $p->nama_l;?>" class="form-control">
             </div>

             <div class="form-group">
                <label >Nomor Telepon</label>
                <input type="number" id = "no_telp" name ="no_telp" value="<?php echo $p->no_telp;?>" class="form-control">
             </div>

          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            <?php } ?>  

          </div>
        </div>
      </div>
    </div>  -->
    <!-- Close mOdal -->

</div>