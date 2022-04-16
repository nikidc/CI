<div class="content-wrapper">
    <section class="content">
        <?php foreach($rumah as $rm) { ?>

        <form action="<?php echo base_url().'rumah/update'; ?>"
        method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $rm->id?>">
        <input type="text" name="nama" class="form-control" value="<?php echo $rm->nama?>">
    </div>

    <div class="form-group">
        <label>Biaya</label>
        <input type="number" name="biaya" class="form-control" value="<?php echo $rm->biaya?>">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $rm->alamat?>">
    </div>

    <div class="form-group">
        <label>Luas</label>
        <input type="text" name="luas" class="form-control" value="<?php echo $rm->luas?>">
    </div>

    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>


        </form>
        <?php } ?>
    </section>
</div>