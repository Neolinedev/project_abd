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

function kembali($tgl_kembali)
{
    global $db;
    mysqli_query($db, "DELETE FROM daftar_peminjam WHERE tgl_kembali = $tgl_kembali");

    return mysqli_affected_rows($db);
}
