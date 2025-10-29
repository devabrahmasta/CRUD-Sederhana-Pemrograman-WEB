<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>

        body {
            background-color: var(--bs-success-bg-subtle);
        }

    </style>
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
                        <a class="nav-link text-white-50 fw-bold" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold text-white" href="tambah.php">Tambah Film</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card mb-3" style="width: 40rem;">
            <div class="card-body">
                <h2 class="card-title text-center fw-bold">TAMBAH FILM</h2>
                <form action="create.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Film</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul Film" required>
                    </div>
                    <div class="mb-3">
                        <label for="dropdown" class="form-label">Genre</label>
                        <select class="form-select" name="genre" aria-label="Default select example" required>
                            <option selected>Pilih Genre</option>
                            <option value="1">Romance</option>
                            <option value="2">Action</option>
                            <option value="3">Horor</option>
                            <option value="4">Comedy</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputSutradara" class="form-label">Sutradara</label>
                        <input type="text" class="form-control" name="sutradara" placeholder="Sutradara" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputTahun" class="form-label">Tahun</label>
                        <input type="number" min="1888" max="2025" class="form-control" name="tahun" placeholder="Tahun" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success text-white">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>