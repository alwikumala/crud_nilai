<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="shortcut icon" href="images/aaa.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../images/aaa.jpg" alt="logo" width="100">
            <a class="navbar-brand" href=".">Nilai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="..">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kelas/">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href=".">Siswa</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- content articel -->
    <div class="container"></div>
    <div class="card border-success mb-3" ;>
        <div class="card-header bg-transparent border-success">
            <span class="h4">Data Siswa</span>
            <a href="tambah.php" class="btn btn-danger btn-sm" style="float: right;">Tambah</a>
        </div>
        <div class="card-body text-success">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat lahir</th>
                    <th>Tanggal lahir</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    require_once('../sambungan.php');
                    $sql = "SELECT siswa.id AS id_siswa, siswa.nis, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir, kelas.kelas FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r  = mysqli_fetch_assoc($result)) {
                            // pendekatan php
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $r['nis'] . "</td>";
                            echo "<td>" . $r['nama'] . "</td>";
                            echo "<td>" . $r['tempat_lahir'] . "</td>";
                            echo "<td>" . date("d F Y", strtotime($r['tanggal_lahir'])) . "</td>";
                            echo "<td>" . $r['kelas'] . "</td>"; 
                            ?>
                            <td>
                                <a href="edit.php?id=<?php echo $r['id_siswa']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Gak Nyesel!')">Hapus</a>
                            </td>
                    <?php
                            echo "</tr>";
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-transparent border-success">Rumah Gemilang Indonesia</div>
    </div>

    <!-- Footer -->
    <div class="fixed-bottom">
        <div class="card">
            <div class="card-body" align="center">
                <span>&copy;2022 - <a href="http://muhidin.web.id" target="_blank">Instruktur TKJ Webdev</span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>