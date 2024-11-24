<?php
$servername = "127.0.0.1"; // Ganti localhost dengan 127.0.0.1
$username = "root";
$password = "";
$dbname = "foodmart";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>
