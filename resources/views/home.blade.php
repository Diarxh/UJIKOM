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
              Kelola semua aspek sekolah Anda dengan mudah dan efisien.  Sistem kami dirancang untuk membantu Anda mengelola siswa, guru, mata pelajaran, dan banyak lagi dengan satu platform.
            </p>

            <div class="hero-buttons">
              <a href="#features" class="btn btn-primary me-0 me-sm-2 mx-1">Jelajahi Fitur</a>
              <a href="#contact" class="btn btn-link mt-2 mt-sm-0">
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
              <p class="mb-0 mt-2">12,000+ siswa dan guru terdaftar di sistem kami</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
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
          <span class="about-meta">MORE ABOUT US</span>
          <h2 class="about-title">Voluptas enim suscipit temporibus</h2>
          <p class="about-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

          <div class="row feature-list-wrapper">
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet</li>
                <li><i class="bi bi-check-circle-fill"></i> Consectetur adipiscing elit</li>
                <li><i class="bi bi-check-circle-fill"></i> Sed do eiusmod tempor</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Incididunt ut labore et</li>
                <li><i class="bi bi-check-circle-fill"></i> Dolore magna aliqua</li>
                <li><i class="bi bi-check-circle-fill"></i> Ut enim ad minim veniam</li>
              </ul>
            </div>
          </div>

          <div class="info-wrapper">
            <div class="row gy-4">
              <div class="col-lg-5">
                <div class="profile d-flex align-items-center gap-3">
                  <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                  <div>
                    <h4 class="profile-name">Mario Smith</h4>
                    <p class="profile-position">CEO &amp; Founder</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="contact-info d-flex align-items-center gap-2">
                  <i class="bi bi-telephone-fill"></i>
                  <div>
                    <p class="contact-label">Call us anytime</p>
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
              <img src="assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
              <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
            </div>
            <div class="experience-badge floating">
              <h3>15+ <span>Years</span></h3>
              <p>Of experience in business service</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

@endsection
