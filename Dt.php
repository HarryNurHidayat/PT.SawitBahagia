<?php
// koneksi ke database ("" merupakan password phpmyadmin)

$koneksi = mysqli_connect("localhost", "root", "", "pt.sawitbahagia");

// cek koneksi database
//apabila error
if (mysqli_connect_errno()){
    echo "koneksi database gagal: ". mysqli_connect_error();
}