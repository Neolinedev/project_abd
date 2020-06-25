<?php
include('functions.php');
$id_peminjam = $_GET["id_peminjam"];
if (kembali($id_peminjam) > 0) {
    echo "
        <script>
            alert('Buku berhasil dikembalikan !')
            document.location.href = 'index.php'
        </script>
    ";
}
