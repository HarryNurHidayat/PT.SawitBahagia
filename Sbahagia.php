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
                    <!-- Kita membuat form dengan method post untuk memanggil file -->
                    <form method = "POST" action ="form.php" name ="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lengkapi Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Input  -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="no.KTP" class="form-label">No.KTP</label>
                                <input type="text" class="form-control" id="no.KTP" placeholder="Masukkan Nomor KTP" name="no.KTP" required>
                            </div>

                            <div class="mb-3">
                                <label for="no.Telp" class="form-label">No.Telp</label>
                                <input type="text" class="form-control" id="no.Telp" placeholder="Masukkan Nomor Telp" name="no.Telp" required>
                            </div>

                            <div class="mb-3">
                                <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                                <input type="text" class="form-control" id="tahun_masuk" placeholder="Masukkan Tahun Masuk" name="tahun_masuk" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_masa_kerja" class="form-label">Masa Kerja</label>
                                <textarea class="form-control" id="jumlah_masa_kerja" placeholder="Masa Kerja" name="jumlah_masa_kerja" required></textarea>
                            </div>
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

    <!--Style tampilan-->
    <!--Akhir Tampilan style-->

    <!--tampilan tabel-->
    <div class = "container data-sawitb mt-3">
        <table class =" table table-striped" id ="tabelSawitb">
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
                include 'Dt.php';
                $no = 1;
                $sawitb = mysqli_query($koneksi, "select * from sawitb");
                while($data = mysqli_fetch_array($sawitb)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['no.KTP']; ?></td>
                        <td><?php echo $data['no.Telp']; ?></td>
                        <td><?php echo $data['tahun_masuk']; ?></td>
                        <td><?php echo $data['jumlah_masa_kerja']; ?></td>
                        <td>
                            <a href ="detail.php?id=<?php echo $data['id']; ?>" class= "btn btn-success btn-sm text-white">Detail</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                            <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">Cetak</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!--Akhir tampilan tabel-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelSawitb').DataTable();
        } );
    </script>

  </body>
</html>