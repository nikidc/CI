<!DOCTYPE html>
<title>Kuitansi</title>
<html><head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="invoice.css"> -->
</head><body style="padding: 3rem">
    
            <img src="assets/logo/logo.jpg" 
                    style="position: absolute;"
                    width = "60" height="60">
    <table style="width : 100%">
        <tr>
            <td align="center"> 
                <span style="line-height: 1,6 ; font-weight:bold;">
                   <h2> KOSAKITA </h2>
                </span>
             </td>
        </tr>
    </table>
    <hr>
    <!-- </table><br><br><br> -->
    <h3 style="text-align: center">KUITANSI PEMBAYARAN</h3>
    
    <div>
    <h4>Telah dilunaskan oleh</h4>
            <?php echo $pesanan['nama_l'] ?><br />
            <?php echo $pesanan['no_telp'] ?><br />
    </div>
    <div style="margin-top: 2rem">
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
            <td class="text-end"><?php echo $pesanan['durasi']; ?> bulan</td>
            <td class="text-end"><?php echo $pesanan['tgl_mulai']; ?></td>
            <td ><?php echo number_format($pesanan['biaya']); ?></td>
            <td ><?php echo number_format($pesanan['biaya'] * $pesanan['durasi']); ?></td>
            
        </tr>
        
        <!-- <php endforeach; ?> -->
    </table>
   <!--  <table>
        <tr><th>ssa</th>
        </tr>
    <tr>
            <td>asd</td>
            <td colspan="2">dsa</td>
        </tr> -->
        <hr>
    </table><br/><br/>
    <div>
        Catatan : <br>
        1. Kuitansi ini merupakan bukti <b><?php echo $pesanan['nama_l']; ?></b> telah membayar <u>LUNAS</u>
        <br> pesanan dengan ID : <?php echo $pesanan['id_pes']; ?> <br />
        2. Kuitansi diterbitkan oleh KOSAKITA <br/>
        3. Telah dilakukan pembayaran ke nomor rekening 712345987675 a.n. Kosakita
    </div>
</body></html>