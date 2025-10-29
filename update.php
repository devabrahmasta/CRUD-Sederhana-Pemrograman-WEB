<?php
require_once(__DIR__ . "/connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$judul = $_POST['judul'];
$genre = $_POST['genre'];
$sutradara = $_POST['sutradara'];
$tahun = $_POST['tahun'];

$sql = "UPDATE film SET judul=?, genre = ?, sutradara = ?, tahun = ? WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssi", $judul, $genre, $sutradara, $tahun, $id);

if ($stmt->execute()) {
    echo "<script>alert('Film " . $judul . " berhasil diperbarui'); window.location.href='index.php';</script>";
} else {
    echo "Data gagal ditambahkan";
}


$stmt->close();
$connection->close();
