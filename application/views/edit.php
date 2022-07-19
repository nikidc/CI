
<div class="content-wrapper row">
    <h4>
        Edit Rumah
      </h4>
    <section class="content">
        <?php foreach($rumah as $rm) { ?>

        <form action="<?php echo base_url().'rumah/update'; ?>"
        method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
            <input type="hidden" name="id" class="form-control" value="<?php echo $rm->id?>">
            <input type="text" name="nama" class="form-control" value="<?php echo $rm->nama?>">
            <?php echo form_error('nama','<small class="text-danger" pl-3>','</small>'); ?>
        </div>
        
        
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Biaya</label>
        <div class="col-sm-8">
            <input type="number" name="biaya" class="form-control" value="<?php echo $rm->biaya?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Alamat</label>
        <div class="col-sm-8">
            <input type="text" name="alamat" class="form-control" value="<?php echo $rm->alamat?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Luas</label>
        <div class="col-sm-8">
            <input type="text" name="luas" class="form-control" value="<?php echo $rm->luas?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2">Fasilitas</label>
        <div class="col-sm-8">
            <input type="checkbox" name="kamar_mandi" value="TRUE" <?php echo $rm->kamar_mandi == 'TRUE' ? ' checked' : '';?>> Kamar Mandi
            <input type="checkbox" name="kasur" value="TRUE" <?php echo $rm->kasur == 'TRUE' ? ' checked' : '';?>> Kasur
            <input type="checkbox" name="lemari" value="TRUE" <?php echo $rm->lemari == 'TRUE' ? ' checked' : '';?>> Lemari
            <input type="checkbox" name="meja" value="TRUE" <?php echo $rm->meja == 'TRUE' ? ' checked' : '';?>> Meja
            <input type="checkbox" name="ac" value="TRUE" <?php echo $rm->ac == 'TRUE' ? ' checked' : '';?>> AC

        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2">Upload Foto</label>
        <div class="col-sm-8">
            <div class="col-sm-4">
                <img src="<?php echo base_url('foto/').$rm->foto1 ?>" class=""
                width = "150" height="110">
                <input type="file" id ="foto1" class="form-control" accept="image/jpeg, image/png, image/jpg">                
             </div>
           
             <div class="col-sm-4">
                <img src="<?php echo base_url('foto/').$rm->foto2 ?>" class=""
                width = "150" height="110">
                <input type="file" id ="foto1" class="form-control" accept="image/jpeg, image/png, image/jpg">                
             </div>
             <div class="col-sm-4">
                <img src="<?php echo base_url('foto/').$rm->foto3 ?>" class=""
                    width = "150" height="110">
                <input type="file" id ="foto1" class="form-control" accept="image/jpeg, image/png, image/jpg">                
             </div>
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
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

        </form>
        <?php } ?>
    </section>
</div>