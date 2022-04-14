<?php
if (isset($_GET['id'])) {
    include_once('../sambungan.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id='$id'";
    $result =mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Data Terhapus');</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('Gagal Dihapus');</script>";
        header("location: index.php");
    }
} else {
    echo "Jangan Masuk!";
}