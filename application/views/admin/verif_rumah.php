<title> TAMPIL VERIFIKASI RUMAH </title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Verifikasi Rumah
        <small>Daftar Verifikasi Rumah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Daftar Verifikasi Rumah</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Rumah</button>
        <div class="navbar-form navbar-right">
            <?php echo form_open('rumah/search') ?>
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div> -->
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Biaya</th>
                <th>Alamat</th>
                <th>Luas</th>
                <!-- <th>Role</th> -->
                <th colspan="2">AKSI</th>
        
            </tr>
             <!-- Query Rumah -->
            <?php 
            $no =1;
            foreach ($rumah as $rm):
                if($rm->verifikasi == "FALSE" ){
                    ?>
                
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rm->nama; ?></td>
                <td><?php echo $rm->biaya; ?></td>
                <td><?php echo $rm->luas; ?></td>
                <td><?php echo $rm->alamat; ?></td>
                <!-- <td><?php echo $rm->role_l; ?></td> -->
                
                <!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$pes->id_pes,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td> -->
                <td><?php echo anchor('admin/verif_rumah_tampil/'.$rm->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-check"></i></div>') ?>
            </td>
            </tr>
            <?php } endforeach; ?>
        </table>
    </section> 
</div>