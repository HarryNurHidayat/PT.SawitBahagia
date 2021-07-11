<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PT Sawit Bahagia</title>
  </head>
  <body>
    <!-- Open Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow ">
        <div class="container">
            <a class="navbar-brand" href="#">Sawit <B>Bahagia</B></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">File</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Akun</a>
                </li>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <?php
    //Memanggil file Dt.php
    include 'Dt.php';
    //Menangkap id yang dikirim melalui button detail
    $id = $_GET['id'];
    //Melakukan query untuk mendapatkan data mahasiswa berdasarkan $id
    $sawitb = mysqli_query($koneksi, "select * from sawitb where id='$id'");

    while($data = mysqli_fetch_assoc($sawitb)){
        ?>
        <div class="container mt-5">
            <p><a href="Sbahagia.php">Home</a>/Detail /<?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil</p>
                </div>
                <div class="card-body fw-bold">
                    <!-- Kita membuat form dengan memanggil file store.php-->
                    <form method = "POST" action ="UP.php">
                        <!-- Kita membuat input disembunyikan (hidden) untuk menyimpan id mahasiswa -->
                        <div class="mb-3">
                            <input type="hidden" class="form-control" nama="id" values="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" values="<?php echo $data['nama']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="no.KTP" class="form-label">No.KTP</label>
                            <input type="text" class="form-control" id="no.KTP" placeholder="Masukkan Nomor KTP" name="no.KTP" values="<?php echo $data['no.KTP']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="no.Telp" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="no.Telp" placeholder="Masukkan Nomor Telp" name="no.Telp" values="<?php echo $data['no.Telp']; ?>" >
                        </div>    
                        <button types="submit" class="btn btn-primary" values="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>