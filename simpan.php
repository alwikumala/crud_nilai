<?php
if (isset($_POST['simpan'])) {
    require_once('../sambungan.php');
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];
// Menampilkan java script / simpan data
    $sql = "INSERT INTO siswa SET nis='$nis', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kelas_id='$kelas_id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Berhasil Simpan');</script>";
        header("location: index.php");
    } else {
        //echo "<script>alert('Gagal Simpan Dong!');</script>";
         var_dump($sql);
        // print_r($sql);
    }
} else {
    echo "Jangan Ngintip!";
}