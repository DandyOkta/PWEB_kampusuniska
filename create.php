<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $nidn                = $_POST['nidn'];
    $nama_lengkap        = $_POST['nama'];
    $jenis_kelamin       = $_POST['jeniskelamin'];
    $alamat              = $_POST['alamat'];
    $telepon             = $_POST['telepon'];
    $email               = $_POST['email'];

    $result = mysqli_query($con, "INSERT INTO dosen(nidn,nama_lengkap,jenis_kelamin,alamat,telepon,email) VALUES('$nidn','$nama_lengkap','$jenis_kelamin','$alamat','$telepon','$email')");

    header('location:input.php');
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
        <h1 class="mt-4">INPUT DATA DOSEN</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
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
                    <a href="input.php" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>