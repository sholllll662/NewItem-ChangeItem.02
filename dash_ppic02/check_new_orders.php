<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itemmasters_update";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa apakah ada data baru di tabel "orders"
$sql = "SELECT COUNT(*) as count FROM newitem WHERE rawmatppic =''";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['count'];

echo $count;
