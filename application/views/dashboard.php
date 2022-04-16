<div class="content-wrapper">
<section class="content-header">
      <h1>
        Dashboard
        <small>Daftar Rumah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Rumah</li>
      </ol>
     
     
 <div class="container-fluid" >
    <div class="row text-center">
    <?php foreach ($rumah as $rm) :?>
      <div class="card col-lg-4 ml-3" >
        <img src="<?php echo base_url().'/foto/'.$rm->foto1 ?>" width="100" height="100" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $rm->nama ?></h5>
          <small><?php echo $rm->alamat ?></small><br>
          <span class="badge bg-info text-dark mb-3">Rp<?php $angka = $rm->biaya;
                            $hasil_format_angka = number_format($angka,2,',','.');
                            echo $hasil_format_angka; ?></span>
          <a href="#" class="btn btn-sm btn-primary mt-3">Tambah ke Cart</a>
          <a href="<?php echo base_url('rumah/detail/'.$rm->id)?>" class="btn btn-sm btn-success">Detail</a>
        </div>
      </div>
      
    
      <?php endforeach; ?>
    </div>
    </div>
    </section>
    <!-- section end-->

  
</div>