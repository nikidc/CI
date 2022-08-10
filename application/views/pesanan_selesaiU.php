<title> TAMPIL PESANAN SELESAI </title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Pesanan Selesai
        <small>Daftar Pesanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Pesanan Selesai</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>  
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>No HP</th>
                <th>Nama Rumah</th>
                <th>Tanggal Mulai</th>
                <th>Durasi Sewa</th>
                <th>PEMBAYARAN</th>
                <th colspan="2">AKSI</th>
        
            </tr>
             <!-- Query Rumah -->
            <?php
            $no =1;
            // print_r($pesanan);die;
            foreach ($pesanan as $pes):?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pes->nama_l; ?></td>
                <td><?php echo $pes->no_telp; ?></td>
                <td><?php echo $pes->nama; ?></td>
                <td><?php echo $pes->tgl_mulai; ?></td>
                <td><?php echo $pes->durasi; ?></td>
                <td><?php if($pes->foto_bukti !=""){
                            echo "LUNAS"; }?></td>
                <!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$pes->id_pes,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td> -->
                <td><?php echo anchor('rumah/detail_selesai/'.$pes->id_pes,'<div class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
            </td>
            <td><?php if($pes->sewa_selesai == "TRUE"){
                echo anchor('rumah/tambah_ulasan/'.$pes->id_rumah,'<div class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></div>');
                } ?>
            </td>
            </td>
            </tr>
            <?php endforeach; ?>
        </table>

    <!-- Modal -->
    <!-- <div class="modal fade" id="modal<?php echo $pesanan->id_rumah; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"> Tambah Ulasan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div> -->

        <!-- FORM TAMBAH-->
        <!-- <div class="modal-body"> -->
        <!-- <form action="<php echo base_url().'rumah/tambah_rumah1' ?>" method="post"> -->
            <!-- <php echo form_open_multipart('rumah/tambah_ulasan'); ?> -->
        
            <!-- <div class="form-group">
                <label >Ulasan</label>
                <input type="hidden" id ="id_rumah" name="id_rumah" class="form-control" value="<?php echo $pesanan['id']?>">
                <input type="hidden" id="id_user" name="id_user" class="form-control" value="<?php echo $user['id_l']?>">
                <input type="hidden" id="id_pes" name="id_pes" class="form-control" value="<?php echo $pesanan->id_pes?>">
                <textarea id = "ulasan" name ="ulasan" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label >Upload Foto</label>
                <input type="file" id ="foto_ulasan" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button> -->
                <!-- </form> -->
            <!-- <php echo form_close(); ?> -->
        <!-- </div>
        <div class="modal-footer">
            
        </div>
        </div> -->
                <!-- </div> -->
    </section> 
</div>
