<?php

$host = "localhost";
$port = "3306";
$username = "root";
$password = "";
$database = "db_film";

$connection = null;

try {
    $connection = new mysqli($host, $username, $password, $database);
} catch (Exception $e) {
    echo "Koneksi Gagal";
}