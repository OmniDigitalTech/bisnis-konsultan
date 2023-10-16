@extends('website::layouts.master')
@section('title') SNAPBIZ Business Consultant @endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
@endsection

@section('content')

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{URL::asset('/index')}}">
                    <img src="{{ URL::asset('build/images/logo_snapbiz.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="70">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#features">Experience & Collaboration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
            <section class="section job-hero-section pb-0 p-5" id="hero">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-between align-items-center pt-5 pb-5">
                    <div class="col-lg-6 pt-4">
                        <div>
                            <h1 class="display-6 fw-semibold text-capitalize lh-base mb-0" data-aos="fade-right">SNAPBIZ</h1>
                            <h1 class="fw-light text-capitalize mb-3" data-aos="fade-right">Business Consultant</h1>
                            <p class="lead text-muted lh-base mb-4" data-aos="fade-left">Better System, Better Profit Better Cash Flow, Better Businesses.</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="position-relative home-img text-center">
                            <img src="{{URL::asset('build/images/job-profile4.png')}}" alt="" class="user-img" width="70%">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end hero section -->

        <!-- start client section -->
        <div class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-5">
                            <h5 class="fs-20 fw-bold" data-aos="fade-down">Portofolio Audit & Accounting Service</h5>
                            <h5 class="fs-20" data-aos="fade-down">Under EY Public Accounting Firm</h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto1.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto2.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto3.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto4.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto5.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto6.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto7.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/porto/porto4.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end client section -->

        <!-- start services -->
        <section class="section pt-5" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">The Best Consultant Solution for Your Business Success</h1>
                            <p class="text-muted">Tingkatkan Kinerja Bisnis Anda bersama Kami! Kami adalah mitra terpercaya untuk pertumbuhan bisnis Anda. Dengan pengalaman kami dalam analisis data, strategi pemasaran, dan manajemen operasional, kami akan membantu Anda mencapai kesuksesan yang Anda inginkan. Dapatkan solusi yang disesuaikan dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-pencil-ruler-2-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Accounting & Bookkeeping</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini termasuk memelihara catatan keuangan yang baik dan akurat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-lightbulb-flash-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Planning / Financial Budgeting</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini berfokus pada perencanaan keuangan yang matang, termasuk penyusunan anggaran keuangan.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-stack-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Audit Internal & SOP</h5>
                                <p class="text-muted my-3 ff-secondary">Evaluasi proses internal perusahaan untuk memastikan efisiensi, kepatuhan dan manajemen risiko yang baik.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle" style="color: #fedf47">
                                        <i class="ri-settings-2-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Financial Statement Check & Audit.</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini melibatkan pemeriksaan dan audit laporan keuangan perusahaan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle" style="color: #fedf47">
                                        <i class="ri-slideshow-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Financial Management & Internal Control Analysis</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini berkaitan dengan manajemen keuangan perusahaan dan analisis pengendalian internal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle" style="color: #fedf47">
                                        <i class="ri-briefcase-5-line fs-36" style="color: #fedf47"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Financial, External Audit & Internal Report</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini mencakup pemeriksaan dan audit laporan keuangan internal dan eksternal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end services -->

        <div class="pb-5 mt-0 pt-0">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-2">
                            <h5 class="fs-20 fw-bold" data-aos="fade-down">Our Clients</h5>
                            <h5 class="fs-20" data-aos="fade-down">Total more than 50 Clients</h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client1.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client2.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client3.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client4.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client5.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client6.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client7.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client8.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- start features -->
        <section class="section bg-light py-5" id="features">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div>
                            <img src="{{ URL::asset('build/images/landing/features/img-4.png') }}" alt="" class="img-fluid mx-auto">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <div class="avatar-sm icon-effect mb-4">
                                <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                    <i class="ri-star-fill fs-36" style="color: #fedf47"></i>
                                </div>
                            </div>
                            <h3 class="mb-3 fs-20">Experience & Collaboration</h3>
                            <p class="mb-4 ff-secondary fs-16">Pengalaman kami menangani audit eksternal dan internal serta menyiapkan laporan keuangan untuk berbagai jenis perusahaan, mulai dari perbankan, sekuritas, ritel, transportasi, logistik, perdagangan, manufaktur, jasa dan lain-lain.</p>
                            <div class="row pt-3">
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>10+</h4>
                                        <p>Year Experience</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>50+</h4>
                                        <p>Clients</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4>10</h4>
                                        <p>Partners & Audit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start cta -->
        <section class="py-5 position-relative" style="background-color: #19587d">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Grow Up Your Business With SNAPBIZ</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="#" target="_blank" class="btn bg-gradient btn-warning"><i class="ri-whatsapp-fill align-middle me-1"></i> Call Now</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            <h5 class="fs-12 text-uppercase" style="color: #fedf47">System</h5>
                            <h4 class="mb-3">Accounting Experience</h4>
                            <p class="mb-4 ff-secondary">Proses terstruktur dan serangkaian prosedur yang digunakan oleh organisasi untuk mengelola data, transaksi, dan informasi keuangan mereka.</p>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill" style="color: #fedf47"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">SAP</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill" style="color: #fedf47"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Jurnal.id</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill" style="color: #fedf47"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Acumen</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="vstack gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill" style="color: #fedf47"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Accurate</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs icon-effect">
                                                    <div
                                                        class="avatar-title bg-transparent text-success rounded-circle h2">
                                                        <i class="ri-check-fill" style="color: #fedf47"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Paper.id</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                        <div>
                            <img src="{{ URL::asset('build/images/landing/features/img-5.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                    <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                        <div>
                            <img src="{{ URL::asset('build/images/landing/features/img-6.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted ps-lg-5">
                            <h5 class="fs-12 text-uppercase" style="color: #fedf47">Structure</h5>
                            <h4 class="mb-3">Well Documented</h4>
                            <p class="mb-4">Digunakan untuk menggambarkan sesuatu yang diketahui atau diketahui kebenarannya karena banyak dokumen yang menjelaskannya, buktikan, dll.</p>

                            <div class="vstack gap-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill" style="color: #fedf47"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Better System</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill" style="color: #fedf47"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Better Profit</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill" style="color: #fedf47"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Better Cash Flow</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill" style="color: #fedf47"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Better Businesses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <div class="mb-0 mt-0">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-5">
                            <h5 class="fs-20 fw-bold" data-aos="fade-down">Our Partners</h5>
                            <h5 class="fs-20" data-aos="fade-down">Tax, Training, VC, KTB UKM</h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/partners/partner1.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/partners/partner2.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/partners/partner3.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/partners/partner4.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- start Work Process -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Our Work Process</h3>
                            <p class="text-muted mb-4 ff-secondary">Konsultan bisnis adalah seorang profesional yang memberikan nasihat dan bantuan ahli kepada organisasi dalam berbagai aspek operasinya untuk membantu mereka meningkatkan efisiensi, produktivitas, dan profitabilitas.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line" style="color: #fedf47"></i>
                                </div>
                            </div>

                            <h5>Assessment</h5>
                            <p class="text-muted ff-secondary">Tahap awal konsultasi adalah mengidentifikasi masalah atau peluang yang perlu ditangani.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-user-follow-line" style="color: #fedf47"></i>
                                </div>
                            </div>

                            <h5>Solution Development</h5>
                            <p class="text-muted ff-secondary">Merancang rencana strategis yang mencakup tindakan dan solusi yang akan diambil untuk mengatasi masalah atau mencapai tujuan bisnis.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-book-mark-line" style="color: #fedf47"></i>
                                </div>
                            </div>

                            <h5>Support and Maintenance</h5>
                            <p class="text-muted ff-secondary">Konsultan dapat memberikan pelatihan kepada tim internal klien untuk memastikan pemahaman yang baik terhadap perubahan yang telah dilakukan.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Work Process -->

        <!-- start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                            <p class="text-muted mb-4 ff-secondary">Kami berkembang ketika memunculkan ide-ide inovatif, tetapi juga memahami bahwa konsep yang cerdas harus didukung dengan faucibus sapien odio yang terukur hasil.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4 text-center">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Phone:</h5>
                                <div class="ff-secondary fw-semibold">0811 843 1989</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Email:</h5>
                                <div class="ff-secondary fw-semibold">consultingsnapbiz@gmail. com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- Start footer -->
        <footer class="custom-footer bg-white py-5 position-relative text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-0 text-center">
                        <div>
                            <div>
                                <img src="{{ URL::asset('build/images/logo_snapbiz.png') }}" alt="logo light" height="100">
                            </div>
                            <div class="mt-4 fs-13">
                            <h3>World Best Consultant</h3>
                            <h5 class="ff-secondary">Berkolaborasi & mengembangkan perusahaan dengan perhatian organisasi yang detail & komprehensif, bekerja sama dengan tim/karyawan Anda untuk mengoptimalkan sistem dan keuangan perusahaan dengan cara yang terbukti berhasil.</h5>
                        </div>
                    </div>
                </div>

{{--                <div class="col-lg-7 ms-lg-auto">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-4 mt-4">--}}
{{--                            <h5 class="text-dark mb-0">Company</h5>--}}
{{--                            <div class="text-muted mt-3">--}}
{{--                                <ul class="list-unstyled ff-secondary footer-list fs-14">--}}
{{--                                    <li><a href="pages-profile" style="color: black;">About Us</a></li>--}}
{{--                                    <li><a href="pages-gallery" style="color: black;">Gallery</a></li>--}}
{{--                                    <li><a href="apps-projects-overview" style="color: black;">Projects</a></li>--}}
{{--                                    <li><a href="pages-timeline" style="color: black;">Timeline</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-4 mt-4">--}}
{{--                            <h5 class="text-dark mb-0">Apps Pages</h5>--}}
{{--                            <div class="text-muted mt-3">--}}
{{--                                <ul class="list-unstyled ff-secondary footer-list fs-14 text-dark">--}}
{{--                                    <li><a href="pages-pricing" style="color: black;">Calendar</a></li>--}}
{{--                                    <li><a href="apps-mailbox" style="color: black;">Mailbox</a></li>--}}
{{--                                    <li><a href="apps-chat" style="color: black;">Chat</a></li>--}}
{{--                                    <li><a href="apps-crm-deals" style="color: black;">Deals</a></li>--}}
{{--                                    <li><a href="apps-tasks-kanban" style="color: black;">Kanban Board</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-4 mt-4">--}}
{{--                            <h5 class="text-dark mb-0">Support</h5>--}}
{{--                            <div class="text-muted mt-3">--}}
{{--                                <ul class="list-unstyled ff-secondary footer-list fs-14 text-dark">--}}
{{--                                    <li><a href="pages-faqs" style="color: black;">FAQ</a></li>--}}
{{--                                    <li><a href="pages-faqs" style="color: black;">Contact</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

            <div class="row text-center text-sm-start align-items-center mt-5">
                <div class="col-sm-12 text-center">
                    <div>
                        <p class="copy-rights mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Omni Digital Technology - Copyright
                        </p>
                    </div>
                </div>
{{--                <div class="col-sm-6">--}}
{{--                    <div class="text-sm-end mt-3 mt-sm-0">--}}
{{--                        <ul class="list-inline mb-0 footer-social-link">--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <a href="javascript: void(0);" class="avatar-xs d-block">--}}
{{--                                    <div class="avatar-title rounded-circle">--}}
{{--                                        <i class="ri-facebook-fill"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <a href="javascript: void(0);" class="avatar-xs d-block">--}}
{{--                                    <div class="avatar-title rounded-circle">--}}
{{--                                        <i class="ri-github-fill"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <a href="javascript: void(0);" class="avatar-xs d-block">--}}
{{--                                    <div class="avatar-title rounded-circle">--}}
{{--                                        <i class="ri-linkedin-fill"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <a href="javascript: void(0);" class="avatar-xs d-block">--}}
{{--                                    <div class="avatar-title rounded-circle">--}}
{{--                                        <i class="ri-google-fill"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <a href="javascript: void(0);" class="avatar-xs d-block">--}}
{{--                                    <div class="avatar-title rounded-circle">--}}
{{--                                        <i class="ri-dribbble-line"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
    </div>
    </footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


@endsection
    @section('script')
        <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/landing.init.js') }}"></script>
@endsection
