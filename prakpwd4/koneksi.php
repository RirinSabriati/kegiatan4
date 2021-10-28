<?php

$host = "localhost";

$username = "root";

$password = "";
// namadatabase
$databasename = "praktikum4";


$con = @mysqli_connect($host, $username, $password, $databasename);
// cek koneksi
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}