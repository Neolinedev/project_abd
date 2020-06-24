<?php
$db = mysqli_connect("localhost", "root", "", "project_abd");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $db;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $nama_buku = htmlspecialchars($data["nama_buku"]);

    $query = "INSERT INTO daftar_peminjam VALUES
            ('','$nama','$email','$nama_buku')
            ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
