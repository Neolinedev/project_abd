<?php
include('functions.php');
$nama = $_POST["nama"];
$email = $_POST["email"];
$nama_buku = $_POST["buku"];
$time = time();
$tgl_pinjam = date('Y-m-d', $time);
$tgl_kembali = $_POST["tgl_kembali"];

$query = mysqli_query($db, "INSERT INTO daftar_peminjam VALUES('','$nama','$email','$nama_buku','$tgl_pinjam','$tgl_kembali')");
header("Location: daftar_peminjam.php");
exit;
