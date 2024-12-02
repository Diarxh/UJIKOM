<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('test/assets/images/logos/seodashlogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('test/assets/css/styles.min.css') }}" />

    <!-- Fonts and icons -->
    <script src="{{ asset('tu/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/0d0cc84b42.js" crossorigin="anonymous"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <!-- Laravel Blade -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}

    {{-- TEST --}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('tu/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/kaiadmin.min.css') }}" />

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('test/assets/images/logos/logo-light.svg') }}" alt="" />
                    </a>
                    <div class="cursor-pointer close-btn d-xl-none d-block sidebartoggler" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Pengelolaan Data</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/students') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/teachers') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:square-academic-cap-2-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Guru & Karyawan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/classes') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/extracurricular') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:flag-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Ekstrakurikuler</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/finance') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:money-bag-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Keuangan</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Laporan & Pengaturan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/reports') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:document-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Laporan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/settings') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:settings-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Pengaturan</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"
                                class="fs-6"></iconify-icon>
                            <span class="hide-menu">AUTH</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/login') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/register') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:user-plus-rounded-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-7 mb-7 unlimited-access hide-menu bg-primary-subtle position-relative rounded-3">
                        <div class="d-flex">
                            <div class="unlimited-access-title me-3">
                                <h6 class="mb-6 fw-semibold fs-4 text-dark w-75">Upgrade to pro</h6>
                                <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy
                                    Pro</a>
                            </div>
                            <div class="unlimited-access-img">
                                <img src="{{ asset('test/assets/images/backgrounds/rocket.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->

                <!-- Main wrapper -->
                <div class="body-wrapper">
                    <!-- Header Start -->
                    <header class="app-header main-header">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item d-block d-xl-none">
                                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                        href="javascript:void(0)">
                                        <i class="ti ti-menu-2"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                        <i class="ti ti-bell-ringing"></i>
                                        <div class="notification bg-primary rounded-circle"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="px-0 navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="flex-row navbar-nav ms-auto align-items-center justify-content-end">
                                    <a href="#" target="_blank" class="btn btn-primary me-2"><span
                                            class="d-none d-md-block">Check Pro Version</span> <span
                                            class="d-block d-md-none">Pro</span></a>
                                    <a href="#" target="_blank" class="btn btn-success"><span
                                            class="d-none d-md-block">Download Free </span> <span
                                            class="d-block d-md-none">Free</span></a>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('test/assets/images/profile/user-1.jpg') }}" alt=""
                                                width="35" height="35" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="gap-2 d-flex align-items-center dropdown-item">
                                                    <i class="ti ti-user fs-6"></i>
                                                    <p class="mb-0 fs-3">My Profile</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="gap-2 d-flex align-items-center dropdown-item">
                                                    <i class="ti ti-mail fs-6"></i>
                                                    <p class="mb-0 fs-3">My Account</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="gap-2 d-flex align-items-center dropdown-item">
                                                    <i class="ti ti-list-check fs-6"></i>
                                                    <p class="mb-0 fs-3">My Task</p>
                                                </a>
                                                <a href="./authentication-login.html"
                                                    class="mx-3 mt-2 btn btn-outline-primary d-block">Logout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <!-- Header End -->
                    @yield('content') <!-- Tempat untuk konten halaman -->
                </div>
            </div>
            {{-- <script src="{{ asset('test/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
            <script src="{{ asset('test/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('test/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
            <script src="{{ asset('test/assets/libs/simplebar/dist/simplebar.js') }}"></script>
            <script src="{{ asset('test/assets/js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('test/assets/js/app.min.js') }}"></script>
            <script src="{{ asset('test/assets/js/dashboard.js') }}"></script>
        </div>
</body>

</html>
