<?php
require_once(__DIR__ . "/connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "DELETE FROM film WHERE id = $id";

if ($connection->query($sql) === TRUE) {
    echo "<script>alert('Film berhasil dihapus'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $connection->error;
    echo "<br><a href='index.php'>Kembali ke daftar film.</a>";
}

$stmt->close();
$connection->close();
?>