<?php
include('functions.php');
$nama = mysqli_query($db, "SELECT * FROM daftar_peminjam");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/buku.ico">

    <title>Data Peminjam Buku</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="novel.php">Novel</a>
                            <a class="dropdown-item" href="pelajaran.php">Pelajaran</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link active" href="#">Data Peminjam <span class="sr-only">(current)</span></a>
                    <a class="btn btn-danger" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
    <h2 align="center">DAFTAR PEMINJAM</h2>

    <!-- Content -->
    <div class="container">
        <div class="row mt-5">
            <?php $i = 1; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($nama as $row) : ?>
                    <tbody>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["email"]; ?></td>
                            <td><?= $row["judul"]; ?></td>
                            <td><?= $row["tgl_pinjam"]; ?></td>
                            <td><?= $row["tgl_kembali"]; ?></td>
                            <td><a href="kembali.php?id_peminjam=<?= $row["id_peminjam"]; ?>" onclick="return confirm('Anda yakin ingin mengembalikan buku ini ?');" class="btn btn-danger">Kembalikan Buku</a></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- End of Content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>