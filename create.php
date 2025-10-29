<?php
require_once(__DIR__ . "/connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$judul = $_POST['judul'];
$genre = $_POST['genre'];
$sutradara = $_POST['sutradara'];
$tahun = $_POST['tahun'];

$sql = "INSERT INTO film (judul, genre, sutradara, tahun) VALUES ( ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssss", $judul, $genre, $sutradara, $tahun);

if ($stmt->execute()) {
    echo "<script>alert('Film " . $judul . " berhasil ditambahkan'); window.location.href='index.php';</script>";
} else {
    echo "Data gagal ditambahkan";
}


$stmt->close();
$connection->close();
