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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TEST --}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('tu/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/kaiadmin.min.css') }}" />

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
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
                            <a class="sidebar-link side-dash" href="{{ url('/dashboard') }}" aria-expanded="false">
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
                            <a class="sidebar-link" href="##" data-file="manajemen-siswa" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="##" data-file="manajemen-guru" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:square-academic-cap-2-bold-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Guru & Karyawan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="##" data-file="manajemen-kelas" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="##" data-file="manajemen-Ekstrakurikuler"
                                aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:flag-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Ekstrakurikuler</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" hhref="##" data-file="manajemen-keuangan" aria-expanded="false">
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
                            <a class="sidebar-link" href="##" data-file="manajemen-laporan" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:document-text-bold-duotone"
                                        class="fs-6"></iconify-icon>
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
                                class="fs-6">
                            </iconify-icon>
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
                                    <iconify-icon icon="solar:user-plus-rounded-bold-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-7 mb-7 unlimited-access hide-menu bg-primary-subtle position-relative rounded-3">
                        <div class="d-flex">
                            <div class="unlimited-access-title me-3">
                                <h6 class="mb-6 fw-semibold fs-4 text-dark w-75">Upgrade to pro</h6>
                                <a href="##" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy
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
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const sidebar = document.getElementById('sidebarnav');
                        const workspace = document.querySelector('.container-fluid');

                        console.log('Sidebar dan Workspace telah diinisialisasi');

                        sidebar.addEventListener('click', function(event) {
                            console.log('Sidebar telah diklik');

                            if (event.target.tagName === 'A' && event.target.hasAttribute('data-file')) {
                                console.log('Link dengan data-file telah diklik');

                                const file = event.target.getAttribute('data-file');
                                console.log(`File yang akan di-load: ${file}`);

                                loadFile(file);
                            }
                        });

                        function loadFile(file) {
                            console.log(`Meng-load file: ${file}`);

                            const url = `/resource/${file}`;
                            console.log(`URL yang akan di-load: ${url}`);

                            fetch(url)
                                .then(response => {
                                    console.log('Response telah diterima');

                                    return response.text();
                                })
                                .then(content => {
                                    console.log('Content telah diterima');

                                    workspace.innerHTML = content;
                                    console.log('Content telah di-load ke workspace');
                                })
                                .catch(error => {
                                    console.error('Error telah terjadi:', error);
                                });
                        }
                    });

                    document.addEventListener('DOMContentLoaded', (event) => {
                        // Menambahkan ikon dari Iconify
                        document.querySelectorAll('.iconify').forEach(function(icon) {
                            icon.style.color = icon.getAttribute('data-icon-color') || '#000';
                            icon.style.width = icon.getAttribute('data-icon-width') || '24px';
                            icon.style.height = icon.getAttribute('data-icon-height') || '24px';
                        });
                    });
                </script>

            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">




                <div class="row">
                    <div class="pt-2 pb-4 d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h3 class="mb-3 fw-bold">Manajemen Siswa</h3>
                            <h6 class="mb-2 op-7">Sistem Manajemen Siswa Sekolah</h6>
                        </div>
                        <div class="py-2 ms-md-auto py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Kelola Siswa</a>
                            <a href="#" class="btn btn-primary btn-round">Tambah Siswa</a>
                        </div>
                    </div>
                    <div class="row row-card-no-pd">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Jumlah Siswa</b></h6>
                                            <p class="text-muted">Jumlah siswa di sekolah</p>
                                        </div>
                                        <h4 class="text-info fw-bold">120</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="mb-0 text-muted">Perubahan</p>
                                        <p class="mb-0 text-muted">75%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Jumlah Guru</b></h6>
                                            <p class="text-muted">Jumlah guru di sekolah</p>
                                        </div>
                                        <h4 class="text-success fw-bold">20</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-25" role="progressbar"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="mb-0 text-muted">Perubahan</p>
                                        <p class="mb-0 text-muted">25%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Jumlah Kelas</b></h6>
                                            <p class="text-muted">Jumlah kelas di sekolah</p>
                                        </div>
                                        <h4 class="text-danger fw-bold">10</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="mb-0 text-muted">Perubahan</p>
                                        <p class="mb-0 text-muted">50%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Jumlah Fakultas</b></h6>
                                            <p class="text-muted">Jumlah fakultas di sekolah</p>
                                        </div>
                                        <h4 class="text-secondary fw-bold">5</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-secondary w-25" role="progressbar"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between">
                                        <p class="mb-0 text-muted">Perubahan</p>
                                        <p class="mb-0 text-muted">25%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TAMPILAN PERINGKAT  --}}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Peringkat Siswa</div>
                                </div>
                                <div class="p-0 card-body">
                                    <div class="table-responsive">
                                        <!-- Projects table -->
                                        <table class="table mb-0 align-items-center">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Nama Siswa</th>
                                                    <th scope="col">Kelas</th>
                                                    <th scope="col">Rata-Rata Nilai</th>
                                                    <th scope="col">Peringkat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Andi</th>
                                                    <td>XI IPA 1</td>
                                                    <td>85</td>
                                                    <td>
                                                        <i class="fas fa-trophy text-success me-3"></i>
                                                        1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Budi</th>
                                                    <td>XI IPA 2</td>
                                                    <td>80</td>
                                                    <td>
                                                        <i class="fas fa-medal text-warning me-3"></i>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cici</th>
                                                    <td>XI IPS 1</td>
                                                    <td>78</td>
                                                    <td>
                                                        <i class="fas fa-certificate text-info me-3"></i>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dodi</th>
                                                    <td>XI IPS 2</td>
                                                    <td>75</td>
                                                    <td>
                                                        <i class="fas fa-award text-primary me-3"></i>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Eva</th>
                                                    <td>XI Bahasa 1</td>
                                                    <td>70</td>
                                                    <td>
                                                        <i class="fas fa-star text-secondary me-3"></i>
                                                        5
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Siswa Berprestasi</div>
                                </div>
                                <div class="pb-0 card-body">
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="{{ asset('tu/assets/img/profile.jpg') }}" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="flex-1 pt-1 ms-2">
                                            <h6 class="mb-1 fw-bold">Andi</h6>
                                            <small class="text-muted">XI IPA 1</small>
                                        </div>
                                        <div class="d-flex ms-auto align-items-center">
                                            <h4 class="text-info fw-bold">Rata-Rata Nilai: 85</h4>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="{{ asset('tu/assets/img/profile.jpg') }}" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="flex-1 pt-1 ms-2">
                                            <h6 class="mb-1 fw-bold">Budi</h6>
                                            <small class="text-muted">XI IPA 2</small>
                                        </div>
                                        <div class="d-flex ms-auto align-items-center">
                                            <h4 class="text-info fw-bold">Rata-Rata Nilai: 80</h4>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="pull-in">
                                        <canvas id="topSiswaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- table siswa --}}
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Siswa</h4>
                                    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                        data-bs-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Tambah Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="border-0 modal-header">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold"> Tambah</span>
                                                    <span class="fw-light"> Siswa </span>
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">
                                                    Tambah siswa baru menggunakan form ini, pastikan Anda mengisi semua
                                                    field
                                                </p>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Nama Siswa</label>
                                                                <input id="addName" type="text"
                                                                    class="form-control" placeholder="Nama Siswa" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pe-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Tanggal Lahir</label>
                                                                <input id="addDob" type="date"
                                                                    class="form-control"
                                                                    placeholder="Tanggal Lahir" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Kelas</label>
                                                                <input id="addClass" type="text"
                                                                    class="form-control" placeholder="Kelas" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Jenis Kelamin</label>
                                                                <input id="addGender" type="text"
                                                                    class="form-control"
                                                                    placeholder="Jenis Kelamin" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pe-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Alamat</label>
                                                                <input id="addAddress" type="text"
                                                                    class="form-control" placeholder="Alamat" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>No. Telepon</label>
                                                                <input id="addPhone" type="text"
                                                                    class="form-control" placeholder="No. Telepon" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Email</label>
                                                                <input id="addEmail" type="email"
                                                                    class="form-control" placeholder="Email" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="border-0 modal-footer">
                                                <button type="button" id="addRowButton" class="btn btn-primary">
                                                    Tambah
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">
                                                    Tutup
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="border-0 modal-header">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold"> Edit</span>
                                                    <span class="fw-light"> Siswa </span>
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">
                                                    Edit siswa menggunakan form ini, pastikan Anda mengisi semua field
                                                </p>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Nama Siswa</label>
                                                                <input id="editName" type="text"
                                                                    class="form-control" placeholder="Nama Siswa" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pe-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Tanggal Lahir</label>
                                                                <input id="editDob" type="date"
                                                                    class="form-control"
                                                                    placeholder="Tanggal Lahir" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Kelas</label>
                                                                <input id="editClass" type="text"
                                                                    class="form-control" placeholder="Kelas" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Jenis Kelamin</label>
                                                                <input id="editGender" type="text"
                                                                    class="form-control"
                                                                    placeholder="Jenis Kelamin" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pe-0">
                                                            <div class="form-group form-group-default">
                                                                <label>Alamat</label>
                                                                <input id="editAddress" type="text"
                                                                    class="form-control" placeholder="Alamat" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>No. Telepon</label>
                                                                <input id="editPhone" type="text"
                                                                    class="form-control" placeholder="No. Telepon" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Email</label>
                                                                <input id="editEmail" type="email"
                                                                    class="form-control" placeholder="Email" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="border-0 modal-footer">
                                                <button type="button" id="editRowButton" class="btn btn-primary">
                                                    Simpan
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">
                                                    Tutup
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="deleteRowModal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="border-0 modal-header">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold"> Hapus</span>
                                                    <span class="fw-light"> Siswa </span>
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="small">
                                                    Apakah Anda yakin ingin menghapus siswa ini?
                                                </p>
                                            </div>
                                            <div class="border-0 modal-footer">
                                                <button type="button" id="deleteRowButton" class="btn btn-danger">
                                                    Hapus
                                                </button>
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">
                                                    Batalkan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table id="add-row" class="table display table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                                <tr data-id="{{ $student->id }}">
                                                    <td>{{ $student->name }}</td>
                                                    <td>{{ $student->class_id }}</td>
                                                    <td>{{ $student->gender }}</td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <button type="button"
                                                                class="btn btn-link btn-primary btn-lg"
                                                                data-bs-toggle="modal" data-bs-target="#editRowModal"
                                                                data-id="{{ $student->id }}"
                                                                data-name="{{ $student->name }}"
                                                                data-class-id="{{ $student->class_id }}"
                                                                data-gender="{{ $student->gender }}">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-link btn-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRowModal"
                                                                data-id="{{ $student->id }}">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Core JS Files -->
                            <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
                            <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
                            <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>
                            <script>
                                // JavaScript
                                $(document).ready(function() {
                                    console.log("Document ready");
                                    // Debug untuk memeriksa apakah jQuery dan DataTable terdeteksi
                                    console.log("jQuery version:", $.fn.jquery); // Output: 3.7.1
                                    console.log("DataTable plugin exists:", typeof $.fn.DataTable === "function"); // Output: true

                                    var action =
                                        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

                                    $("#addRowButton").click(function() {
                                        console.log("Tambah siswa button clicked");
                                        var name = $("#addName").val();
                                        var dob = $("#addDob").val();
                                        var classId = $("#addClass").val();
                                        var gender = $("#addGender").val();
                                        var address = $("#addAddress").val();
                                        var phone = $("#addPhone").val();
                                        var email = $("#addEmail").val();

                                        console.log("Data siswa: ", name, dob, classId, gender, address, phone, email);
                                        $.ajax({
                                            type: "POST",
                                            url: "/siswa/tambah",
                                            data: {
                                                name: name,
                                                dob: dob,
                                                class_id: classId,
                                                gender: gender,
                                                address: address,
                                                phone: phone,
                                                email: email,
                                            },
                                            success: function(data) {
                                                console.log("Data siswa berhasil ditambahkan: ", data);
                                                console.log("Drawing table...");
                                                $("#add-row").dataTable().fnDraw();
                                                $("#addRowModal").modal("hide");
                                            },
                                            error: function(xhr, status, error) {
                                                console.log("Error menambahkan siswa: ", xhr.responseText);
                                            }
                                        });
                                    });
                                    $("#deleteRowButton").click(function() {
                                        var id = $(this).closest("tr").data("id");
                                        $.ajax({
                                            type: "DELETE",
                                            url: "/siswa/delete/" + id,
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            success: function(data) {
                                                console.log(data);
                                                $("#add-row").dataTable().fnDraw();
                                                $("#deleteRowModal").modal("hide");
                                            },
                                            error: function(xhr, status, error) {
                                                console.log(xhr.responseText);
                                            }
                                        });
                                    });


                                    $("#editRowButton").click(function() {
                                        console.log("Edit siswa button clicked");
                                        var id = $(this).data("id");
                                        var name = $("#editName").val();
                                        var dob = $("#editDob").val();
                                        var classId = $("#editClass").val();
                                        var gender = $("#editGender").val();
                                        var address = $("#editAddress").val();
                                        var phone = $("#editPhone").val();
                                        var email = $("#editEmail").val();

                                        console.log("Data siswa: ", id, name, dob, classId, gender, address, phone, email);
                                        $.ajax({
                                            type: "PUT",
                                            url: "/siswa/update/" + id,
                                            data: {
                                                name: name,
                                                dob: dob,
                                                class_id: classId,
                                                gender: gender,
                                                address: address,
                                                phone: phone,
                                                email: email,
                                            },
                                            success: function(data) {
                                                console.log("Data siswa berhasil diupdate: ", data);
                                                console.log("Drawing table...");
                                                $("#add-row").dataTable().fnDraw();
                                                $("#editRowModal").modal("hide");
                                            },
                                            error: function(xhr, status, error) {
                                                console.log("Error mengupdate siswa: ", xhr.responseText);
                                            }
                                        });
                                    });

                                    $("#add-row").on("click", ".btn-link.btn-primary", function() {
                                        console.log("Edit button clicked");
                                        var id = $(this).closest("tr").data("id");
                                        console.log("ID siswa: ", id);
                                        $.ajax({
                                            type: "GET",
                                            url: "/siswa/" + id,
                                            success: function(data) {
                                                console.log("Data siswa: ", data);
                                                $("#editName").val(data.name);
                                                $("#editDob").val(data.dob);
                                                $("#editClass").val(data.class_id);
                                                $("#editGender").val(data.gender);
                                                $("#editAddress").val(data.address);
                                                $("#editPhone").val(data.phone);
                                                $("#editEmail").val(data.email);
                                                $("#editRowButton").data("id", id);
                                                $("#editRowModal").modal("show");
                                            },
                                            error: function(xhr, status, error) {
                                                console.log("Error mengambil data siswa: ", xhr.responseText);
                                            }
                                        });
                                    });

                                    $("#add-row").on("click", ".btn-link.btn-danger", function() {
                                        console.log("Hapus button clicked");
                                        var id = $(this).closest("tr").data("id");
                                        console.log("ID siswa: ", id);
                                        $.ajax({
                                            type: "DELETE",
                                            url: "/siswa/delete/" + id,
                                            success: function(data) {
                                                console.log("Data siswa berhasil dihapus: ", data);
                                                console.log("Drawing table...");
                                                $("#add-row").dataTable().fnDraw();
                                                $("#deleteRowModal").modal("hide");
                                            },
                                            error: function(xhr, status, error) {
                                                console.log("Error menghapus siswa: ", xhr.responseText);
                                            }
                                        });
                                    });

                                    $("#add-row").DataTable({
                                        pageLength: 5,
                                    });
                                });
                            </script>




                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('test/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('test/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('test/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('test/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('test/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('test/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('test/assets/js/dashboard.js') }}"></script>
</body>

</html>
