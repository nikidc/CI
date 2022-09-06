<title>Edit Rumah</title>
<div class="content-wrapper">
    <section class="content-header">
    <h4>
        Edit Rumah
      </h4>
      </section>
    <div class="content">
        <?php foreach($rumah1 as $rm) { ?>

        <!-- <form action="<?php echo base_url().'rumah/update'; ?>"
            method="post"> -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $rm->id?>">
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $rm->nama?>">
                <?php echo form_error('nama','<small class="text-danger" pl-3>','</small>'); ?>
        </div>
            
        
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Biaya</label>
        <div class="col-sm-8">
            <input type="number" id="biaya"name="biaya" class="form-control" value="<?php echo $rm->biaya?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Alamat</label>
        <div class="col-sm-8">
            <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $rm->alamat?>">
        </div>
    </div>

    <!-- <div class="form-group row">
        <label class="col-sm-2">Luas</label>
        <div class="col-sm-8">
            <input type="text" id="luas" name="luas" class="form-control" value="<?php echo $rm->luas?>">
        </div>
    </div> -->

    <div class="form-group row">
                <label class="col-sm-2" for="luas">Luas (m<sup>2</sup>)</label>
                <div class="col-sm-8">
                
                <select name="luas" id="luas" class="form-control">
                    <option value="6" <?php echo $rm->luas == '6' ? ' selected' : '';?>>2 x 3 m<sup>2</sup></option>
                    <option value="9" <?php echo $rm->luas == '9' ? ' selected' : '';?>>3 x 3 m<sup>2</sup></option>
                    <option value="12" <?php echo $rm->luas == '12' ? ' selected' : '';?>>3 x 4 m<sup>2</sup></option>
                    <option value="16" <?php echo $rm->luas == '16' ? ' selected' : '';?>>4 x 4 m<sup>2</sup></option>
                    <option value="20" <?php echo $rm->luas == '20' ? ' selected' : '';?>>4 x 5 m<sup>2</sup></option>
                </select>
                </div>
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
            </div>

    <div class="form-group row">
        <label class="col-sm-2">Fasilitas</label>
        <div class="col-sm-8">
            <input type="checkbox" id="kamar_mandi" name="kamar_mandi" value="TRUE" <?php echo $rm->kamar_mandi == 'TRUE' ? ' checked' : '';?>> Kamar Mandi
            <input type="checkbox" id="kasur" name="kasur" value="TRUE" <?php echo $rm->kasur == 'TRUE' ? ' checked' : '';?>> Kasur
            <input type="checkbox" id="lemari" name="lemari" value="TRUE" <?php echo $rm->lemari == 'TRUE' ? ' checked' : '';?>> Lemari
            <input type="checkbox" id="meja" name="meja" value="TRUE" <?php echo $rm->meja == 'TRUE' ? ' checked' : '';?>> Meja
            <input type="checkbox" id="ac" name="ac" value="TRUE" <?php echo $rm->ac == 'TRUE' ? ' checked' : '';?>> AC

        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2">Upload Foto</label>
        <div class="col-sm-8">
            <div class="col-sm-4">
            <button class="btn btn-primary btn-ubah1">Ganti</button>
            <button class="btn btn-danger btn-batal1" style="display:none">Batal</button>
                <!-- <input type="button" id="toggler" value="Toggler" onClick="action();" />
                <input type="file" id="togglee" value="Togglee" />
                <input type="text" id="togglee1" value="Togglee1" /> -->
                <img src="<?php echo base_url('foto/').$rm->foto1 ?>" id="ubah1" class=""
                width = "150" height="110">
                <input type="file" id ="foto1" class="form-control" accept="image/jpeg, image/png, image/jpg" style="display:none">                
             </div>
           
             <div class="col-sm-4">
             <button class="btn btn-primary btn-ubah2">Ganti</button>
             <button class="btn btn-danger btn-batal2" style="display:none">Batal</button>
                <img src="<?php echo base_url('foto/').$rm->foto2 ?>" id="ubah2" class=""
                width = "150" height="110">
                <input type="file" id ="foto2" class="form-control" accept="image/jpeg, image/png, image/jpg" style="display:none">                
             </div>
             <div class="col-sm-4">
             <button class="btn btn-primary btn-ubah3">Ganti</button>
             <button class="btn btn-danger btn-batal3" style="display:none">Batal</button>
                <img src="<?php echo base_url('foto/').$rm->foto3 ?>" id="ubah3" class=""
                    width = "150" height="110">
                <input type="file" id ="foto3" class="form-control" accept="image/jpeg, image/png, image/jpg" style="display:none">                
             </div>
        </div>
        </div>

        <div class="form-group row">
            <label for="titik_lokasi" class="col-sm-2 col-form-label">Titik lokasi</label>
            <small>Silahkan pilih titik kembali</small>
                <div class="col-sm-10">
                <div id="map1" style="width: 600px; height: 400px;"></div>
            </div>
        </div>
        <div class="form-group">
            
                <div class="col-sm-4">
                  <input type="hidden" class="form-control" id="latitude" name="latitude" value="<?php echo $rm->latitude; ?>">
                  <?php echo form_error('latitude','<small class="text-danger">','</small>'); ?>
                </div>
        </div>
        <div class="form-group">
            
                <div class="col-sm-4">
                  <input type="hidden" class="form-control" id="longitude" name="longitude" value="<?php echo $rm->longitude; ?>">
                  <?php echo form_error('longitude','<small class="text-danger">','</small>'); ?>
                </div>
        </div>

    <!-- <div class="form-group">
        <label >Upload Foto</label>
        <input type="file" id ="foto2" class="form-control" accept="image/jpeg, image/png, image/jpg">
        </div>      

    <div class="form-group">
        <label >Upload Foto</label>
        <input type="file" id ="foto3" class="form-control" accept="image/jpeg, image/png, image/jpg">
        </div> -->
    <div class="form-group row">
        <div class="col-sm-6">
        <!-- <button type="button" class="btn btn-danger" >Reset</button>
        <?php echo anchor('rumah/rumah','<div class="btn btn-primary btn-sm">Kembali</div>') ?> -->
        <button class="btn btn-primary" onclick="updaterumah()">Simpan</button>
        </div>
    </div>

       <!--  </form> -->
        <?php } ?>
    </div>
</div>