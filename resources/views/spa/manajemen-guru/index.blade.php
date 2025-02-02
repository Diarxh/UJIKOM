<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Guru -SIMPAI</title>
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

    <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>


    <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    {{-- <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script> --}}


</head>

<body>


    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{-- <div id="spinner-container">
            <div id="spinner"
                class="position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex flex-column align-items-center justify-content-center"
                style="display: none;">
                <div class="spinner-border text-primary animate__animated" style="width: 3rem; height: 3rem;"
                    role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div id="loadingText" class="mt-3 text-dark animate__animated animate__lightSpeedInLeft">
                    <span class="loading-text">Loading...</span>
                </div>
            </div>
        </div>

        <style>
            #spinner-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                background-color: transparent;
                z-index: 9999;
            }

            #spinner {
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
        </style>
        <script></script> --}}

        <!-- Tambahkan link ke Animate.css untuk animasi -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <div class="row">



            <div class="pt-2 pb-4 d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h3 class="mb-3 fw-bold">Manajemen Guru</h3>
                    <h6 class="mb-2 op-7">Sistem Manajemen Guru Sekolah</h6>
                </div>
                <div class="py-2 ms-md-auto py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2" onclick="scrollToTable()">Kelola
                        Guru</a>
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
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: {{ $jumlahSiswa }}%" aria-valuenow="{{ $jumlahSiswa }}"
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
            <div class="row d-flex align-items-stretch">
                {{-- table untuk gajih guru --}}
                <div class="col-md-8">
                    <div class="card card-round h-100">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">Status Pembayaran Gajih</div>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="paid-tab" data-toggle="tab" href="#paid"
                                        role="tab" aria-controls="paid" aria-selected="true">Guru Terbayar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="unpaid-tab" data-toggle="tab" href="#unpaid"
                                        role="tab" aria-controls="unpaid" aria-selected="false">Guru Belum
                                        Terbayar</a>
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
                                <div class="tab-pane fade" id="unpaid" role="tabpanel"
                                    aria-labelledby="unpaid-tab">
                                    <div class="table-responsive">
                                        <table id="unpaid-guru-table" class="table table-striped table-bordered"
                                            style="width: 100%;">
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
                            </div>
                        </div>
                    </div>

                    <style>
                        #slip-gaji-table,
                        #unpaid-guru-table {
                            width: 100%;
                            margin: 0 auto;
                        }

                        #slip-gaji-table th,
                        #unpaid-guru-table th {
                            text-align: center;
                        }

                        #slip-gaji-table td,
                        #unpaid-guru-table td {
                            text-align: center;
                        }

                        .dataTables_wrapper {
                            width: 100%;
                        }
                    </style>
                    <script>
                        $(document).ready(function() {
                            console.log("jQuery version:", $.fn.jquery); // Output: 3.7.1
                            console.log("DataTable plugin exists:", typeof $.fn.DataTable === "function"); // Output: true

                            $(document).ajaxError(function(event, jqxhr, settings, thrownError) {
                                console.error("AJAX error terjadi:");
                                console.error("URL:", settings.url);
                                console.error("Error Message:", thrownError);
                                console.error("Response Text:", jqxhr.responseText);
                                $("#spinner").hide(); // Pastikan spinner disembunyikan saat error
                            });

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
                                            return `<span class="badge badge-${data === 'Dibayar'? 'success' : 'warning'}">${data}</span>`;
                                        } // Status pembayaran
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

                <div class="col-md-4">
                    <div class="h-80 card">
                        <div class="card-header">
                            <div class="card-title">Chart Guru</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="chart-container" style="width: 500px; height: 500px">
                                <canvas id="doughnutChart" style="width: 100%; height: 100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <br>
            <div class="row"></div>
            <!-- tabel GURU -->
            <div class="col-md-12" id="tabelGuru">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Guru</h4>
                            <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                data-bs-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah Guru
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal Tambah Guru -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true"
                            data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Guru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addGuruForm">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Guru</label>
                                                <input type="text" class="form-control" id="nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mata_pelajaran" class="form-label">Mata
                                                    Pelajaran</label>
                                                <input type="text" class="form-control" id="mata_pelajaran"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label">Jenis
                                                    Kelamin</label>
                                                <select class="form-select" id="jenis_kelamin" required>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_bergabung" class="form-label">Tanggal
                                                    Bergabung</label>
                                                <input type="date" class="form-control" id="tanggal_bergabung"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="no_telepon" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                                                <input type="number" class="form-control" id="gaji_pokok" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tunjangan" class="form-label">Tunjangan</label>
                                                <input type="number" class="form-control" id="tunjangan" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="potongan" class="form-label">Potongan</label>
                                                <input type="number" class="form-control" id="potongan" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="addGuruButton"
                                            class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true"
                            data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Guru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editTeacherForm">
                                            <div class="mb-3">
                                                <label for="editName" class="form-label">Nama Guru</label>
                                                <input type="text" class="form-control" id="editName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editSubject" class="form-label">Mata Pelajaran</label>
                                                <input type="text" class="form-control" id="editSubject" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editGender" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select" id="editGender" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editHireDate" class="form-label">Tanggal
                                                    Bergabung</label>
                                                <input type="date" class="form-control" id="editHireDate"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editPhone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="editPhone" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="editEmail" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editGajiPokok" class="form-label">Gaji Pokok</label>
                                                <input type="number" class="form-control" id="editGajiPokok"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editTunjangan" class="form-label">Tunjangan</label>
                                                <input type="number" class="form-control" id="editTunjangan"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editPotongan" class="form-label">Potongan</label>
                                                <input type="number" class="form-control" id="editPotongan"
                                                    required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="editRowButton"
                                            class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="deleteRowModal" tabindex="-1" role="dialog"
                            aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="border-0 modal-header">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold"> Hapus</span>
                                            <span class="fw-light"> Guru </span>
                                        </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small">
                                            Apakah Anda yakin ingin menghapus guru ini?
                                        </p>
                                    </div>
                                    <div class="border-0 modal-footer">
                                        <button type="button" id="deleteRowButtonConfirm" class="btn btn-primary">
                                            Hapus
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                            Batalkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="add-row"
                                class="table table-bordered table-head-bg-primary dataTable no-footer table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr data-id="{{ $teacher->id }}">
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->subject }}</td>
                                            <td>{{ $teacher->gender }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-link btn-primary btn-lg"
                                                        data-bs-toggle="modal" data-bs-target="#editRowModal"
                                                        data-id="{{ $teacher->id }}"
                                                        data-name="{{ $teacher->name }}"
                                                        data-subject="{{ $teacher->subject }}"
                                                        data-gender="{{ $teacher->gender }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#deleteRowModal"
                                                        data-id="{{ $teacher->id }}">
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
                </div>
                <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>
                <!-- Bootstrap Notify -->
                <script src="{{ asset('tu/assets/js/bootstrap-notify.js') }}"></script>
                <style>
                    /* CSS untuk backdrop transparan dengan efek blur */
                    /* CSS untuk backdrop transparan dengan efek blur
                                        .modal-backdrop.show {
                                            opacity: 0.5;
                                            background-color: rgba(255, 255, 255, 0.5);
                                            backdrop-filter: blur(10px);
                                        } */

                    /* Agar modal berada di atas backdrop yang blur */
                    .modal-open {
                        z-index: 1060;
                    }

                    .modal-backdrop {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        z-index: 1040;
                    }


                    /* CSS untuk notifikasi agar muncul di atas modal backdrop */
                    .alert[data-notify="container"] {
                        z-index: 1070 !important;
                        /* Pastikan notifikasi memiliki z-index paling tinggi */
                        position: fixed !important;
                        /* Memastikan posisi notifikasi tetap fixed */
                    }

                    /* Tambahan untuk menyesuaikan posisi notifikasi */
                    .alert[data-notify="container"][data-notify-position="top-right"] {
                        top: 20px;
                        right: 20px;
                    }
                </style>
                <script>
                    $(document).ready(function() {
                        console.log("Document ready");
                        var table = $("#add-row").DataTable({
                            pageLength: 5,
                            ajax: {
                                url: "/guru",
                                dataSrc: ''
                            },
                            columns: [{
                                data: 'name'
                            }, {
                                data: 'subject'
                            }, {
                                data: 'gender'
                            }, {
                                data: null,
                                render: function(data, type, row) {
                                    return '<button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editRowModal" data-id="' +
                                        row.id + '" data-name="' + row.name + '" data-subject="' + row
                                        .subject +
                                        '"><i class="fa fa-edit"></i></button>' +
                                        '<button type="button" class="btn btn-link btn-danger" data-id="' +
                                        row.id + '"><i class="fa fa-times"></i></button>';
                                }
                            }]
                        });
                        $('.modal').on('show.bs.modal', function() {
                            var backdrop = $('.modal-backdrop');
                            if (backdrop.length > 1) {
                                backdrop.not(':first').remove();
                            }
                        });
                        $("#addGuruButton").click(function() {
                            var nama = $("#nama").val();
                            var mata_pelajaran = $("#mata_pelajaran").val();
                            var jenis_kelamin = $("#jenis_kelamin").val();
                            var tanggal_bergabung = $("#tanggal_bergabung").val();
                            var no_telepon = $("#no_telepon").val();
                            var email = $("#email").val();
                            var gaji_pokok = $("#gaji_pokok").val();
                            var tunjangan = $("#tunjangan").val();
                            var potongan = $("#potongan").val();

                            // Periksa apakah semua field sudah diisi
                            if (nama === "" || mata_pelajaran === "" || jenis_kelamin === "" || tanggal_bergabung ===
                                "" || no_telepon === "" || email === "" || gaji_pokok === "" || tunjangan === "" ||
                                potongan === "") {
                                // Notifikasi gagal
                                $.notify({
                                    icon: '<span class="iconify" data-icon="akar-icons:error" style="color: red;"></span>',
                                    title: "Gagal!",
                                    message: "Silakan isi semua field yang kosong."
                                }, {
                                    type: "danger",
                                    delay: 5000,
                                    timer: 1000,
                                    placement: {
                                        from: "top",
                                        align: "right"
                                    }
                                });
                                return;
                            }

                            $.ajax({
                                type: "POST",
                                url: "/guru/tambah",
                                data: {
                                    name: nama,
                                    subject: mata_pelajaran,
                                    gender: jenis_kelamin,
                                    hire_date: tanggal_bergabung,
                                    phone: no_telepon,
                                    email: email,
                                    gaji_pokok: gaji_pokok,
                                    tunjangan: tunjangan,
                                    potongan: potongan
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log("Data guru berhasil ditambahkan: ", data);

                                    // Notifikasi sukses
                                    $.notify({
                                        icon: "",
                                        title: "Berhasil!",
                                        message: "Data guru berhasil ditambahkan."
                                    }, {
                                        type: "success",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });


                                    // Tutup modal
                                    $("#addRowModal").modal('hide');
                                    $('.modal-backdrop').remove();
                                },
                                error: function(xhr, status, error) {
                                    console.log("Error menambahkan guru: ", xhr.responseText);

                                    // Notifikasi gagal
                                    $.notify({
                                        icon: '<i class="fas fa-exclamation-triangle" style="color: red;"></i>',
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat menambahkan guru."
                                    }, {
                                        type: "danger",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });

                                }
                            });
                        });


                        // Event untuk memuatkan data guru ke dalam modal edit
                        $("#add-row").on("click", ".btn-link.btn-primary", function() {
                            var id = $(this).data("id");
                            console.log("ID guru: ", id);
                            $.ajax({
                                type: "GET",
                                url: "/guru/" + id,
                                success: function(data) {
                                    console.log("Data guru: ", data);
                                    $("#editName").val(data.name);
                                    $("#editSubject").val(data.subject);
                                    $("#editGender").val(data.gender);
                                    $("#editHireDate").val(data.hire_date);
                                    $("#editPhone").val(data.phone);
                                    $("#editEmail").val(data.email);
                                    $("#editGajiPokok").val(data.gaji_pokok);
                                    $("#editTunjangan").val(data.tunjangan);
                                    $("#editPotongan").val(data.potongan);
                                    $("#editRowButton").data("id", id);
                                    $("#editRowModal").modal("show");
                                },
                                error: function(xhr, status, error) {
                                    console.log("Error mengambil data guru: ", xhr.responseText);
                                }
                            });
                        });
                        // Fungsi untuk mengupdate guru
                        $("#editRowButton").click(function() {
                            var id = $(this).data("id");
                            var name = $("#editName").val();
                            var subject = $("#editSubject").val();
                            var gender = $("#editGender").val();
                            var hireDate = $("#editHireDate").val();
                            var phone = $("#editPhone").val();
                            var email = $("#editEmail").val();
                            var gajiPokok = $("#editGajiPokok").val();
                            var tunjangan = $("#editTunjangan").val();
                            var potongan = $("#editPotongan").val();

                            $.ajax({
                                type: "PUT",
                                url: "/guru/update/" + id,
                                data: {
                                    name: name,
                                    subject: subject,
                                    gender: gender,
                                    hire_date: hireDate,
                                    phone: phone,
                                    email: email,
                                    gaji_pokok: gajiPokok,
                                    tunjangan: tunjangan,
                                    potongan: potongan,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log("Data guru berhasil diupdate");
                                    // Tampilkan notifikasi sukses
                                    $.notify({
                                        icon: '<i class="fas fa-check" style="color: green;"></i>',
                                        title: "Berhasil!",
                                        message: "Data guru berhasil diupdate."
                                    }, {
                                        type: "success",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });
                                    $("#editRowModal").modal("hide");
                                    table.ajax.reload();
                                },
                                error: function(xhr, status, error) {
                                    console.log("Error mengupdate guru: ", xhr.responseText);
                                    // Tampilkan notifikasi error
                                    $.notify({
                                        icon: '<i class="fas fa-exclamation-triangle" style="color: red;"></i>',
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat mengupdate guru."
                                    }, {
                                        type: "danger",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });
                                }
                            });
                        });

                        // Event click pada button hapus di tabel
                        $("#add-row").on("click", ".btn-link.btn-danger", function() {
                            var id = $(this).data("id");
                            console.log("ID guru untuk dihapus: ", id);

                            // Menyimpan ID guru ke dalam modal
                            $("#deleteRowButtonConfirm").data("id", id);

                            // Membuka modal konfirmasi
                            $("#deleteRowModal").modal("show");
                        });

                        // Event untuk button konfirmasi hapus di modal
                        $("#deleteRowButtonConfirm").click(function() {
                            var id = $(this).data("id");
                            console.log("ID guru yang akan dihapus: ", id);
                            $.ajax({
                                type: "DELETE",
                                url: "/guru/delete/" + id,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log(data);
                                    table.ajax.reload();
                                    $("#deleteRowModal").modal("hide");

                                    // Notifikasi sukses
                                    $.notify({
                                        icon: '<i class="fas fa-check" style="color: green;"></i>',
                                        title: "Dihapus!",
                                        message: "Data guru berhasil dihapus."
                                    }, {
                                        type: "success",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.log(xhr.responseText);

                                    // Notifikasi gagal
                                    $.notify({
                                        icon: '<i class="fas fa-exclamation-triangle" style="color: red;"></i>',
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat menghapus guru."
                                    }, {
                                        type: "danger",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });
                                }
                            });
                        });


                    });
                </script>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('test/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
    <!-- Chart JS -->
    <script src="{{ asset('tu/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('tu/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('tu/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <script src="{{ asset('test/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('test/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('test/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('test/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('test/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('test/assets/js/dashboard.js') }}"></script>
    <script>
        function scrollToTable() {
            document.getElementById('tableGuru').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        var doughnutChart = document.getElementById("doughnutChart").getContext("2d");

        var myDoughnutChart = new Chart(doughnutChart, {
            type: "doughnut",
            data: {
                datasets: [{
                    data: @json(array_values($subjectCounts)),
                    backgroundColor: Array.from({
                        length: @json(count($subjectCounts))
                    }, (_, i) => {
                        const colors = [
                            "#f3545d",
                            "#fdaf4b",
                            "#1d7af3",
                            "#59d05d",
                            "#177dff",
                            "#ffc107",
                            "#33cc33",
                            "#6666cc",
                            "#cc33cc",
                            "#33cccc",
                        ];
                        return colors[i % colors.length];
                    }),
                }, ],
                labels: @json(array_keys($subjectCounts)),
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                    labels: {
                        fontColor: "rgb(154, 154, 154)",
                        fontSize: 11,
                        usePointStyle: true,
                        padding: 20,
                    },
                },
                pieceLabel: {
                    render: "percentage",
                    fontColor: "white",
                    fontSize: 14,
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.labels[tooltipItem.index];
                            var guruCount = @json($guruCounts);
                            return `${label}: ${guruCount[label]} Guru`;
                        },
                    },
                },
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        top: 20,
                        bottom: 20,
                    },
                },
            },
        });

        console.log('Data subjects:', @json($subjectCounts));
        console.log('Data teachers:', @json($teachers));
        console.log('Data subjectCounts:', @json($subjectCounts));
    </script>

</body>

</html>
