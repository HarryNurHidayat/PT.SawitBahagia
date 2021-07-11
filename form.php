<?php
//include koneksi database
include './Dt.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$KTP = $_POST['no.KTP'];
$Telp = $_POST['no.Telp'];

// Menginput data ke database
mysqli_query($koneksi, "insert into sawitb values('','$nama','$KTP','$Telp')");

// Mengembalikan ke halaman awal
header("location:Sbahagia.php");