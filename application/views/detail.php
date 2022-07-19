<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA RUMAH</strong></h4>
        <a href="<?php echo base_url('rumah/pesan/'.$detail->id) ?>" class="btn btn-sm btn-primary mt-3">Pesan Sekarang</a>
        <table class="table">
            <!-- JOIN PEMILIK -->
        <?php 
                $id = $detail->user_id;
                $queryPemilik = "SELECT login.*
                                FROM `tb_produk` JOIN `login` 
                                  ON `tb_produk`.`user_id` = `login`.`id_l`
                               WHERE `tb_produk`.`user_id` = '$id'";                              

                                $pemilik = $this->db->query($queryPemilik)->row_array();
                                // print_r($detail);
                                // die;
                    ?> 
            <tr>
                <th>Rating</th>
                <div class="star">
                    <!-- <input class="star star-5" id="star-5" type="radio" name="star" value="5" readonly
                        <?php echo $ulasan[0]['rating'] == '5' ? ' checked' : '';?>>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star" value="4"
                        <?php echo $ulasan[0]['rating'] == '4' ? ' checked' : '';?> readonly>>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star" value="3"
                        <?php echo $ulasan[0]['rating'] == '3' ? ' checked' : '';?> readonly>>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star" value="2"
                        <?php echo $ulasan[0]['rating'] == '2' ? ' checked' : '';?> readonly>
                    <label class="star star-2" for="star-2" readonly></label>
                    <input class="star star-1" id="star-1" type="radio" name="star" value="1"
                        <?php echo $ulasan[0]['rating'] == '1' ? ' checked' : '';?> readonly>>
                    <label class="star star-1" for="star-1"></label> -->
                    <td>
                        <?php 
                        for($i =1;$i<=$avg;$i++){ ?>
                            <i class ="fa fa-star checked" ></i>
                        <?php }; ?>
                       <!--  <?php for($j =$ulasan[0]['rating'] ; $j <5 ; $j++){ ?>
                            <i class ="fa fa-star"></i>
                        <?php }; ?> -->
                    </td>
                </div>
                <!-- <td><?php echo $detail->nama ?></td> -->

            </tr>
            <tr>
                <th>Nama Produk</th>
                <td><?php echo $detail->nama ?></td>

            </tr>

            <tr>
                <th>Biaya</th>
                <td><?php $angka = $detail->biaya;
                            $hasil_format_angka = number_format($angka);
                            echo $hasil_format_angka; ?></td>

            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat ?></td>

            </tr>

            <tr>
                <th>Luas</th>
                <td><?php echo $detail->luas ?></td>

            </tr>

            <tr>
                <th>Fasilitas</th>
                <td><?php

                $km = $detail->kamar_mandi;
                            $arrFasi=array($km);
                            if($km == "TRUE"){
                                echo "Kamar Mandi";
                            }else{
                                echo "";
                            } ?><br>
                    <?php $kasur = $detail->kasur;
                            if($kasur == "TRUE"){
                                echo "Kasur";
                            }else{
                                echo "";
                            } ?><br>
                    <?php $lemari = $detail->lemari; 
                            if($lemari == "TRUE"){
                                echo "Lemari";
                            }else{
                                echo "";
                            }?><br>
                    <?php $meja = $detail->meja;
                            if($meja =="TRUE"){
                                echo "Meja";
                            }else{
                                echo "";
                            }?><br>
                    <?php $ac = $detail->ac; 
                            if($ac == "TRUE"){
                                echo "AC";
                            }else{
                                echo "";
                            }?>
                </td>
            </tr>
            
            <tr>
                <th>Pemilik</th>
                <td><?php echo $pemilik['nama_l'] ?></td>
                <td><?php echo $pemilik['no_telp'] ?></td>

            </tr>

            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>foto/<?php echo $detail->foto1; ?>" 
                    width = "150" height="110">
                </td>
                <td>
                    <img src="<?php echo base_url(); ?>foto/<?php echo $detail->foto2; ?>" 
                    width = "150" height="110">
                </td>
                <td>
                    <img src="<?php echo base_url(); ?>foto/<?php echo $detail->foto3; ?>" 
                    width = "150" height="110">
                </td>
                <td></td>
            </tr>
            <tr>
                <th>Ulasan</th>
                <td><?php 
                // print_r($ulasan);die;
                if(count($ulasan) != ""){
                    echo $ulasan[0]['nama_l'];
                }else{ echo "BELUM ADA YANG MENGULAS";
                }?></td>
                <td><?php if(count($ulasan) != ""){
                    for($i = 1;$i<=$ulasan[0]['rating'];$i++){ ?>
                    <i class ="fa fa-star checked" ></i>
               <?php  }; ?>
                <?php }else{ echo "BELUM ADA RATING";
                }?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php
                    if(count($ulasan) != ""){
                        echo $ulasan[0]['ulasan'];
                    }else{ 
                        echo "BELUM ADA ULASAN";
                }?></td>
            </tr>
            <tr>
                <!-- <th>Ulasan</th> -->
                <td><a href="<?php echo base_url('rumah/ulasan_lengkap/'.$detail->id) ?>">Lihat lebih banyak</a>
                </td>
            </tr>
        </table>
        <hr>
    </section>
</div>