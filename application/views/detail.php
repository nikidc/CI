<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA RUMAH</strong></h4>
        <a href="<?php echo base_url('rumah/pesan/'.$detail->id) ?>" class="btn btn-sm btn-primary mt-3">Pesan Sekarang</a>
        <table class="table">
        <?php 
                $id = $detail->user_id;
                $queryPemilik = "SELECT login.*
                                FROM `tb_produk` JOIN `login` 
                                  ON `tb_produk`.`user_id` = `login`.`id_l`
                               WHERE `tb_produk`.`user_id` = '$id'";
                            /* ORDER BY `user_access_menu`.`menu_id` ASC */
                                

                                $pemilik = $this->db->query($queryPemilik)->row_array();
                                /* print_r($detail);
                                die; */
                    ?> 
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

        </table>
    </section>
</div>