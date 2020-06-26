<?php
include('functions.php');
$nama = $_POST["nama"];
$email = $_POST["email"];
$nama_buku = $_POST["buku"];

$query = mysqli_query($db, "INSERT INTO daftar_peminjam VALUES('','$nama','$email','$nama_buku')");
header("Location: daftar_peminjam.php");
exit;
