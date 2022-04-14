<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
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
                        <a class="nav-link active" aria-current="page" href="..">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kelas/">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=".">Siswa</a>
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
            <span class="h4">Tambah Siswa</span>
            <a href="." class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
        </div>
        <div class="card-body text-success">
            <form action="simpan.php" method="post">
                <div class="mb-3">
                    <label for="nis" class="form-label">Nomor Induk Siswa</label>
                    <input type="text" class="form-control" name="nis" maxlength="">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">  
                    <label for="tempat_lahir" class="form-label">Tempat Lahir <small>(Kota/Kab)</small> </label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="mb-3">  
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <?php 
                include_once('../sambungan.php');
                $sql = "SELECT * FROM kelas ORDER BY kelas";
                $result = mysqli_query($koneksi, $sql);
                $r = mysqli_fetch_assoc($result);
                ?>
                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" class="form-control" required>
                        <option value="">Pilih Kelas</option>
                        <?php while ($r = mysqli_fetch_assoc($result)) {
                            echo "<option value='$r[id]'>$r[kelas]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb 3">
                    <button type="submit" value="Simpan" name="simpan" class="btn btn-primary">&nbsp;simpan</button>
                    <button type="reset" class="btn btn-danger">reset</button>
                </div>
            </form>
            </form>
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