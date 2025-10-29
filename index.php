<?php
require_once(__DIR__ . "/connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM film";
$result = $connection->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">Manajemen Film</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50 fw-bold" href="tambah.php">Tambah Film</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid justify-center-content">
        <div class="row p-5">
            <div class="col-sm-8 p-3 mb-5 ">
                <h2>Selamat Datang di Manajemen Film</h2>
                <p style="font-weight: 700;">Ini adalah daftar film anda.</p>
                <div class="card p-2">

                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Film</th>
                                <th scope="col">Gendre</th>
                                <th scope="col">Tahun Rilis</th>
                                <th scope="col">Sutradara</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if ($result && $result->num_rows > 0) {
                                $i = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $i . "</th>";
                                    echo "<td>" . $row["judul"] .  "</td>";
                                    echo "<td>" . $row["genre"] .  "</td>";
                                    echo "<td>" . $row["tahun"] .  "</td>";
                                    echo "<td>" . $row["sutradara"] .  "</td>";
                                    echo "<td><a class='btn btn-warning' href='edit.php?id=" . $row["id"] . "'>Edit</a>
                                            <a onclick=\"return confirm('Apakah kamu yakin ingin menghapus film: " . $row["judul"] . "?')\" class='btn btn-danger' href='delete.php?id=" . $row["id"] . "' >Hapus</a>";
                                    echo "</tr>";
                                    $i++;
                                }
                            } else {
                                echo "Tidak ada data film.";
                            }
                            $connection->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-4 justify-content-center p-3">
                <img src="https://m.media-amazon.com/images/M/MV5BYWI2ODM3ZDMtMDQwMi00MjhmLWJmZDAtMmZjYTE2ZTNlOGY2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="absolute cinema" class="img-fluid">
            </div>
        </div>
    </div>

</body>
<script>
    document.getElementById("myBtn").addEventListener("click", function() {
        alert("Hello World!");
    });
</script>

</html>