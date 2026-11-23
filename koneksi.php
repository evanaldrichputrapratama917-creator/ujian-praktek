<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "perpus";

// Buat koneksi
$con = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// echo "Connected successfully";

?>