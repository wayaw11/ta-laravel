@extends('layout.main')
@section('content')
    <div style="
          background-image: url(assets/img/foto1.jpg);
          background-position: center;
          background-size: cover;
          height: 30rem;
        "
        class="position-relative overflow-hidden p-5 m-3 text-center rounded-3 text-light" data-aos="zoom-out"
        data-aos-delay="300">
        <div class="col-md-6 p-lg-5 mx-auto my-auto bg-gradient bg-primary rounded-3 shadow-lg">
            <img src="assets/img/logo.jpg" alt="" width="25%" class="img-thumbnail mb-5 rounded-circle" />
            <h1 class="fw-bold">Kobessah Kopi</h1>
            <h3 class="fw-normal mb-3">
                Selamat datang di website Kobessah<br />
                buruan ajak temanmu kesini!
            </h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <!-- <a class="icon-link" href="#"> Learn more </a>
                    <a class="icon-link" href="#"> Buy </a> -->
            </div>
        </div>
    </div>
    <!-- separate -->
    <div class="container marketing">
        <!-- logo -->

        <!-- START THE FEATURETTES -->

        <div class="row featurette right">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">
                    Nasi Ayam Goreng Spesial.
                    <span class="text-body-secondary d-block">Rahasia Keseimbangan Rasa yang Menggugah
                        Selera.</span>
                </h2>
            </div>
            <div class="col-md-5">
                <img src="assets/img/produk5.jpg" width="100%" class="img-thumbnail shadow-lg" alt="" />
            </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette left">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">
                    Tempe Mendoan.
                    <span class="text-body-secondary d-block">
                        Renyah, dan Menggugah Selera.</span>
                </h2>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="assets/img/produk4.jpg" width="100%" class="img-thumbnail shadow-lg" alt="" />
            </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette right">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">
                    Gurih, renyah, dan lezat.
                    <span class="text-body-secondary d-block">Kentang Goreng Premium dengan Rasa Terbaik.</span>
                </h2>
            </div>
            <div class="col-md-5">
                <img src="assets/img/produk2.jpg" width="100%" class="img-thumbnail shadow-lg" alt="" />
            </div>
        </div>

        <!-- /END THE FEATURETTES -->
    </div>
@endsection
