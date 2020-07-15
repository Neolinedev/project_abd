<?php
include('functions.php');
$judul = $_GET["judul"];
$buku = mysqli_query($db, "SELECT judul FROM buku WHERE judul = '$judul'");
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>Form Data Peminjam</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
	<link rel="shortcut icon" href="img/buku.ico">

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="css/sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<h1 class="mt-5">Form Pinjam Buku</h1>
			<p class="lead">Silahkan Daftarkan Identitas Anda</p>
			<hr />
			<form action="inputproses.php" method="POST">
				<div class="form-group row">
					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda..">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda..">
					</div>
				</div>
				<div class="form-group row">
					<label for="buku" class="col-sm-2 col-form-label">Judul Buku</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="buku" name="buku" value="<?= $judul; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $judul; ?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button class="btn btn-success" type="submit">Pinjam</button>
					</div>
				</div>
			</form>
		</div>
	</main>
</body>

</html>