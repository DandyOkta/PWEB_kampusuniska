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
    <a href="create.php" class="btn btn-primary mb-4">Tambah Data</a>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">NIM</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Telepon</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
        $query = mysqli_query($con, "SELECT * FROM Mahasiswa");

        while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tempat_lahir']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['telepon']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">edit</a>
              <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjutkan hapus data ?')">hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>