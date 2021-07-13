<?php
//koneksi database
include './Dt.php';

//Menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$KTP = $_POST['no.KTP'];
$Telp = $_POST['no.Telp'];
$Tahun = $_POST['tahun_masuk'];
$Masa = $_POST['jumlah_masa_kerja'];


//update data ke database
mysqli_query($koneksi, "update sawitb set nama='$nama', no.KTP='$KTP', no.Telp='$Telp', tahun_masuk='$Tahun', jumlah_masa_kerja='$Masa' where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:Sbahagia.php");