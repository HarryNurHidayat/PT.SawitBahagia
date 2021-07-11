<?php
include 'Dt.php';
$id = $_GET['id'];
$sawitb = mysqli_query($koneksi, "select * from sawitb where id='$id'");
while ($data = mysqli_fetch_assoc($sawitb)) {
    ?>
    <!doctype html>
    <html lange = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title><?php echo $data['nama'] ?></title>
    </head>
    <body onload="window.print();">
        <div class="contrainer mt-5">
            <p class="fw-bold">Profil </p>
                        <p>Nama : <?php echo $data['nama'] ?></p>
                        <p>No.Telp : <?php echo $data['no.Telp'] ?></p>
                        <p>No.KTP : <?php echo $data['no.KTP'] ?></p>
                        <p>Tahun Masuk : <?php echo $data['tahun_masuk']; ?></p>
                        <p>Jumlah Masa Kerja : <?php echo $data['jumlah_masa_kerja']; ?></p>
            <a href=""class="btn btn-primary btn-sm text-white">Cetak</a>
        </div>
    <?php
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>