<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../">Kelas</a>
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
            <span class="h4">Edit Siswa</span>
            <a href="." class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
        </div>
        <?php
        require_once("../sambungan.php");
        $id = $_GET['id'];
        $sql = "SELECT * FROM siswa WHERE id='$id'";
        $result = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_assoc($result);
        ?>
        <div class="card-body text-success">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="nis" class="form-label">Nomor Induk Siswa (NIS)</label>
                    <input type="text" class="form-control" name="nis" maxlength="" value="<?= $r['nis']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" value="<?= $r['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat_lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal_lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>">
                </div>

                <?php
               require_once('../sambungan.php');
               $id = $_GET['id'];
                $sql2 = "SELECT * FROM kelas ORDER BY id";
                $result2 = mysqli_query($koneksi, $sql2);
                ?>
                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" class="form-control" required>
                        <option value="">Pilih Kelas</option>
                        <?php
                        while ($r2 = mysqli_fetch_assoc($result2)) {
                            if ($r['kelas_id'] == $r2['id']) {
                                echo "<option value='$r2[id]' selected>$r2[kelas]</option>";
                            } else {
                                echo "<option value='$r2[id]'>$r2[kelas]</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb 3">
                    <input type="hidden" name="id" value="<?= $r['id']; ?>">
                    <button type="submit" value="Update" name="update" class="btn btn-primary">&nbsp;Update</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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
