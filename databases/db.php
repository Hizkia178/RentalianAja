<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rentalin";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>