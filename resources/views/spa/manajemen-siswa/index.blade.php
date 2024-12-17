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

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{-- <div class="body-wrapper"> --}}
        {{-- <div class="container-fluid"> --}}
        <div class="row">

            <div class="pt-2 pb-4 d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h3 class="mb-3 fw-bold">Manajemen Siswa</h3>
                    <h6 class="mb-2 op-7">Sistem Manajemen Siswa Sekolah</h6>
                </div>
                <div class="py-2 ms-md-auto py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2" onclick="scrollToTable()">Kelola
                        Siswa</a>
                    <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Tambah Siswa
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


            {{-- TAMPILAN PERINGKAT Siswa --}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Peringkat Siswa</div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="table-responsive">
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
                                        @foreach ($ranking as $index => $student)
                                            <tr>
                                                <th scope="row">{{ $student['name'] }}</th>
                                                <td>{{ $student['class'] }}</td>
                                                <td>{{ number_format($student['average_grade'], 2) }}</td>
                                                <td>
                                                    @if ($index == 0)
                                                        <i class="fas fa-trophy text-success me-3"></i> 1
                                                    @elseif($index == 1)
                                                        <i class="fas fa-medal text-warning me-3"></i> 2
                                                    @elseif($index == 2)
                                                        <i class="fas fa-certificate text-info me-3"></i> 3
                                                    @else
                                                        <i class="fas fa-award text-primary me-3"></i>
                                                        {{ $index + 1 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
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
                        <div class="pb-0 card-body siswa-berprestasi-body">
                            <div class="row">
                                @foreach ($ranking->take(3) as $index => $student)
                                    <div class="mb-3 col-12">
                                        <div class="p-2 rounded border d-flex align-items-center">
                                            <div class="avatar">
                                                <img src="{{ asset('tu/assets/img/profile.jpg') }}" alt="..."
                                                    class="avatar-img rounded-circle" />
                                            </div>
                                            <div class="flex-1 pt-1 ms-3">
                                                <h6 class="mb-1 fw-bold">{{ $student['name'] }}</h6>
                                                <small class="text-muted">{{ $student['class'] }}</small>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <h4 class="text-info fw-bold">Rata-Rata Nilai:
                                                    {{ number_format($student['average_grade'], 0) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="separator-dashed"></div>
                            <div class="pull-in">
                                <canvas id="topSiswaChart"></canvas>
                            </div> --}}
                        </div>
                    </div>
                    <style>
                        .separator-dashed {
                            border-top: 1px dashed #ccc;
                            margin: 10px 0;
                        }

                        .siswa-berprestasi-body {
                            max-height: 450px;
                            overflow-y: auto;
                        }
                    </style>
                </div>



            </div>


            <!-- tabel siswa -->
            <div class="col-md-12" id="tableSiswa">
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
                        <!-- Modal Tambah Siswa -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Siswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addStudentForm">
                                            <div class="mb-3">
                                                <label for="addName" class="form-label">Nama Siswa</label>
                                                <input type="text" class="form-control" id="addName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addDob" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="addDob" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addClass" class="form-label">Kelas</label>
                                                <select class="form-select" id="addClass" required>
                                                    <option value="">Pilih Kelas</option>
                                                    @foreach ($schoolClasses as $class)
                                                        <option value="{{ $class->id }}">
                                                            {{ $class->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addGender" class="form-label">Jenis
                                                    Kelamin</label>
                                                <select class="form-select" id="addGender" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addAddress" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="addAddress" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addPhone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="addPhone" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="addEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="addEmail" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="addRowButton"
                                            class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- Modal Edit -->
                        <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Siswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editStudentForm">
                                            <div class="mb-3">
                                                <label for="editName" class="form-label">Nama Siswa</label>
                                                <input type="text" class="form-control" id="editName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editDob" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="editDob" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editClass" class="form-label">Kelas</label>
                                                <select class="form-select" id="editClass" required>
                                                    <option value="">Pilih Kelas</option>
                                                    @foreach ($schoolClasses as $class)
                                                        <option value="{{ $class->id }}">
                                                            {{ $class->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editGender" class="form-label">Jenis
                                                    Kelamin</label>
                                                <select class="form-select" id="editGender" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editAddress" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="editAddress" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editPhone" class="form-label">No. Telepon</label>
                                                <input type="text" class="form-control" id="editPhone" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="editEmail" required>
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
                                            <td>{{ $student->class->name ?? 'N/A' }}</td>
                                            <!-- Menampilkan nama kelas -->
                                            <td>{{ $student->gender }}</td>
                                            <!-- Ini akan menampilkan 'Laki-laki' atau 'Perempuan' -->
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-link btn-primary btn-lg"
                                                        data-bs-toggle="modal" data-bs-target="#editRowModal"
                                                        data-id="{{ $student->id }}"
                                                        data-name="{{ $student->name }}"
                                                        data-class-id="{{ $student->class->name ?? 'N/A' }}"
                                                        data-gender="{{ $student->gender }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-link btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#deleteRowModal"
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
                </div>
                <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>
                <!-- Bootstrap Notify -->
                <script src="{{ asset('tu/assets/js/bootstrap-notify.js') }}"></script>
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/3.1.3/bootstrap-notify.min.css">


                <script>
                    $(document).ready(function() {
                        console.log("Document ready");
                        var table = $("#add-row").DataTable({
                            pageLength: 5,
                            ajax: {
                                url: "/siswa", // URL untuk mengambil data siswa
                                dataSrc: '' // Menggunakan data langsung dari array
                            },
                            columns: [{
                                    data: 'name'
                                }, // Kolom nama siswa
                                {
                                    data: 'class', // Mengambil relasi class
                                    render: function(data, type, row) {
                                        return data ? data.name :
                                            'N/A'; // Menampilkan nama kelas atau 'N/A' jika tidak ada
                                    }
                                },
                                {
                                    data: 'gender'
                                }, // Kolom jenis kelamin
                                {
                                    data: null,
                                    render: function(data, type, row) {
                                        return '<button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editRowModal" data-id="' +
                                            row.id + '" data-name="' + row.name + '" data-class-id="' + row
                                            .class_id + '" data-gender="' + row.gender +
                                            '"><i class="fa fa-edit"></i></button>' +
                                            '<button type="button" class="btn btn-link btn-danger" data-id="' +
                                            row.id + '"><i class="fa fa-times"></i></button>';
                                    }
                                }
                            ]
                        });
                        $("#addRowButton").click(function() {
                            var name = $("#addName").val().trim(); // Mengambil nilai dan menghapus spasi
                            var dob = $("#addDob").val();
                            var classId = $("#addClass").val(); // Mengambil nilai dari dropdown
                            var gender = $("#addGender").val(); // Mengambil nilai dari dropdown
                            var address = $("#addAddress").val();
                            var phone = $("#addPhone").val();
                            var email = $("#addEmail").val();

                            // Validasi input
                            if (!name || !dob || !classId || !gender || !address || !phone || !email) {
                                alert("Semua field harus diisi!"); // Menampilkan pesan kesalahan
                                return; // Menghentikan eksekusi jika ada field yang kosong
                            }

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
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log("Data siswa berhasil ditambahkan: ", data);
                                    $("#addRowModal").modal("hide");
                                    table.ajax.reload();
                                    $("#addStudentForm")[0].reset();

                                    // Notifikasi sukses
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Berhasil!",
                                        message: "Data siswa berhasil ditambahkan."
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
                                    console.log("Error menambahkan siswa: ", xhr.responseText);

                                    // Notifikasi gagal
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat menambahkan siswa."
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


                        // Event untuk memuatkan data siswa ke dalam modal edit
                        $("#add-row").on("click", ".btn-link.btn-primary", function() {
                            var id = $(this).data("id");
                            console.log("ID siswa: ", id);
                            $.ajax({
                                type: "GET",
                                url: "/siswa/" + id,
                                success: function(data) {
                                    console.log("Data siswa: ", data);
                                    $("#editName").val(data.name);
                                    $("#editDob").val(data.dob);
                                    $("#editClass").val(data.class_id); // Set kelas dari data siswa
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

                        // Fungsi untuk mengupdate siswa
                        $("#editRowButton").click(function() {
                            var id = $(this).data("id"); // Mengambil ID dari tombol edit
                            var name = $("#editName").val();
                            var dob = $("#editDob").val();
                            var classId = $("#editClass").val(); // Mengambil ID kelas dari dropdown
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
                                    class_id: classId, // Mengirim ID kelas yang dipilih
                                    gender: gender,
                                    address: address,
                                    phone: phone,
                                    email: email,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log("Data siswa berhasil diupdate: ", data);
                                    table.ajax.reload();
                                    $("#editRowModal").modal("hide");

                                    // Notifikasi sukses
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Berhasil!",
                                        message: "Data siswa berhasil diupdate."
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
                                    console.log("Error mengupdate siswa: ", xhr.responseText);

                                    // Notifikasi gagal
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat mengupdate siswa."
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
                            console.log("ID siswa untuk dihapus: ", id);

                            // Menyimpan ID siswa ke dalam modal
                            $("#deleteRowButtonConfirm").data("id", id);

                            // Membuka modal konfirmasi
                            $("#deleteRowModal").modal("show");
                        });

                        // Event untuk button konfirmasi hapus di modal
                        $("#deleteRowButtonConfirm").click(function() {
                            var id = $(this).data("id");
                            console.log("ID siswa yang akan dihapus: ", id);
                            $.ajax({
                                type: "DELETE",
                                url: "/siswa/delete/" + id,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    console.log(data);
                                    table.ajax.reload();
                                    $("#deleteRowModal").modal("hide");

                                    // Notifikasi sukses
                                    $.notify({
                                        icon: '<span class="line-md:circle-filled-to-confirm-circle-filled-transition" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Dihapus!",
                                        message: "Data siswa berhasil dihapus."
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
                                        icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
                                        // Ganti dengan ikon yang sesuai
                                        title: "Gagal!",
                                        message: "Terjadi kesalahan saat menghapus siswa."
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

                        // Event untuk memuatkan data siswa ke dalam modal edit
                        $("#add-row").on("click", ".btn-link.btn-primary", function() {
                            var id = $(this).data("id"); // Mengambil ID dari data-id pada tombol edit
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
                                    $("#editRowButton").data("id", id); // Simpan ID pada tombol simpan
                                    $("#editRowModal").modal("show"); // Tampilkan modal edit
                                },
                                error: function(xhr, status, error) {
                                    console.log("Error mengambil data siswa: ", xhr.responseText);
                                }
                            });
                        });
                    });
                </script>
            </div>







            {{-- end  --}}




            {{-- </div> --}}
            {{-- </div> --}}
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
