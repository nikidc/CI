<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA RUMAH</strong></h4>
        <table class="table">
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
                <td>
                    <img src="<?php echo base_url(); ?>foto/<?php echo $detail->foto; ?>" 
                    widht = "90" height="110">
                </td>
                <td></td>

            </tr>

        </table>
    </section>
</div>