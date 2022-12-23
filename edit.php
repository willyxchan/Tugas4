<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">CRUD GDSC</span>
        </div>
    </nav>


    <?php
    include 'koneksi.php';
    $NIM = $_GET['NIM'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
    $execQuery = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($execQuery);
    ?>


    <div class="container">

        <div class="form">
            <div class="card col-md-6 offset-md-3 mt-3">
                <div class="card-header bg-primary">
                    <h4 class="card-title text-center text-white">Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="prosesedit.php" method="POST">
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input id="nim" type="text" class="form-control" name="NIM" placeholder="Masukkan NIM" required value="<?= $data['NIM'] ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="Nama" placeholder="Masukkan nama" required value="<?= $data['Nama'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="Kelas">Kelas</label>
                            <input id="Kelas" type="text" class="form-control" name="Kelas" placeholder="Masukkan Kelas" required value="<?= $data['Kelas'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="Jurusan">Jurusan</label>
                            <input id="Jurusan" type="text" class="form-control" name="Jurusan" placeholder="Masukkan Jurusan" required value="<?= $data['Jurusan'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="Stambuk">Stambuk</label>
                            <input id="Stambuk" type="text" class="form-control" name="Stambuk" placeholder="Masukkan stambuk" required value="<?= $data['Stambuk'] ?>">
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-dark" type="submit">Edit</button>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>