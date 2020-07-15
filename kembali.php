<?php
include('functions.php');
// $denda = 5000;
$id_peminjam = $_GET["id_peminjam"];
$tgl_kembali = isset($_POST["tgl_kembali"]);
$kembali = mysqli_query($db, "SELECT * FROM daftar_peminjam WHERE tgl_kembali = $tgl_kembali");
if (kembali($tgl_kembali) == $kembali) {
    echo "
        <script>
            alert('Buku berhasil dikembalikan !')
            document.location.href = 'index.php'
        </script>
    ";
} else {
    echo "
        <script>
            alert('Anda didenda sebesar Rp.5000')
            document.location.href = 'index.php'
        </script>
    ";
}
