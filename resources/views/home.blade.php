@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="mb-4">
                            Selamat Datang di <br>
                            Manajemen Sekolah <br>
                            <span class="accent-text">Kami</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            Kelola semua aspek sekolah Anda dengan mudah dan efisien. Sistem kami dirancang untuk membantu
                            Anda mengelola siswa, guru, mata pelajaran, dan banyak lagi dengan satu platform.
                        </p>

                        <div class="hero-buttons">
                            <a href="#features" class="mx-1 btn btn-primary me-0 me-sm-2">Jelajahi Fitur</a>
                            <a href="#contact" class="mt-2 btn btn-link mt-sm-0">
                                <i class="bi bi-telephone-fill me-1"></i>
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('/img/img/home.jpg') }}" alt="Ilustrasi Manajemen Sekolah" class="img-fluid">

                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <!-- Ganti dengan path yang sesuai ke gambar avatar siswa/guru -->
                                <img src="{{ asset('assets/img/avatar-1.webp') }}" alt="Siswa 1" class="avatar">
                                <img src="{{ asset('assets/img/avatar-2.webp') }}" alt="Siswa 2" class="avatar">
                                <img src="{{ asset('assets/img/avatar-3.webp') }}" alt="Guru 1" class="avatar">
                                <img src="{{ asset('assets/img/avatar-4.webp') }}" alt="Guru 2" class="avatar">
                                <img src="{{ asset('assets/img/avatar-5.webp') }}" alt="Kepala Sekolah" class="avatar">
                                <span class="avatar more">12+</span>
                            </div>
                            <p class="mt-2 mb-0">12,000+ siswa dan guru terdaftar di sistem kami</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 row stats-row gy-4" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-content">
                            <h4>1000+</h4>
                            <p class="mb-0">Siswa Terdaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <div class="stat-content">
                            <h4>50+</h4>
                            <p class="mb-0">Guru Terdaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="stat-content">
                            <h4>20+</h4>
                            <p class="mb-0">Mata Pelajaran</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="stat-content">
                            <h4>100+</h4>
                            <p class="mb-0">Prestasi Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    {{--  TAMBAHAN PADA HOME   --}}
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">LEBIH BANYAK TENTANG KAMI</span>
                    <h2 class="about-title">Inovasi di Bidang Pendidikan</h2>
                    <p class="about-description">Kami hadir untuk membantu Anda mengelola semua aspek sekolah dengan efisien
                        dan mudah. Dengan sistem manajemen sekolah kami, Anda dapat mengelola data siswa, guru, mata
                        pelajaran, dan prestasi siswa dengan satu platform yang handal.</p>

                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Manajemen data siswa dengan mudah</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pengelolaan guru dan staf secara efisien</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pengelolaan mata pelajaran dan jadwal</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Pengelolaan prestasi siswa dan guru</li>
                                <li><i class="bi bi-check-circle-fill"></i> Komunikasi yang lebih baik antara guru dan orang
                                    tua</li>
                                <li><i class="bi bi-check-circle-fill"></i> Laporan dan analisis data yang cepat dan akurat
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="gap-3 profile d-flex align-items-center">
                                    <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                                    <div>
                                        <h4 class="profile-name">John Doe</h4>
                                        <p class="profile-position">CEO &amp; Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="gap-2 contact-info d-flex align-items-center">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <p class="contact-label">Hubungi kami kapan saja</p>
                                        <p class="contact-number">+123 456-789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <img src="assets/img/about-5.webp" alt="Manajemen Sekolah"
                                class="img-fluid main-image rounded-4">
                            <img src="assets/img/about-2.webp" alt="Pengelolaan Data"
                                class="img-fluid small-image rounded-4">
                        </div>
                        <div class="experience-badge floating">
                            <h3>10+ <span>Tahun</span></h3>
                            <p>Pengalaman di bidang manajemen sekolah</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fitur Unggulan</h2>
            <p>Manajemen sekolah yang efisien dan mudah digunakan.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="d-flex justify-content-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <h4>Manajemen Siswa</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <h4>Manajemen Guru</h4>
                        </a><!-- End tab nav item -->

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <h4>Pelaporan & Analisa</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="row">
                        <div class="order-2 mt-3 col-lg-6 order-lg-1 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Kelola Data Siswa dengan Mudah</h3>
                            <p class="fst-italic">
                                Input, update, dan akses data siswa secara cepat dan efisien. Lacak kehadiran, nilai
                                akademik, dan informasi pribadi siswa dengan mudah.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Input data siswa baru dengan cepat dan
                                        akurat.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Lacak kehadiran siswa secara real-time.</span>
                                </li>
                                <li><i class="bi bi-check2-all"></i> <span>Pantau nilai akademik siswa dan
                                        perkembangannya.</span></li>
                            </ul>
                        </div>
                        <div class="order-1 text-center col-lg-6 order-lg-2">
                            <img src="assets/img/siswa.jpg" alt="Manajemen Siswa" class="img-fluid">
                            <!-- Ganti dengan gambar yang sesuai -->
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-2">
                    <div class="row">
                        <div class="order-2 mt-3 col-lg-6 order-lg-1 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Manajemen Guru yang Efisien</h3>
                            <p class="fst-italic">
                                Kelola data guru, jadwal mengajar, dan informasi lainnya dengan mudah. Tingkatkan efisiensi
                                administrasi sekolah.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Kelola jadwal mengajar guru secara
                                        efektif.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Akses informasi guru dengan cepat dan
                                        mudah.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Pengelolaan data kepegawaian yang
                                        terintegrasi.</span></li>
                            </ul>
                        </div>
                        <div class="order-1 text-center col-lg-6 order-lg-2">
                            <img src="assets/img/guru.jpg" alt="Manajemen Guru" class="img-fluid">
                            <!-- Ganti dengan gambar yang sesuai -->
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-3">
                    <div class="row">
                        <div class="order-2 mt-3 col-lg-6 order-lg-1 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Laporan dan Analisa Data yang Komprehensif</h3>
                            <p class="fst-italic">
                                Dapatkan laporan dan analisa data yang akurat dan mudah dipahami untuk mendukung pengambilan
                                keputusan yang tepat.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Laporan kehadiran siswa dan guru.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Analisa nilai akademik siswa.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Laporan keuangan sekolah.</span></li>
                            </ul>
                        </div>
                        <div class="order-1 text-center col-lg-6 order-lg-2">
                            <img src="assets/img/laporan.jpg" alt="Pelaporan & Analisa" class="img-fluid">
                            <!-- Ganti dengan gambar yang sesuai -->
                        </div>
                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-box orange">
                        <i class="bi bi-people-fill"></i>
                        <h4>Manajemen Siswa</h4>
                        <p>Kelola data siswa dengan efisien, termasuk kehadiran, nilai akademik, dan informasi lainnya.</p>
                    </div>
                </div><!-- End Feature Box-->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-box blue">
                        <i class="bi bi-person-badge-fill"></i>
                        <h4>Manajemen Guru</h4>
                        <p>Administrasi guru yang terintegrasi, mulai dari jadwal mengajar hingga data kepegawaian.</p>
                    </div>
                </div><!-- End Feature Box-->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-box green">
                        <i class="bi bi-book-half"></i>
                        <h4>Kurikulum dan Mata Pelajaran</h4>
                        <p>Pengelolaan kurikulum dan mata pelajaran untuk memastikan kualitas pendidikan.</p>
                    </div>
                </div><!-- End Feature Box-->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-box red">
                        <i class="bi bi-clipboard-data"></i>
                        <h4>Laporan dan Analisa</h4>
                        <p>Hasilkan laporan yang akurat dan analisa data untuk pengambilan keputusan.</p>
                    </div>
                </div><!-- End Feature Box-->

            </div>

        </div>

    </section><!-- /Features Cards Section -->

    <!-- Features 2 Section -->
    <section id="features-2" class="features-2 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">

                <div class="col-lg-4">

                    <div class="mb-5 feature-item text-end" data-aos="fade-right" data-aos-delay="200">
                        <div class="gap-4 d-flex align-items-center justify-content-end">
                            <div class="feature-content">
                                <h3>Akses dari Mana Saja</h3>
                                <p>Aplikasi dapat diakses dari berbagai perangkat, memastikan fleksibilitas bagi pengguna.
                                </p>
                            </div>
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-display"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <div class="mb-5 feature-item text-end" data-aos="fade-right" data-aos-delay="300">
                        <div class="gap-4 d-flex align-items-center justify-content-end">
                            <div class="feature-content">
                                <h3>Desain yang Intuitif</h3>
                                <p>Antarmuka pengguna yang mudah dipahami, membuat navigasi dan penggunaan aplikasi lebih
                                    mudah.</p>
                            </div>
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-ui-checks-grid"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                        <div class="gap-4 d-flex align-items-center justify-content-end">
                            <div class="feature-content">
                                <h3>Keamanan Data</h3>
                                <p>Data siswa dan guru dilindungi dengan enkripsi dan protokol keamanan terkini.</p>
                            </div>
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-center phone-mockup">
                        <img src="assets/img/manajemen-sekolah-screen.jpg" alt="Phone Mockup" class="img-fluid">
                        <!-- Ganti dengan gambar yang sesuai -->
                    </div>
                </div><!-- End Phone Mockup -->

                <div class="col-lg-4">

                    <div class="mb-5 feature-item" data-aos="fade-left" data-aos-delay="200">
                        <div class="gap-4 d-flex align-items-center">
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-cloud-check"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Cloud-Based</h3>
                                <p>Data disimpan di cloud, memungkinkan akses dari mana saja dan backup data yang aman.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <div class="mb-5 feature-item" data-aos="fade-left" data-aos-delay="300">
                        <div class="gap-4 d-flex align-items-center">
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-arrows-angle-expand"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Skalabilitas</h3>
                                <p>Aplikasi dapat diperluas sesuai dengan kebutuhan sekolah yang terus berkembang.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                        <div class="gap-4 d-flex align-items-center">
                            <div class="flex-shrink-0 feature-icon">
                                <i class="bi bi-chat-left-text"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Komunikasi yang Efektif</h3>
                                <p>Platform komunikasi antara guru, siswa, dan orang tua untuk informasi dan koordinasi.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                </div>
            </div>

        </div>

    </section><!-- /Features 2 Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row content justify-content-center align-items-center position-relative">
                <div class="mx-auto text-center col-lg-8">
                    <h2 class="mb-4 display-4">Tingkatkan Efisiensi Manajemen Sekolah Anda</h2>
                    <p class="mb-4">Sederhanakan pengelolaan sekolah Anda dengan sistem manajemen yang terintegrasi dan
                        mudah digunakan. Coba sekarang!</p>
                    <a href="#" class="btn btn-cta">Coba Demo Gratis</a> <!-- Ganti link sesuai kebutuhan -->
                </div>

                <!-- Abstract Background Elements (dipertahankan) -->
                <div class="shape shape-1">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z"
                            transform="translate(100 100)"></path>
                    </svg>
                </div>
                <!-- ... (elemen latar belakang lainnya dipertahankan) ... -->
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Clients Section (dipertahankan, hanya ganti gambar jika perlu) -->
    <section id="clients" class="clients section">
        <!-- ... (isi bagian ini sama, hanya ganti gambar jika diperlukan) ... -->
    </section><!-- /Clients Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimoni</h2>
            <p>Apa kata mereka yang telah menggunakan aplikasi manajemen sekolah kami?</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row g-5">
                <!-- Testimoni 1 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/kepsek1.jpg" class="testimonial-img" alt="Kepala Sekolah 1">
                        <!-- Ganti dengan gambar yang relevan -->
                        <h3>Bu Ani Suciati, M.Pd.</h3>
                        <h4>Kepala Sekolah, SMA Negeri 1 Jakarta</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Aplikasi ini sangat membantu dalam mengelola sekolah. Sistemnya yang terintegrasi membuat
                                pekerjaan administrasi jauh lebih efisien.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <!-- Tambahkan testimoni lain di sini -->
            </div>
        </div>
    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="text-center stats-item w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Sekolah Terdaftar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="text-center stats-item w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="50000" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Siswa Terdaftar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="text-center stats-item w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Guru Terdaftar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="text-center stats-item w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tahun Pengalaman</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->
@endsection
