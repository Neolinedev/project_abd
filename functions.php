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

function register($data)
{
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);
    $email = stripslashes($data["email"], FILTER_SANITIZE_EMAIL);

    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah terdaftar !')
            </script>
        ";
        return false;
    }
    if ($password !== $password2) {
        echo "
            <script>
                alert('Password tidak sesuai     !')
            </script>
        ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO user VALUES('','$username','$password','$email')");

    return mysqli_affected_rows($db);
}
