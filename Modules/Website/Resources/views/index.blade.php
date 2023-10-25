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
                    <img src="{{ URL::asset('build/images/logo/logo_snapbiz_black.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="70">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" href="#hero">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#services">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#contact">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" href="#features">Pengalaman & Kolaborasi</a>
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
                            <h1 class="fw-light text-capitalize mb-3" data-aos="fade-right">Konsultasi Bisnis</h1>
                            <p class="lead text-muted lh-base mb-4" data-aos="fade-left" style="font-size: 1.3rem">Sistem Lebih Baik, Keuntungan Lebih Baik, Arus Kas Lebih Baik, Bisnis Lebih Baik</p>
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

        <!-- our partner -->
        <div class="mb-0 mt-0 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <h5 class="fs-20 fw-bold" data-aos="fade-down">Mitra Kami</h5>
                            <h5 class="fs-20" data-aos="fade-down">Pajak, Pelatihan, VC, KTB UKM</h5>

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
        <!-- end our partner -->

        <!-- start services -->
        <section class="section pt-5" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">Mitrakan Kami dalam Pertumbuhan Bisnismu</h1>
                            <p class="text-muted">Kami adalah mitra terpercaya yang akan membantu Anda mencapai tingkat keunggulan. Dengan pengalaman luas dalam analisis data, strategi pemasaran, dan manajemen operasional, kami akan membantu Anda mencapai tujuan bisnis Anda. Dapatkan solusi yang disesuaikan dengan kebutuhan Anda hari ini.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row g-3" style="justify-content: center">
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <img src="{{ URL::asset('build/images/services/audit.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Akuntansi & Pembukuan</h5>
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
                                        <img src="{{ URL::asset('build/images/services/perencanaan.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Perencanaan / Penganggaran Keuangan</h5>
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
                                        <img src="{{ URL::asset('build/images/services/sop.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
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
                                        <img src="{{ URL::asset('build/images/services/training.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Pemeriksaan & Audit Laporan Keuangan.</h5>
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
                                        <img src="{{ URL::asset('build/images/services/analisis.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Analisis Manajemen Keuangan & Pengendalian Internal</h5>
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
                                        <img src="{{ URL::asset('build/images/services/report.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="30">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Laporan Keuangan</h5>
                                <p class="text-muted my-3 ff-secondary">Layanan ini mencakup pemeriksaan dan audit laporan keuangan untuk kepentingan bersama.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle" style="color: #fedf47">
                                        <img src="{{ URL::asset('build/images/services/manajemen.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="65">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Pelatihan, Pendampingan, Konsultasi Keuangan untuk Karyawan dan Manajemen</h5>
                                <p class="text-muted my-3 ff-secondary">Pelatihan dan pendampingan karyawan dan manajemen dalam hal pengetahuan dan keterampilan keuangan.</p>
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

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            <h5 class="fs-12 text-uppercase" style="color: #38bbe5;font-weight: bold;">Sistem</h5>
                            <h4 class="mb-3">Pengalaman Akuntansi</h4>
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
                            <h5 class="fs-12 text-uppercase" style="color: #38bbe5;font-weight: bold;">Struktur</h5>
                            <h4 class="mb-3">Dokumentasi yang Baik</h4>
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
                                        <p class="mb-0">Sistem yang Lebih Baik</p>
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
                                        <p class="mb-0">Keuntungan Lebih Baik</p>
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
                                        <p class="mb-0">Arus Kas yang Lebih Baik</p>
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
                                        <p class="mb-0">Bisnis yang Lebih Baik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted">
                            <h5 class="fs-12 text-uppercase" style="color: #38bbe5;font-weight: bold;">Kelebihan</h5>
                            <h4 class="mb-3">Mengapa Memilih Kami Untuk Konsultasi Bisnis Anda?</h4>
                            <p class="mb-4 ff-secondary">Dengan memilih kami untuk konsultasi bisnis Anda, Anda akan mendapatkan akses ke sumber daya, keahlian, dan pengalaman yang diperlukan untuk membantu bisnis Anda tumbuh dan berkembang.</p>

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
                                                <h5 class="fs-14 mb-0">Reputasi Teruji</h5>
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
                                                <h5 class="fs-14 mb-0">Keahlian Multidisiplin</h5>
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
                                                <h5 class="fs-14 mb-0">Komitmen</h5>
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
                            <img src="{{ URL::asset('build/images/landing/features/img-7.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start cta -->
        <section class="py-5 position-relative" id="contact" style="background-color: #013556 !important; ">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Kembangkan Bisnis Anda Bersama SNAPBIZ</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://wa.link/bvvuib" target="_blank" class="btn bg-gradient btn-info"><i class="ri-whatsapp-fill align-middle me-1"></i> Hubungi Sekarang</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start Work Process -->
        <section class="section pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Proses Kerja Kami</h3>
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

        <!-- start features -->
        <section class="section py-5" id="features">
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
                            <h3 class="mb-3 fs-20">Pengalaman & Kolaborasi</h3>
                            <p class="mb-4 ff-secondary fs-16">Pengalaman kami menangani audit eksternal dan internal serta menyiapkan laporan keuangan untuk berbagai jenis perusahaan, mulai dari perbankan, sekuritas, ritel, transportasi, logistik, perdagangan, manufaktur, jasa dan lain-lain.</p>
                            <div class="row pt-3">
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>15+ Thn</h4>
                                        <p>Pengalaman</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <h4>50+</h4>
                                        <p>Klien</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <h4>10</h4>
                                        <p>Mitra & Audit</p>
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

        <!-- start clients -->
        <div class="pt-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-2">
                            <h5 class="fs-20 fw-bold" data-aos="fade-down">Klien Kami</h5>
                            <h5 class="fs-20" data-aos="fade-down">Total lebih dari 50 Klien</h5>

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
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client9.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client10.png') }}" alt="client-img"
                                                 class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="{{ URL::asset('build/images/clients/client11.png') }}" alt="client-img"
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
        <!-- end clients -->

        <!-- Start footer -->
        <footer class="custom-footer bg-white py-5 position-relative text-dark" style="background-color: #013556 !important; ">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5 mt-0 text-center">
                        <div>
                            <div>
                                <img src="{{ URL::asset('build/images/logo/logo_snapbiz_white.png') }}" alt="logo light" height="100">
                            </div>
                            <div class="mt-4 fs-13" >
                                <h4 style="color: #fff !important;">Konsultan Terbaik bagi Pertumbuhan Bisnis</h4>
                                <p style="color: #fff !important; text-align: justify" >Berkolaborasi & mengembangkan perusahaan dengan perhatian organisasi yang detail & komprehensif dan bekerjasama dengan tim/karyawan Anda untuk mengoptimalkan sistem dan keuangan perusahaan dengan cara yang terbukti berhasil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-7 pt-5">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class=" mb-4 " style="color: #fff !important;">Kami berkembang ketika memunculkan ide-ide inovatif, tetapi juga memahami bahwa konsep yang cerdas harus didukung dengan hasil yang terukur</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div>
                                <div class="" >
                                    <h5 class="fs-13 text-uppercase" style="color: #fff !important;">Telepon:</h5>
                                    <a href="https://wa.link/bvvuib">
                                        <div class=" fw-semibold" style="color: #fff !important;">0811 843 1989</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div>
                                <div class="">
                                    <h5 class="fs-13 text-uppercase" style="color: #fff !important;">Email:</h5>
                                    <a href="https://mail.google.com/mail/u/0/?fs=1&to=amanda.setiadi@snapbiz.com&su=&body=&bcc=&tf=cm">
                                        <div class="fw-semibold" style="color: #fff !important;">amanda.setiadi@snapbiz.com</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div>
                                <div class="">
                                    <h5 class="fs-13 text-uppercase" style="color: #fff !important;">Instagram:</h5>
                                    <a href="https://www.instagram.com/snapbizconsulting/">
                                        <div class="fw-semibold" style="color: #fff !important;">@snapbizconsulting</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row text-center text-sm-start align-items-center mt-5">--}}
{{--                <div class="col-sm-12 text-center">--}}
{{--                    <div>--}}
{{--                        <p class="copy-rights mb-0" style="color: #fff !important;">--}}
{{--                            <script>--}}
{{--                                document.write(new Date().getFullYear())--}}
{{--                            </script> © Omni Digital Technology - Copyright--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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
