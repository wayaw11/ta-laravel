<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Akhir</title>
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css" />
    <script src="../node_modules/aos/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5fd2369345.js"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="bg-warning-subtle bg-gradient">
    <nav
      class="navbar navbar-expand-md navbar-dark fixed-top bg-gradient bg-primary">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><img
            class="rounded-circle me-1"
            src="../assets/img/logo.jpg"
            alt="Bootstrap"
            width="60"
            height="60" />
          <span class="nav-hover h5">Kobessah Kopi</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link nav-hover" href="menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="about.html">Tentang Kami</a>
            </li>
          </ul>
          <div class="d-flex d-none" id="payment">
            <a class="btn btn-warning" href="cart.html">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <main class="container mt-5 pt-3">
      <!-- Main Content -->
      <h1 class="mb-3">Daftar Menu Kobessah Kopi</h1>
      <div class="row">
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>roti bakar</h5>
              <p class="wrap">
                Roti bakar yang garing dengan selai lezat, menggugah selera dan
                sempurna untuk sarapan atau camilan kapan saja.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#rotibakar">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(1)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk2.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>kentang goreng</h5>
              <p class="wrap">
                Kentang goreng adalah camilan gurih berkulit renyah dan lembut
                di dalam, cocok dinikmati kapan saja.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#kentanggoreng">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(2)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk3.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>pisang goreng</h5>
              <p class="wrap">
                Pisang goreng adalah camilan lezat yang terbuat dari pisang yang
                digoreng hingga renyah dan berwarna keemasan.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#pisanggoreng">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(3)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk4.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>tempe mendoan</h5>
              <p class="wrap">
                Tempe mendoan adalah makanan tradisional Indonesia yang gurih,
                renyah, dan digoreng dengan tepung bumbu khas, lezat untuk
                camilan.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#tempemendoan">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(4)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk5.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>nasi ayam bakar</h5>
              <p class="wrap">
                Nasi ayam bakar adalah hidangan lezat beraroma rempah yang
                disajikan dengan ayam panggang yang juicy dan nasi harum.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#nasiayam">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(5)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk6.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>cappucino</h5>
              <p class="wrap">
                Es cappuccino adalah minuman dingin dengan paduan sempurna
                antara espresso, susu, dan busa krim yang lembut dan nikmat.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#cappucino">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(6)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk7.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>chocolate</h5>
              <p class="wrap">
                Chocolate adalah minuman segar yang menyegarkan dengan campuran
                rasa cokelat yang lezat.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#chocolate">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(7)">Beli</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-4 mb-3">
          <div class="card">
            <img src="../assets/img/produk8.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>kopi hitam</h5>
              <p class="wrap">
                Kopi hitam, aroma khas dari biji kopi, menawarkan kekuatan dan
                kenikmatan dalam setiap teguknya.
              </p>
              <button
                class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
                data-bs-toggle="modal"
                data-bs-target="#kopi">
                Detail
              </button>
            </div>
            <div class="card-footer text-body-secondary d-grid gap-2">
              <button class="btn btn-primary" onclick="buy(8)">Beli</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content -->

      <!-- /END THE FEATURETTES -->
    </main>
    <!-- /.container -->

    <footer class="footer bg-gradient bg-primary shadow-lg mt-5">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-6 mt-5 mb-5">
            <h5>Tentang</h5>
            <p>
              Kobessah merupakan tempat nongkrong nyaman dan asik untuk
              mahasiswa.
            </p>
            <button
              class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Detail
            </button>
          </div>
          <div class="col-md-6 mt-5 mb-5">
            <h5>Kontak</h5>
            <ul class="list-unstyled">
              <li>
                Alamat: Jl.Bima Sinduharjao, Kec.Ngaglik, Kab.Sleman,
                DI.Yogyakarta
              </li>
              <li>Email: Kobessah@gmail.com</li>
              <li>Phone: +62 895-6120-13456</li>
            </ul>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; 2024 Kobessah</p>
            <button
              class="btn badge bg-primary d-none d-sm-block d-md-none d-none d-sm-block d-md-none"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Detail
            </button>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
  </body>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="../node_modules/bootstrap/dist/js/vanilla-tilt.js"></script>
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="script.js"></script>
  <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
      max: 8,
      speed: 400,
      // axis: "x",
      scale: 1.05,
      easing: "cubic-bezier(.03,.98,.52,.99)",
      transition: true,
      gyroscope: false,
      // glare: true,
    });
  </script>
</html>
<!-- Roti Bakar -->
<div
  class="modal fade"
  id="rotibakar"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Roti Bakar</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Roti Bakar Yang Garing Dengan Selai Lezat, Menggugah Selera Dan Sempurna
        Untuk Sarapan Atau Camilan Kapan Saja.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Kentang Goreng -->
<div
  class="modal fade"
  id="kentanggoreng"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Kentang Goreng</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Kentang Goreng Adalah Camilan Gurih Berkulit Renyah Dan Lembut Di Dalam,
        Cocok Dinikmati Kapan Saja.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Pisang Goreng -->
<div
  class="modal fade"
  id="pisanggoreng"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pisang Goreng</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Pisang Goreng Adalah Camilan Lezat Yang Terbuat Dari Pisang Yang
        Digoreng Hingga Renyah Dan Berwarna Keemasan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Tempe Mendoan -->
<div
  class="modal fade"
  id="tempemendoan"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tempe Mendoan</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tempe Mendoan Adalah Makanan Tradisional Indonesia Yang Gurih, Renyah,
        Dan Digoreng Dengan Tepung Bumbu Khas, Lezat Untuk Camilan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Nasi Ayam Bakar -->
<div
  class="modal fade"
  id="nasiayam"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nasi AyamBakar</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Nasi Ayam Bakar Adalah Hidangan Lezat Beraroma Rempah Yang Disajikan
        Dengan Ayam Panggang Yang Juicy Dan Nasi Harum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Cappucino -->
<div
  class="modal fade"
  id="cappucino"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cappucino</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Es Cappuccino Adalah Minuman Dingin Dengan Paduan Sempurna Antara
        Espresso, Susu, Dan Busa Krim Yang Lembut Dan Nikmat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Chocolate -->
<div
  class="modal fade"
  id="chocolate"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Chocolate</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Chocolate Adalah Minuman Segar Yang Menyegarkan Dengan Campuran Rasa
        Cokelat Yang Lezat Dan Menggugah Selera Di Hari Panas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Kopi -->
<div
  class="modal fade"
  id="kopi"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Kopi</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Kopi Hitam, Aroma Khas Dari Biji Kopi, Menawarkan Kekuatan Dan
        Kenikmatan Dalam Setiap Teguknya Yang Menyegarkan Dan Membangkitkan
        Semangat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Keluar
        </button>
      </div>
    </div>
  </div>
</div>
