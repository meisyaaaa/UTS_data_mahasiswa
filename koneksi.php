<?php
$host = "localhost";
$user = "root";
$pass = "";
// SESUAIKAN: Di foto phpMyAdmin kamu namanya adalah db_kampus
$db   = "db_kampus"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>