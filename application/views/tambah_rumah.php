<title>Tambah Rumah</title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Rumah
        <small>Isi form untuk menambah rumah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rumah</a></li>
        <li class="active">Tambah Rumah</li>
      </ol>
    </section>
    <section class="content">
    <div class="form-group">
                <label >Nama</label>
                <input type="text" id = "nama_rumah" name ="nama_rumah" class="form-control">
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
                <label >Alamat</label>
                <input type="text" id="alamat_rumah" name ="alamat_rumah" class="form-control">
            </div>
                <!-- <input type="text" id="luas_rumah" name ="luas_rumah" class="form-control"> -->
            <div class="form-group">
                <label for="luas">Luas (m<sup>2</sup>)</label>
                <select name="luas_rumah" id="luas_rumah" class="form-control">
                    <option value="6">2 x 3 m<sup>2</sup></option>
                    <option value="9">3 x 3 m<sup>2</sup></option>
                    <option value="12">3 x 4 m<sup>2</sup></option>
                    <option value="16">4 x 4 m<sup>2</sup></option>
                    <option value="20">4 x 5 m<sup>2</sup></option>
                </select>
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
            </div>
           <div class="form-group">
                <div class="input-group-prepend">
                    <div class="input-group-text ">
                        <label for="fasilitas">Fasilitas tersedia</label>
                        <br><input type="checkbox" id="kamar_mandi" name="kamar_mandi" value=""> Kamar Mandi
                        <br><input type="checkbox" id="kasur" name="kasur" value=""> Kasur
                        <br><input type="checkbox" id="lemari" name="lemari" value=""> Lemari
                        <br><input type="checkbox" id="meja" name="meja" value=""> Meja
                        <br><input type="checkbox" id="ac" name="ac" value=""> AC
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="titik_lokasi">Titik lokasi</label>
                    <div>
                      <div id="map1" style="width: 80%; height: 400px;"></div>
                    </div>
                  </div>
                
            </div>
            <div class="form-group">
                <!-- <label >Latitude</label> -->
                <input type="hidden" id="latitude" name ="latitude" class="form-control">
            </div>
            <div class="form-group">
                <!-- <label >Longitude</label> -->
                <input type="hidden" id="longitude" name ="longitude" class="form-control">
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
            <button class="btn btn-primary" onclick="tambahrumah();">Simpan</button>
                <!-- </form> -->
            <!-- <php echo form_close(); ?> -->
     
    </section>
</div>