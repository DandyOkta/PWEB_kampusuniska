<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    img {
      width: 200px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #bc3131;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="input.php">Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profil Penulis</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="text-center">
      <img src="img/judy.jpg" alt="ERROR" width="200px" class="mt-5 mb-5">
    </div>
    <table class=table table-hover style="width:70%; margin: 0 auto">
      <tr>
        <td align=right width=50%>Nama</td>
        <td align=left width=50%>Judy al Maidi</td>
      </tr>
      <tr>
        <td align=right width=50%>Fakultas / Prodi</td>
        <td align=left width=50%>Night univercity</td>
      </tr>
      <tr>
        <td align=right width=50%>tempat, Tanggal Lahir</td>
        <td align=left width=50%>Mexico, 18 januari 2025</td>
      </tr>
      <tr>
        <td align=right width=50%>Email</td>
        <td align=left width=50%>judyvatenzi@gmail.com</td>
      </tr>
      <tr>
        <td align=right width=50%><strong>Sosial Media</strong></td>
        <td align=left width=50%>
          <a href="#" class="btn btn-light btn-sm">Instagram</a>
          <a href="#" class="btn btn-light btn-sm">Facebook</a>
          <a href="#" class="btn btn-light btn-sm">Twitter</a>
        </td>
      </tr>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>