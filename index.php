<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <?php include 'nav.php' ?>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item bg-image active">
        <img src="img/wallpaperbetter.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>MOTO</h5>
          <p>lihat MOTO dari kami Kampus Kami</p>
          <a href="#layanan">
            <button type="button" class="btn btn-danger btn-lg">
              Cek MOTO
            </button>
          </a>
          </a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/wallpaperbetter (1).jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>FEEDBACK</h5>
          <p>Beri Feedback Untuk kampus kami agar dapat lebih berkembang</p>
          <a href="#kontak">
            <button type="button" class="btn btn-danger btn-lg">
              Cek Kolom Feedback
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/wallpaperbetter (2).jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>FASILITAS</h5>
          <p>berbagai macam Fasilitas Di kampus Kami</p>
          <a href="#produk">
            <button type="button" class="btn btn-danger btn-lg">
              Cek Fasilitas
            </button>
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- layanan -->
  <div class="container-fluid bg-light layanan pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="layanan">MOTO</h2>
      <div class="row pt-4">
        <div class="col-md-4">
          <span class="lingkaran"><img src="gambar/icon/icons8-computer-support-100.png" alt="repairing"></span>
          <h3 class="mt-3">Repairing</h3>
          <p>
            Memperbaiki kerusakan bagian dalam maupun luar komputer atau laptop jika permasalahannya sepele maka kami gratiskan.
          </p>
        </div>

        <div class="col-md-4">
          <span class="lingkaran"><img src="gambar/icon/icons8-cleaning-a-surface-100.png" alt=""></span>
          <h3 class="mt-3">Engineering</h3>
          <p>
            membersihkan bagian dalam atau luar dengan layanan yang terpercaya dan teliti dalam pengerjaannya.
          </p>
        </div>

        <div class="col-md-4">
          <span class="lingkaran"><img src="gambar/icon/icons8-workstation-90.png" alt="Building" /></span>
          <h3 class="mt-3">Building</h3>
          <p>
            merakit komputer sesuai keinginan pelanggan jika part komputer tidak maka kami akan pesan dari sumber lain.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- produk -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="produk">Fasilitas</h2>
      <p>
        kami memiliki fasilitas yang berkualitas dan memadai untuk berbagai macam hal
      </p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter (1).jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">PERPUSTAKAAN</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter.com_1920x1080.jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">LAPANGAN</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter.com_1920x1080 (1).jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">KOLAM RENANG</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter (3).jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">KELAS</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter.com_1920x1080 (2).jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">TEMPAT IBADAH</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="img/wallpaperbetter.com_1920x1080 (3).jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">ATM</h5>
              <p class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                odit atque nam animi dolores itaque.
              </p>
              <a href="#" class="btn btn-outline-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- testimoni -->

  <!-- Client -->

  <!-- Feedback -->
  <div class="container-fluid pt-5 pb-5 bg-light kontak">
    <div class="container">
      <h2 class="display-3 text-center" id="kontak">FEEDBACK</h2>
      <div class="row pb-3 mt-3">
        <div class="col-md-6">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />
          <input class="form-control form-control-lg" type="text" placeholder="No. Phone" />
        </div>
        <div class="col-md-6">
          <textarea class="form-control form-control-lg" rows="5"></textarea>
        </div>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="button" class="btn btn-danger btn-lg">
          Kirim Pesan
        </button>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <div class="footer-atas py-5">
      <div class="container">
        <div class="row text-dark">
          <div class="col-4 pe-5">
            <h4>Contact</h4>

            <ul class="list-group list-group-flush">
              <li class="list-group-item text-dark px-0">
                <h6>Email :</h6>
                <p>orangsirihtengah@gmail.com</p>
              </li>
              <li class="list-group-item text-dark px-0">

                <h6>Alamat :</h6>
                <p>jalan bukhari no.13 guntung manggis, Banjarbaru</p>
              </li>
              <li class="list-group-item text-dark px-0">
                <h6>Sosial Media</h6>
                <p>
                  <button class="socialtw"><a class="socialtw" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></button>
                  <button class="socialfb"><a class="socialfb" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a></button>
                  <button class="socialyt"><a class="socialyt" href="https://www.youtube.com/?hl=id&gl=ID"><i class="fab fa-youtube"></i></a></button>
                </p>
              </li>
            </ul>
          </div>

          <div class="col-4">
            <h3>Information</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="https://www.razer.com/" class="text-dark text-decoration-none">Website Uniska</a>
              </li>
              <li class="list-group-item">
                <a href="https://www.microsoft.com/en-us/windows?r=1" class="text-decoration-none text-dark">Website UGM</a>
              </li>
              <li class="list-group-item">
                <a href="https://www.nvidia.com/en-us/" class="text-decoration-none text-dark">Website UI</a>
              </li>
              <li class="list-group-item">
                <a href="https://store.steampowered.com/" class="text-decoration-none text-dark">Website Acer</a>
              </li>
              <li class="list-group-item">
                <a href="https://www.intel.com/content/www/us/en/homepage.html" class="text-decoration-none text-dark">Website intel</a>
              </li>
            </ul>
          </div>
          <div class="col-4 ps-5">
            <h3>Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7964.884632493783!2d114.7760891!3d-3.4844848!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1673612663954!5m2!1sid!2sid" width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bawah py-3 text-center text-light bg-dark">
      <div class="container">
        <p class="m-0">&copy; Copyright 2023 - PUNYA DANDY</p>
      </div>
    </div>
  </footer>
</body>

</html>