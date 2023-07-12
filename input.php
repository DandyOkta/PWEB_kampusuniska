<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'nav.php' ?>

  <div class="container">
    <br>
    <h1 class="mt-4">INPUT DATA DOSEN</h1>
    <br>
    <a href="create.php" class="btn btn-primary mb-4">Tambah Data</a>
    <div class="table-responsive">
      <table class="table table-bordered table-hover" id="dataDosen">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama Lengkap</th>
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
          $query = mysqli_query($con, "SELECT * FROM dosen");

          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $data['nidn']; ?></td>
              <td><?php echo $data['nama_lengkap']; ?></td>
              <td><?php echo $data['jenis_kelamin']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['telepon']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">edit</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjutkan hapus data ?')">hapus</a>
                <a href="print.php" target="_blank" class="btn btn-sm btn-success">Cetak</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#dataDosen').DataTable();
      });
    </script>
</body>

</html>