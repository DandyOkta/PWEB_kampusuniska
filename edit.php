<?php
include 'connection.php';
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
    $nim                 = $data['nim'];
    $nama                = $data['nama'];
    $tempatlahir         = $data['tempat_lahir'];
    $tanggallahir        = $data['tanggal_lahir'];
    $jurusan             = $data['jurusan'];
    $jeniskelamin        = $data['jenis_kelamin'];
    $alamat              = $data['alamat'];
    $telepon             = $data['telepon'];
    $email               = $data['email'];
}

if (isset($_POST['submit'])) {
    $nim                 = $_POST['nim'];
    $nama                = $_POST['nama'];
    $tempatlahir         = $_POST['tempat_lahir'];
    $tanggallahir        = $_POST['tanggal_lahir'];
    $jurusan             = $_POST['jurusan'];
    $jeniskelamin        = $_POST['jenis_kelamin'];
    $alamat              = $_POST['alamat'];
    $telepon             = $_POST['telepon'];
    $email               = $_POST['email'];

    $result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim',nama='$nama',tempat_lahir='$tempatlahir',tanggal_lahir='$tanggallahir',jurusan='$jurusan',jenis_kelamin='$jeniskelamin',alamat='$alamat',telepon='$telepon',email='$email' WHERE id=$id");

    header('Location:input.php');
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
        <h1 class="mt-4">EDIT DATA MAHASISWA</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempatlahir" name="tempat_lahir" value="<?php echo $tempatlahir; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggallahir" name="tanggal_lahir" value="<?php echo $tanggallahir; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select name="jurusan" id="jurusan" class="form-select">
                        <option value="-">Pilih Program Studi</option>
                        <option value="TI" <?php if ($jurusan == 'TI') echo 'selected' ?>>Teknik Informatika</option>
                        <option value="SI" <?php if ($jurusan == 'SI') echo 'selected' ?>>Sistem Informasi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" id="jeniskelamin" class="form-select">
                        <option value="-">Pilih Jenis Kelamin</option>
                        <option value="L" <?php if ($jeniskelamin == 'L') echo 'selected' ?>>Laki-laki</option>
                        <option value="P" <?php if ($jeniskelamin == 'P') echo 'selected' ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
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