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

    <!--Tampilan-->
    <div class="container mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData"> 
            Tambah Data
            </button>
            <!-- Modal tambah data-->
            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <!-- Kita membuat form dengan method post untuk memanggil file store.php-->
                    <form method = "POST" action ="store1.php" name ="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lengkapi Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" required>
                            </div>
                            <!-- Input NIM -->
                            <div class="mb-3">
                                <label for="NIM" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Mahasiswa" name="nim" required>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <!--kita akan coba menggunakan textarea sebagai input alamat-->
                                <textarea class="form-control" id="Alamat" placeholder="Masukkan Alamat Mahasiswa" name="alamat" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">                        
                        <!-- Button close modal-->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- Button tambah data pastikan berada di dalam <form></form> -->
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Tampilan-->

    <!--tampilan tabel-->
    <div class = "container data-mahasiswa mt-3">
        <table class =" table table-striped" id ="tabelMahasiswa">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No.KTP</th>
                    <th scope="col">No.Telp</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Jumlah Masa Kerja</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include koneksi database
                include 'config.php';
                $no = 1;
                $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
                while($data = mysqli_fetch_array($mahasiswa)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td>
                            <a href ="detail.php?id=<?php echo $data['id']; ?>" class= "btn btn-success btn-sm text-white">Detail</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                            <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">Cetak</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data Mahasiswa Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!--Akhir tampilan tabel-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>