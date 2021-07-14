<?php
//include koneksi database
include './Dt.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$KTP = $_POST['no.KTP'];
$Telp = $_POST['no.Telp'];
$Tahun = $_POST['tahun_masuk'];
$Masa = $_POST['jumlah_masa_kerja'];

// Menginput data ke database
mysqli_query($koneksi, "insert into sawitb values('','$nama','$KTP','$Telp','$Tahun','$Masa')");

// Mengembalikan ke halaman awal
include("location:Sbahagia.php");