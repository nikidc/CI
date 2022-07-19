<title>Rumah</title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Rumah
        <small>Daftar Seluruh Member</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Daftar Seluruh Member</li>
      </ol>
</section>



    <section class="content">
        <!-- <div class="navbar-form navbar-right">
            <?php echo form_open('rumah/search') ?>
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div> -->

        <table class="table table-hover" id="tableMember">
            <thead>
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Nomor telepon</th>
                    <th>Role</th>
                  <!--   <th colspan="2">AKSI</th> -->
                </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
            <!-- <php  
            $no =1; /* print_r($rumah);die; */
            foreach ($member as $mm):?>
            <tr>
                <td><php echo $no++ ?></td>
                <td><php echo $mm->nama_l; ?></td>
                <td><php echo $mm->username; ?></td>
                <td><php echo $mm->alamat_user; ?></td>
                <td><php echo $mm->no_telp; ?></td>
                <td><php echo $mm->role_l; ?></td>
               
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <php echo anchor('rumah/hapus/'.$mm->id_l,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                <td><php echo anchor('rumah/edit/'.$mm->id_l,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> -->
            <!-- </td>
            </tr>
            <php endforeach; ?> -->
        </table>

    </section>
</div>