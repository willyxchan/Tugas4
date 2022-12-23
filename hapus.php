<?php
if ($_GET['NIM']) {
    include 'koneksi.php';
    $NIM = $_GET['NIM'];

    $query = "DELETE FROM mahasiswa WHERE NIM = '$NIM'";
    $execQuery = mysqli_query($conn, $query);


    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil dihapus');
        window.location.href = 'index.php';
        </script>";

    } else {
        echo
        "<script>
        alert('Data gagal dihapus');
        window.location.href = 'index.php';
        </script>";
    }
    
} else {
    echo "No NIM";
}
