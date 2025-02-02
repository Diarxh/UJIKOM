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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TEST --}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('tu/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/kaiadmin.min.css') }}" />
    {{-- <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script> --}}


</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="row">
            <div class="pt-2 pb-4 d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h3 class="mb-3 fw-bold">Manajemen Guru</h3>
                    <h6 class="mb-2 op-7">Sistem Manajemen Guru Sekolah</h6>
                </div>
                <div class="py-2 ms-md-auto py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2" onclick="scrollToTable()">Kelola
                        Siswa</a>
                    <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Tambah Guru
                    </button>
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
                                <h4 class="text-info fw-bold">{{ $jumlahSiswa }}</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $jumlahSiswa }}%"
                                    aria-valuenow="{{ $jumlahSiswa }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between">
                                {{-- <p class="mb-0 text-muted">Perubahan</p>
                                <p class="mb-0 text-muted">100%</p> --}}
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
                                <h4 class="text-success fw-bold">{{ $jumlahGuru }}</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar"
                                    style="width: {{ $jumlahGuru }}%" aria-valuenow="{{ $jumlahGuru }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between">
                                {{-- <p class="mb-0 text-muted">Perubahan</p>
                                <p class="mb-0 text-muted">100%</p> --}}
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
                                <h4 class="text-danger fw-bold">{{ $jumlahKelas }}</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" role="progressbar"
                                    style="width: {{ $jumlahKelas }}%" aria-valuenow="{{ $jumlahKelas }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between">
                                {{-- <p class="mb-0 text-muted">Perubahan</p>
                                <p class="mb-0 text-muted">100%</p> --}}
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
                                    <p class="text-muted">Jumlah Jurusan di sekolah</p>
                                </div>
                                <h4 class="text-secondary fw-bold">{{ $jumlahFakultas }}</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary" role="progressbar"
                                    style="width: {{ $jumlahFakultas }}%" aria-valuenow="{{ $jumlahFakultas }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between">
                                {{-- <p class="mb-0 text-muted">Perubahan</p>
                                <p class="mb-0 text-muted">100%</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                            <div class="card-title">Transaction History</div>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="paid-tab" data-toggle="tab" href="#paid"
                                    role="tab" aria-controls="paid" aria-selected="true">Guru Terbayar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="unpaid-tab" data-toggle="tab" href="#unpaid" role="tab"
                                    aria-controls="unpaid" aria-selected="false">Guru Belum Terbayar</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="paid" role="tabpanel"
                                aria-labelledby="paid-tab">
                                <div class="table-responsive">
                                    <table id="slip-gaji-table" class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Nama Guru</th>
                                                <th scope="col" class="text-end">Tanggal Pembayaran</th>
                                                <th scope="col" class="text-end">Total Gaji</th>
                                                <th scope="col" class="text-end">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data akan dimuat menggunakan AJAX -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                                <div class="table-responsive">
                                    <table id="unpaid-guru-table" class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Nama Guru</th>
                                                <th scope="col">Status</th>
                                                <!-- Ganti judul kolom Kelas menjadi Status -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data akan dimuat menggunakan AJAX -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>

                <script>
                    $(document).ready(function() {
                        console.log("jQuery version:", $.fn.jquery); // Output: 3.7.1
                        console.log("DataTable plugin exists:", typeof $.fn.DataTable === "function"); // Output: true
                        // Inisialisasi DataTable untuk slip gaji
                        $('#slip-gaji-table').DataTable({
                            processing: true,
                            serverSide: false,
                            ajax: {
                                url: "{{ route('api.slip-gaji') }}",
                                type: "GET",
                                dataSrc: function(json) {
                                    console.log(json); // Debugging data
                                    return json; // Pastikan ini mengembalikan data yang sesuai
                                }
                            },
                            columns: [{
                                    data: 'guru.name',
                                    name: 'guru.name'
                                }, // Nama guru
                                {
                                    data: 'tanggal_pembayaran',
                                    name: 'tanggal_pembayaran'
                                }, // Tanggal pembayaran
                                {
                                    data: 'total_gaji',
                                    name: 'total_gaji',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$') // Format total gaji
                                },
                                {
                                    data: 'status_pembayaran',
                                    name: 'status_pembayaran',
                                    render: function(data) {
                                        return `<span class="badge badge-${data === 'Dibayar' ? 'success' : 'warning'}">${data}</span>`;
                                    } // Status pembayaran
                                }
                            ],
                            paginate: true,
                            pageLength: 5,
                        });


                        // Inisialisasi DataTable untuk guru yang belum terbayar
                        // Inisialisasi DataTable untuk guru yang belum terbayar
                        $('#unpaid-guru-table').DataTable({
                            processing: true,
                            ajax: {
                                url: "{{ route('api.slip-gaji.unpaid') }}",
                                type: "GET",
                                dataSrc: function(json) {
                                    console.log(json); // Cek data yang diterima
                                    return json; // Pastikan ini mengembalikan data yang sesuai
                                }
                            },
                            columns: [{
                                    data: 'name',
                                    name: 'name'
                                }, // Nama guru
                                {
                                    data: null, // Tidak ada data langsung
                                    render: function(data) {
                                        return '<span class="text-danger">Belum Terbayar</span>'; // Menampilkan status
                                    }
                                }
                            ],
                            paginate: true,
                            pageLength: 5,
                        });


                        // Fungsi untuk mengaktifkan tab
                        $('.nav-tabs a').on('click', function(e) {
                            e.preventDefault();
                            $(this).tab('show');
                        });
                    });
                </script>
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
    <script>
        function scrollToTable() {
            document.getElementById('tableSiswa').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    </script>

</body>

</html>
