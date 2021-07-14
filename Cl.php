<?php
//koneksi
include "Dt.php";
//panggil database
$pass= md5 ($_POST['password']);
$username = mysqli_escape_string($koneksi,$_POST['username']);
$password=mysqli_escape_string($koneksi,$pass);
$level=mysqli_escape_string($koneksi,$_POST['level']);



//cek isi
$cek_user =mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and level='$level'");
$user_valid =mysqli_fetch_array($cek_user);

if($user_valid){

    if($password == $user_valid['password']){
        //data sesuai
        session_start();
        $_SESSION['username']= $user_valid['username'];
        $_SESSION['nama_lengkap']= $user_valid['nama_lengkap'];
        $_SESSION['level']= $user_valid['level'];

        if($level == "Pegawai"){
            header('location:Bahagia.php');
        }elseif($level == "Admin"){
            header('location:Sbahagia.php');
        }
    }else{
        echo "<script>alert('Maaf Login gagal, Data tidak terdaftar!');
        document.location='Login.php'</script>";
    }

}else{
    echo "<script>alert('Maaf Login gagal, Data tidak terdaftar!');
    document.location='Login.php'</script>";
}