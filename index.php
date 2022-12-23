<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./index/css/navbar1_index.css" rel="stylesheet">
    <link href="./index/css/table1_index.css" rel="stylesheet">
    <link href="./index/css/love_animation_index.css" rel="stylesheet">
    
</head>

    <body>
        
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" data-toggle="open-navbar1">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a href="#">
                <h4>Data Mahasiswa
                  <span></span>
                  <span>GDSC USU 2022</span>
                </h4>
                </a>
            </div>

        <div class="navbar-menu" id="open-navbar1">
            <ul class="navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="navbar-dropdown">
                <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id"> Categories <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown" id="my-dropdown-id">
            <li><a href="#">Actions</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="separator"></li>
            <li><a href="#">Seprated link</a></li>
            <li class="separator"></li>
            <li><a href="#">One more seprated link.</a></li>
          </ul>
        </li>

        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="blog">
            Blog <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="blog">
            <li><a href="#">Some category</a></li>
            <li><a href="#">Some another category</a></li>
            <li class="separator"></li>
            <li><a href="#">Seprated link</a></li>
            <li class="separator"></li>
            <li><a href="#">One more seprated link.</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Signin</a></li>
      </ul>
    </div>
  </div>
</nav>

<section>
   
<div class="container">
  <a href="./tambah.php" class="btn btn-primary mt-5 mb-2">Tambah</a>
<div class="">

  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Stambuk</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>

  <!-- jangan diganggu part 1 -->
  <?php
    include './koneksi.php';
    
    $query = "SELECT * FROM mahasiswa";
    $exeQuery = mysqli_query($conn, $query);
    $i = 1;
    while ($data = mysqli_fetch_assoc($exeQuery)) {
  ?> 

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $data['NIM'] ?></td>
        <td><?= $data['Nama'] ?></td>
        <td><?= $data['Kelas'] ?></td>
        <td><?= $data['Jurusan'] ?></td>        
        <td><?= $data['Stambuk'] ?></td>
        <td>
          <a onclick="return confirm('Apakah yakin anda ingin menghapus data')" href="hapus.php?NIM=<?= $data['NIM'] ?>" class="btn btn-danger btn-sm">Hapus</a>
          <a href="edit.php?NIM=<?= $data['NIM'] ?>" class="btn btn-info btn-sm text-white">Edit</a>
        </td>
    </tr>

    <?php
  }
    ?>
    <!-- jangan diganggu part 1 -->
    </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
  <h2>Made sincerely by Patricia Indry & Wilbert Chandra</h2>
</div>

    <!-- script untuk fungsi bar navigasi atas pada halaman index/halaman utama (home)  -->
    <script src="./index/js/navbar1_index.js"></script>
    <!-- script untuk fungsi vertical scrollbar pada tabel halaman index/halaman utama (home)  -->
    <script src="./index/js/table1_index.js"></script>
    </body>

</html>