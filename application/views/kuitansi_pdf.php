<!DOCTYPE html>
<html><head><!-- <link rel="stylesheet" href="invoice.css"> -->
</head><body style="padding: 3rem">
    <h2 style="text-align: center">KUITANSI PEMBAYARAN</h2>
    <h3>Kosakita</h3>
    <div>
    <h3>Telah dilunaskan oleh</h3>
            <?php echo $pesanan['nama_l'] ?><br />
            <?php echo $pesanan['no_telp'] ?><br />
    </div>
    <div style="margin-top: 3rem">
        Kuitansi ID Pesanan: <?php echo $pesanan['id_pes']; ?> <br />
        Waktu Pesan      : <?php echo $pesanan['waktu_pesan']; ?> 
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Rumah</th>
                <th>Alamat</th>
                <th>Durasi</th>
                <th>Tanggal Mulai</th>
                <th>Biaya</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <!-- <php foreach($pesanan as $pes) : ?> -->
        <tr>
            <td><?php echo $pesanan['id_rumah']; ?></td>
            <td><?php echo $pesanan['nama']; ?></td>
            <td class="text-end"><?php echo $pesanan['alamat']; ?></td>
            <td class="text-end"><?php echo $pesanan['durasi']; ?></td>
            <td class="text-end"><?php echo $pesanan['tgl_mulai']; ?></td>
            <td ><?php echo $pesanan['biaya']; ?></td>
            <td ><?php echo $pesanan['biaya'] * $pesanan['durasi']; ?></td>
        </tr>
        <!-- <php endforeach; ?> -->
    </table>
</body></html>