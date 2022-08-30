@extends('layouts.web.app')
@section('content')
<!-- slider_section - start
    ================================================== -->
    <section class="slider_section text-white text-center position-relative clearfix">
        <div class="main_slider clearfix">
            <div class="item has_overlay d-flex align-items-center"
                data-bg-image="{{ asset('web/images/slider.png') }}">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-start">
                                <span class="text-sub"> Bingung sewa peralatan</span>
                                <span data-animation="fadeInUp" data-delay=".5s" class="text-judul">
                                    Fotografi?
                                </span>
                                <div class="abtn_wrap clearfix mt-3" data-animation="fadeInUp" data-delay=".7s">
                                    <a class="btn btn-custom" href="#!">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item has_overlay d-flex align-items-center"
                data-bg-image="{{ asset('web/images/slider.png') }}">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-start">
                                <span class="text-sub"> Bingung sewa peralatan</span>
                                <span data-animation="fadeInUp" data-delay=".5s" class="text-judul">
                                    Fotografi?
                                </span>
                                <div class="abtn_wrap clearfix mt-3" data-animation="fadeInUp" data-delay=".7s">
                                    <a class="btn btn-custom" href="#!">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item has_overlay d-flex align-items-center"
                data-bg-image="{{ asset('web/images/slider.png') }}">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider_content text-start">
                                <span class="text-sub"> Bingung sewa peralatan</span>
                                <span data-animation="fadeInUp" data-delay=".5s" class="text-judul">
                                    Fotografi?
                                </span>
                                <div class="abtn_wrap clearfix mt-3" data-animation="fadeInUp" data-delay=".7s">
                                    <a class="btn btn-custom" href="#!">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->

    <!-- search_section - start
   ================================================== -->
    <section class="search_section clearfix">
        <div class="container">
            <div class="advance_search_form2" data-bg-color="#FFFF" data-aos="fade-up" data-aos-delay="50">
                <form action="/">
                    @csrf
                    <div class="row row-cols-2 g-1">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item">
                                <div class="position-relative">
                                    <label for="kategori" class="input_icon"> <i
                                            class="filter bi bi-camera"></i></label>
                                    <input id="kategori" type="text" name="kategori" placeholder="Kategori">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item">
                                <div class="position-relative">
                                    <input id="subkategori" type="text" name="subcat"
                                        placeholder="Sub Kategori">
                                    <label for="subkategori" class="input_icon"><i
                                            class="filter bi bi-subtract"></i></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item">
                                <label for="datepicker" class="input_icon"><i
                                        class="filter bi bi-calendar-date"></i></label>
                                <input type="text" id="datepicker" autocomplete="off" placeholder="Dari Tanggal"
                                    name="fordate">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item">
                                <label for="datepicker2" class="input_icon"><i
                                        class="filter bi bi-calendar3"></i></label>
                                <input type="text" id="datepicker2" autocomplete="off"
                                    placeholder="Sampai Tanggal" name="todate">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-2">
                            <div class="form_item">
                                <button type="submit" class="btn btn-lg btn-danger">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- search_section - end
   ================================================== -->

    <!-- alur_section - start
   ================================================== -->
    <section class="nullable"></section>
    <section class="container-fluid">
        <div class="ms-5 mb-5">
            <span class="keterangan-card">Cuma 4 Langkah Sewa Alat Bersama <span
                    class="keterangan-card-merah">Rentalinalat.id</span></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-3">
                    <div class="card-flow card mt-3">
                        <div class="card-title text-center mt-4">
                            <i class="bi bi-arrow-right-circle judul-card"></i>
                        </div>
                        <div class="card-body text-center mt-3">
                            <span class="body-cardnya">Login/Sign Up</span>
                            <p class="deskripsi-card mt-2">lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem
                                ipsum lorem ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-3">
                    <div class="card-flow card mt-3">
                        <div class="card-title text-center mt-4">
                            <i class="bi bi-search judul-card"></i>
                        </div>
                        <div class="card-body text-center mt-3">
                            <span class="body-cardnya">Cari Alat</span>
                            <p class="deskripsi-card mt-2">lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem
                                ipsum lorem ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-3">
                    <div class="card-flow card mt-3">
                        <div class="card-title text-center mt-4">
                            <i class="bi bi-wallet2 judul-card"></i>
                        </div>
                        <div class="card-body text-center mt-3">
                            <span class="body-cardnya">Bayar</span>
                            <p class="deskripsi-card mt-2">lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem
                                ipsum lorem ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-3">
                    <div class="card-flow card mt-3">
                        <div class="card-title text-center mt-4">
                            <i class="bi bi-box2-fill judul-card"></i>
                        </div>
                        <div class="card-body text-center mt-3">
                            <span class="body-cardnya">Terima Alat</span>
                            <p class="deskripsi-card mt-2">lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem
                                ipsum lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nullable"></section>

    <!-- alur_section - end
   ================================================== -->

    <!-- carousel_section - start
   ================================================== -->
    <section class="container-fluid" style="background: #F9F9F9;">
        <section style="height: 130px;"></section>
        <div class="ms-5 mb-5">
            <span class="keterangan-card">Penawaran <span class="keterangan-card-merah">Menarik</span> Untukmu </span>
        </div>
        <div class="container">
            <div class="">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('web/images/slider2.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('web/images/slider2.png') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('web/images/slider2.png') }}" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        {{-- <span class="visually-hidden">Previous</span> --}}
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        {{-- <span class="visually-hidden">Next</span> --}}
                    </button>
                </div>
                <section style="height: 72px;"></section>
            </div>
        </div>
    </section>
    <section class="nullable"></section>
    <!-- carousel_section - end
   ================================================== -->

    <!-- koleksi_section - start
   ================================================== -->
    <section class="container-fluid m-auto p-5">
        <div class="row p-5">
            <div class="col-sm-12 col-xs-5 col-md-7 col-lg-4 m-auto">
                <div class="text-center mt-3 card-flow">
                    <img src="{{ asset('web/images/index.png') }}" alt="" class="img-fluid"
                        style="width: 100%;height: 100%;border-radius: 25px;">
                </div>
            </div>
            <div class="col-sm-12 col-xs-10 col-md-12 col-lg-8 m-auto">
                <div class="row m-auto mt-3">
                    <div class="col-12">
                        <div class="text-lg-start text-sm-start text-xs-center text-md-center m-auto">
                            <span
                                style="font-family: 'Poppins';font-style: normal;color: #000000;font-weight: 300;font-size: 40px;line-height: 60px;">
                                Rasakan
                                <span style="color: #CC1522;font-weight: 700;font-size: 40px;line-height: 60px;">Pengalaman <br> Baru</span>
                                dengan
                                <span style="color: #CC1522;font-weight: 700;font-size: 40px;line-height: 60px;">Rentalinalat.id</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div class="text-center mt-3 card-flow">
                            <img src="{{ asset('web/images/kamera.png') }}" class="" alt="" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div class="text-center mt-3 card-flow">
                            <img src="{{ asset('web/images/kamera.png') }}" alt="" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4">
                        <div class="text-center mt-3 card-flow">
                            <img src="{{ asset('web/images/kamera.png') }}" alt="" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nullable"></section>

    <!-- koleksi_section - end
   ================================================== -->

    <!-- carousel_section - start
    ================================================== -->
    <section class="" style="background: #F9F9F9;">
        <section style="height: 130px;"></section>
        <div class="container">
            <div class="">
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-5 col-sm-12 text-start me-auto">
                        <span class="card-keunggulan">Kenapa Harus di <span style="color: #CC1522;">Rentalinalat.id?</span></span>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-12 text-left p-3 ms-auto">
                        <span class="keunggulan">simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley</span>
                    </div>
                </div>
            </div>
            <div class="container-sm" id="counter">
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span style="font-weight: 800;font-size: 80px;line-height: 109px;color: #1D1D1D;" class="counter1">10</span>
                        <span style="color: #000000;font-size: 40px;position: absolute;">+</span>
                        <p class="deskripsi-keunggulan">Jenis alat tersedia</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span style="font-weight: 800;font-size: 80px;line-height: 109px;color: #1D1D1D;" class="counter2">100</span>
                        <span style="color: #000000;font-size: 40px;position: absolute;">+</span>
                        <p class="deskripsi-keunggulan">Total Semua Alat</p>
                    </div>
                </div>
            </div>
        </div>
        <section style="height: 130px;"></section>
    </section>
    <section class="nullable"></section>

    <!-- carousel_section - end
    ================================================== -->

    <!-- keunggulan_section - start
    ================================================== -->

    <section class="container">
        <div class="row justify-content-center allign-items-center text-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card" style="border: none;">
                    <div class="card-title">
                        <span
                        style="font-family: 'Manrope';font-style: normal;font-weight: 800;font-size: 30px;line-height: 41px;color: #CC1522;"><i class="bi bi-shield-check me-4"></i>Lorem Ipsum </span>
                    </div>
                    <div class="card-body">
                        <span>
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card" style="border: none;">
                    <div class="card-title">
                        <span
                        style="font-family: 'Manrope';font-style: normal;font-weight: 800;font-size: 30px;line-height: 41px;color: #CC1522;"><i class="bi bi-upc-scan me-4"></i>Lorem Ipsum </span>
                    </div>
                    <div class="card-body">
                        <span>
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center allign-items-center text-center mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card" style="border: none;">
                    <div class="card-title">
                        <span
                        style="font-family: 'Manrope';font-style: normal;font-weight: 800;font-size: 30px;line-height: 41px;color: #CC1522;"><i class="bi bi-plug me-4"></i>Lorem Ipsum </span>
                    </div>
                    <div class="card-body">
                        <span>
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card" style="border: none;">
                    <div class="card-title">
                        <span
                        style="font-family: 'Manrope';font-style: normal;font-weight: 800;font-size: 30px;line-height: 41px;color: #CC1522;"><i class="bi bi-wrench-adjustable me-4"></i>Lorem Ipsum </span>
                    </div>
                    <div class="card-body">
                        <span>
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <section class="nullable"></section>
    </section>

    <!-- keunggulan_section - end
    ================================================== -->


    <!-- review_section - start
    ================================================== -->
    <div class="container-fluid" style="background: #CC1522;">
        <section class="nullable"></section>
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="row p-3 allign-items-center justify-content-center text-center">
                            <div class="col-lg-2 mt-4 mb-3">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 40px;line-height: 60px;color: #FFFFFF;">Client Stories.</span>
                            </div>
                            <div class="col-lg-2 ms-2">
                                <img src="{{asset('web/images/man.png')}}" class="rounded-circle" alt="Gambar tidak ditemukan">
                            </div>
                            <div class="col-lg-7 mt-4">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 15px;line-height: 22px;color: #FFFFFF;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</span>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="color: #FFFFFF;">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row p-3 allign-items-center justify-content-center text-center">
                            <div class="col-lg-2 mt-4 mb-3">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 40px;line-height: 60px;color: #FFFFFF;">Review Kedua.</span>
                            </div>
                            <div class="col-lg-2 ms-2">
                                <img src="{{asset('web/images/man.png')}}" class="rounded-circle" alt="Gambar tidak ditemukan">
                            </div>
                            <div class="col-lg-7 mt-4">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 15px;line-height: 22px;color: #FFFFFF;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</span>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="color: #FFFFFF;">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row p-3 allign-items-center justify-content-center text-center">
                            <div class="col-lg-2 mt-4 mb-3">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 40px;line-height: 60px;color: #FFFFFF;">Review Ketiga.</span>
                            </div>
                            <div class="col-lg-2 ms-2">
                                <img src="{{asset('web/images/man.png')}}" class="rounded-circle" alt="Gambar tidak ditemukan">
                            </div>
                            <div class="col-lg-7 mt-4">
                                <span style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 15px;line-height: 22px;color: #FFFFFF;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</span>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <span style="color: #FFFFFF;">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <i class="bi bi-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="nullable"></section>
    </div>
    <section style="height: 100px;"></section>
    <!-- review_section - end
    ================================================== -->
    @endsection
