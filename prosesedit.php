<?php
if ($_POST) {
    include 'koneksi.php';
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Jurusan = $_POST['Jurusan'];
    $Stambuk = $_POST['Stambuk'];
    $Kelas = $_POST['Kelas'];

    $query = "UPDATE mahasiswa SET Nama='$Nama', Kelas='$Kelas', Jurusan = '$Jurusan', Stambuk='$Stambuk' WHERE NIM='$NIM'";
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
