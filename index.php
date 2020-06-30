<?php
include('functions.php');

$buku = mysqli_query($db, "SELECT * FROM buku");
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

    <title>Perpustakaan Online</title>
</head>

<body class="bg-light">
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
                    <a class="nav-item nav-link" href="daftar_peminjam.php">Data Peminjam</a>
                    <a class="btn btn-danger" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <h1 align="center">SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h1>
    <hr width="85%">

    <!-- Content -->
    <div class="container">
        <h2>DAFTAR BUKU</h2>
        <div class="row">
            <?php foreach ($buku as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="img/<?= $row["gambar"]; ?>" class="card-img-top" style="width: 21.7rem;">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= $row["judul"]; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $row["tahun"]; ?></h6>
                            <p class="card-text"><?= $row["penulis"]; ?></p>
                            <p class="card-text"><?= $row["penerbit"]; ?></p>
                            <p class="card-text"><?= $row["kategori"]; ?></p>
                            <a href="inputdata.php?judul= <?= $row["judul"]; ?>" class="btn btn-primary">Pinjam Buku</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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