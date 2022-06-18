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
          <option value="ASC" selected>ASC</option>
          <option value="DESC">DESC</option>
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
    </section>
    <!-- section end-->

  
</div>