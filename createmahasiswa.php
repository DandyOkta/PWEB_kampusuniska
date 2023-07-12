<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $nim                 = $_POST['nim'];
    $nama                = $_POST['nama'];
    $tempatlahir         = $_POST['tempatlahir'];
    $tanggallahir        = $_POST['tanggallahir'];
    $jurusan             = $_POST['jurusan'];
    $jeniskelamin        = $_POST['jeniskelamin'];
    $alamat              = $_POST['alamat'];
    $telepon             = $_POST['telepon'];
    $email               = $_POST['email'];

    $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,tempat_lahir,tanggal_lahir,jurusan,jenis_kelamin,alamat,telepon,email) VALUES('$nim','$nama','$tempatlahir','$tanggallahir','$jurusan','$jeniskelamin','$alamat','$telepon','$email')");

    header('location:inputmahasiswa.php');
    //     echo $nim . "<br>";
    //     echo $nama . "<br>";
    //     echo $tempatlahir . "<br>";
    //     echo $tanggallahir . "<br>";
    //     echo $jurusan . "<br>";
    //     echo $jeniskelamin . "<br>";
    //     echo $alamat . "<br>";
    //     echo $telepon . "<br>";
    //     echo $email . "<br>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php include 'nav.php' ?>

    <div class="container">
        <h1 class="mt-4">INPUT DATA MAHASISWA</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select name="jurusan" id="jurusan" class="form-select">
                        <option value="-">Pilih Program Studi</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jeniskelamin" id="jeniskelamin" class="form-select">
                        <option value="-">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-2">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <a href="inputmahasiswa.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>