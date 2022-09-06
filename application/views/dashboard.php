<title>Dashboard</title>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Dashboard
        <small>Daftar Rumah</small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>  
      </ol>
      <div>
       <input type="hidden" name="latitudeU" id="latitudeU" class="form-control" value="<?php echo $user['latitudeU']?>">
       <input type="hidden" name="longitudeU" id="longitudeU" class="form-control" value="<?php echo $user['longitudeU']?>">
      </div>
      <div class="col-lg-12">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search-plus"></i> Cari Sesuai Kriteria</button>
     <!--  <div class="container-fluid">
        <div class="row">
          <div class="navbar-form col-lg-10"> -->
            <!-- <label for="urutkan">Urutkan berdasarkan</label> -->
           <!--  <?php echo form_open('rumah/urutkan_biaya') ?>
              <select name="urutkan" id="urutkan" class="form-control">
                <option value="1">Harga terendah</option>
                <option value="2">Harga tertinggi</option>
              </select>
              <button type="submit" class="btn btn-info" name="cek">Urutkan</button>
              <?php echo form_close() ?>
          </div>
          <div class="navbar-form col-lg-2">
                <?php echo form_open('rumah/search1') ?>
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i>Cari</button>
                <?php echo form_close() ?>
          </div>
        </div>
      </div> -->
     <br>
     <!-- tes -->
     <!-- Ini view page-->
     <!-- <div class="navbar-form col-lg-10"> -->
        <select name="sortir" id="sortir" class="custom-select">
          <option value="ASC" selected>Harga Terendah</option>
          <option value="DESC">Harga Tertinggi</option>
        </select>
      <!-- </div> -->
        <div id="divTest" class="container-fluid row text-center mb-3"></div>

<!--  <div class="container-fluid" >
    <div class="row text-center">
    <php foreach ($rumah as $rm) :?>
      <div class="card col-lg-4 mb-3" >
        <img src="<php echo base_url().'/foto/'.$rm->foto1 ?>" width="100" height="100" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $rm->nama ?></h5>
          <small><php echo $rm->alamat ?></small><br>
          <span class="badge bg-info text-dark mb-3">Rp<php $angka = $rm->biaya;
                            $hasil_format_angka = number_format($angka,2,',','.');
                            echo $hasil_format_angka; ?></span>
          <a href="<php echo base_url('rumah/pesan/'.$rm->id) ?>" class="btn btn-sm btn-primary mt-3">Pesan Sekarang</a>
          <a href="<php echo base_url('rumah/detail/'.$rm->id)?>" class="btn btn-sm btn-success">Detail</a>
        </div>
      </div> -->
      
    
      <!-- <php endforeach; ?> -->
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tentukan Kriteria</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-window-close"></i></button>
            </div>
     <!-- FORM TAMBAH-->
     <div class="modal-body">
        <!-- <form action="<php echo base_url().'rumah/tambah_rumah1' ?>" method="post"> -->
           <!--  <php echo form_open_multipart('rumah/tambah_rumah1'); ?> -->
            <!-- vakuenya lu ganit" dlu sesuaiin sama yg nilai kriterianya.. gitu nik
          jadi angka aja ?hooh kan buat diitung . gini ya?iyaa tapi harus sesuai ya mana yg 1 mana yg 5 -->
          <div class="form-group">
            <label for="biaya">Biaya</label>
              <select name="biaya" id="biaya" class="form-control">
                <option value="5">Kurang dari 500.000</option>
                <option value="4">500.000 sampai 750.000</option>
                <option value="3">750.000 sampai 1.000.000</option>
                <option value="2">1.000.000 sampai 1.250.000</option>
                <option value="1">Lebih dari 1.250.000</option>
              </select>
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
          </div>
          <div class="form-group">
            <label for="jarak">Jarak</label>
              <select name="jarak" id="jarak" class="form-control">
                <option value="1">Lebih dari 2 km</option>
                <option value="2">2 km sampai 1.5 km</option>
                <option value="3">1.5 km sampai 1 km</option>
                <option value="4">1 km sampai 500 m</option>
                <option value="5">Kurang dari 500 m</option>
              </select>
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
          </div>
          <div class="form-group">
            <label for="luas">Luas Rumah</label>
              <select name="luas" id="luas" class="form-control">
                <option value="1">2 x 3 m2</option>
                <option value="2">3 x 3 m2</option>
                <option value="3">3 x 4 m2</option>
                <option value="4">4 x 4 m2</option>
                <option value="5">4 x 5 m2</option>
              </select>
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
            <!-- footer dashboard mana? apa smuanya nyatu?.. nyatu pur.. oke -->
          </div>
          <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
              <select name="fasilitas" id="fasilitas" class="form-control">
                <option value="1">1 Fasilitas</option>
                <option value="2">2 Fasilitas</option>
                <option value="3">3 Fasilitas</option>
                <option value="4">4 Fasilitas</option>
                <option value="5">Lebih dari 5 Fasilitas</option>
              </select>
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
          </div>           
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="button" class="btn btn-primary" onclick="searchByCriteria();">Simpan</button>
                <!-- </form> -->
            <!-- <php echo form_close(); ?> -->
              <!-- klo pake onclick button ganti ke button gk bsa pake submit..oh oke -->
        </div>
        <div class="modal-footer">
            
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="mautModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hasil Pencarian</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-window-close"></i></button>
          </div>
            <div class="modal-body" id="bodyMaut">

            </div>
      </div>
    </div>
    </section>
    <!-- section end-->
   </div>

  
</div>