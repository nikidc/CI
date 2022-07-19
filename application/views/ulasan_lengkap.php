<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL ULASAN <?php echo $ulasan[0]['nama'];?></strong></h4>
        
        <div class="row">
            <h4 class="justify-content-end"><strong>Ulasan</strong></h4>
            <?php foreach ($ulasan as $ul) : ?>
            <div class="card col-lg-12">
                <img class="card-img-top" width="50" src="
                    <?php if($ul['foto_ulasan'] == NULL ||$ul['foto_ulasan'] == "" ){
                            echo base_url().'assets/foto_ulasan/default_ulasan.jpg';
                        }else{
                            echo base_url().'assets/foto_ulasan/'.$ul['foto_ulasan'];
                            }?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $ul['nama_l'];?></h5>
                    <p class="card-text"><?php 
                            for($i = 1;$i<=$ul['rating'];$i++){ ?>
                            <i class ="fa fa-star checked" ></i>
                        <?php }; ?></p>
                    <p class="card-text"><?php echo $ul['ulasan'];?></p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <hr>
            <?php endforeach; ?>
        </div>
    </section>
</div>