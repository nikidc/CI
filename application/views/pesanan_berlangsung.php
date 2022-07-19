<title> TAMPIL PESANAN </title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Pesanan Berlangsung
        <small>Jika sudah berakhir dimohon konfirmasi selesai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Daftar Pesanan Berlangsung</li>
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
                <th>Nama Pemesan</th>
                <th>No HP</th>
                <th>Nama Rumah</th>
                <th>Tanggal Mulai</th>
                <th>Durasi Sewa</th>
                <th>Foto Bukti</th>
                <th>STATUS</th>
                <th colspan="2">AKSI</th>
        
            </tr>
             <!-- Query Rumah -->
            <?php 
            $no =1;
            foreach ($pesanan as $pes):
                if($pes->sewa_selesai == "FALSE"){?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pes->nama_l; ?></td>
                <td><?php echo $pes->no_telp; ?></td>
                <td><?php echo $pes->nama; ?></td>
                <td><?php echo $pes->tgl_mulai; ?></td>
                <td><?php echo $pes->durasi; ?></td>
                <td>
                        <img style="width:100px;height:100px;" src="<?php echo base_url('assets/bukti_bayar/').$pes->foto_bukti ?>" class="img-thumbnail">
                    </td>
                <td><?php echo $pes->status_p; ?></td>
                <!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$pes->id_pes,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td> -->
                <td><?php echo anchor('rumah/konfirmasi_selesai/'.$pes->id_pes,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
            </td>
            </tr>
            <?php } endforeach; ?>
        </table>
    </section> 
</div>
