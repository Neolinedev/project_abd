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

    <title>Perpustakaan Online</title>
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
                    <a class="nav-item nav-link" href="#">Home</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="novel.php">Novel</a>
                            <a class="dropdown-item" href="pelajaran.php">Pelajaran</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link" href="data_pinjam.php">Data Peminjam</a>
                    <a class="nav-item nav-link" href="#">Akun Anda</a>
                    <button class="btn btn-danger">Keluar</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <h1 align="center">SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h1>
    <hr width="85%">

    <!-- Content -->
    <div class="container">
        <div class="row">
            <?php foreach ($buku as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="img/<?= $row["gambar"]; ?>" class="card-img-top" style="width: 21.7rem;">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= $row["judul"]; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $row["tahun"]; ?></h6>
                            <a href="#" class="btn btn-primary">Pinjam Buku</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Detail
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="img/<?= $row["gambar"]; ?>" class="img-fluid">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Kode Buku : <?= $row["kode"]; ?></li>
                                                            <li class="list-group-item">Judul Buku : <?= $row["judul"]; ?></li>
                                                            <li class="list-group-item">Penulis : <?= $row["penulis"]; ?></li>
                                                            <li class="list-group-item">Penerbit : <?= $row["penerbit"]; ?></li>
                                                            <li class="list-group-item">Kategori : <?= $row["kategori"]; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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