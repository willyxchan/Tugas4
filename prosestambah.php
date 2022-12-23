<?php
if ($_POST) {
    include 'koneksi.php';
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Jurusan = $_POST['Jurusan'];
    $Stambuk = $_POST['Stambuk'];
    
    $query = "INSERT INTO mahasiswa (NIM, Nama, Kelas, Jurusan, Stambuk) VALUES ('$NIM', '$Nama', '$Kelas', '$Jurusan', '$Stambuk')";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'tambah.php';
        </script>";
    }
} else {
    echo "No Access";
}
