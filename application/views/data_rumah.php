<title>Rumah</title>
<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Rumah
        <small>Daftar Seluruh Rumah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>rumah/index">Home</a></li>
        <li class="active">Daftar Seluruh Rumah</li>
      </ol>
</section>



    <section class="content">
        <table class="table" id="tableRumah">
            <thead>
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama</th>
                    <th>Biaya</th>
                    <th>Alamat</th>
                    <th>Luas (m2)</th>
                    <th>Aksi</th>
                    <!-- <th colspan="2">AKSI</th> -->
            
                </tr>
            </thead>
            <tbody id="show_data_r">

            </tbody>
            <!-- <php  
            $no =1; /* print_r($rumah);die; */
            foreach ($rumah as $rm):?>
            <tr>
                <td><php echo $no++ ?></td>
                <td><php echo $rm->nama; ?></td>
                <td><php $angka = $rm->biaya;
                            $hasil_format_angka = number_format($angka,2,',','.');
                            echo $hasil_format_angka; ?></td>
                <td><php echo $rm->alamat; ?></td>
                <td><php echo $rm->luas; ?></td>
                <td><php $km=$rm->kamar_mandi;
                          $kas=$rm->kasur;
                          $lem=$rm->lemari;
                          $meja=$rm->meja;
                          $ac=$rm->ac;
                            if($km=="TRUE"){
                                echo "Kamar Mandi, ";
                            }else{
                                echo "";
                            }
                            if($kas=="TRUE"){
                                echo "Kasur, ";
                            }else{
                                echo "";
                            }
                            if($lem=="TRUE"){
                                echo "Lemari, ";
                            }else{
                                echo "";
                            }
                            if($meja=="TRUE"){
                                echo "Meja, ";
                            }else{
                                echo "";
                            }
                            if($ac=="TRUE"){
                                echo "AC";
                            }else{
                                echo "";
                            } ?></td>
                <td><php echo anchor('rumah/detail/'.$rm->id,
                    '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <php echo anchor('rumah/hapus/'.$rm->id,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                <td><php echo anchor('rumah/edit/'.$rm->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
            </td>
            </tr>
            <php endforeach; ?> -->
        </table>

    </section>
</div>