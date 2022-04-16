<!-- main content -->
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Rumah
        <small>Daftar Rumah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"> Home</a></li>
        <li class="active">Daftar Rumah</li>
      </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Rumah</button>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Biaya</th>
                <th>Alamat</th>
                <th>Luas (m2)</th>
                <th colspan="2">AKSI</th>
        
            </tr>
            <?php 

            $no =1;
            foreach ($rumah as $rm):?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rm->nama ?></td>
                <td><?php $angka = $rm->biaya;
                            $hasil_format_angka = number_format($angka,2,',','.');
                            echo $hasil_format_angka; ?></td>
                <td><?php echo $rm->alamat ?></td>
                <td><?php echo $rm->luas ?></td>
                <td><?php echo anchor('rumah/detail/'.$rm->id,
                    '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?') ">
                    <?php echo anchor('rumah/hapus/'.$rm->id,
                     '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                <td><?php echo anchor('rumah/edit/'.$rm->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
            </td>
            </tr>
            
            <?php endforeach; ?>
        </table>

    </section>
    <!-- MODAL -->
  

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Tambah Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- FORM TAMBAH-->
        <div class="modal-body">
            <!-- <php echo form_open_multipart('rumah/tambah_rumah'); ?> -->
        
            <div class="form-group">
                <label >Nama</label>
                <input type="text" id = "nama_rumah" name ="nama" class="form-control">
            </div>

            <div class="form-group">
                <label >Biaya</label>
                <input type="number" id="inputAngka" name ="biaya" class="form-control">
                <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                <script type="text/javascript">
                    $('#inputAngka').on('keyup',function(){
                        var angka = $(this).val();
                
                        var hasilAngka = formatRibuan(angka);
                
                        $(this).val(hasilAngka);
                    });
                
                    function formatRibuan(angka){
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split           = number_string.split(','),
                        sisa            = split[0].length % 3,
                        angka_hasil     = split[0].substr(0, sisa),
                        ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
                
                
                
                        // tambahkan titik jika yang di input sudah menjadi angka ribuan
                        if(ribuan){
                            separator = sisa ? '.' : '';
                            angka_hasil += separator + ribuan.join('.');
                        }
                
                        angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
                        return angka_hasil;
                    }
                </script>-->
            </div>

            <div class="form-group">
                <label >alamat</label>
                <input type="text" id="alamat_rumah" name ="alamat" class="form-control">
            </div>

            <div class="form-group">
                <label >Luas (m2)</label>
                <input type="text" id="luas_rumah" name ="luas" class="form-control">
            </div>

            <div class="form-group">
                <label >Upload Foto</label>
                <input type="file" id ="foto1" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div>

            <div class="form-group">
                <label >Upload Foto</label>
                <input type="file" id ="foto2" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div>

            <div class="form-group">
                <label >Upload Foto</label>
                <input type="file" id ="foto3" class="form-control" accept="image/jpeg, image/png, image/jpg">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary" onclick="tambahrumah();">Simpan</button>

            <!-- <php echo form_close(); ?> -->
        </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
    </div>
</div>
