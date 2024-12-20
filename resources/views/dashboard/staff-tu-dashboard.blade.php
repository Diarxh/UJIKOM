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
    <!-- Core JS Files -->
    <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('tu/assets/js/bootstrap-notify.js') }}"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/3.1.3/bootstrap-notify.min.css">


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

                        sidebar.addEventListener('click', function(event) {
                            if (event.target.tagName === 'A' && event.target.hasAttribute('data-file')) {
                                const file = event.target.getAttribute('data-file');
                                loadFile(file); // Memanggil fungsi loadFile untuk mengambil file
                            }
                        });

                        function loadFile(file) {
                            const url = `/spa/${file}`;
                            fetch(url)
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok ' + response.statusText);
                                    }
                                    return response.text();
                                })
                                .then(content => {
                                    workspace.innerHTML = content; // Menampilkan konten ke workspace
                                    console.log(`File ${file} berhasil dimuat ke workspace.`);
                                    initializeComponent(file); // Panggil fungsi inisialisasi untuk komponen yang sesuai
                                })
                                .catch(error => {
                                    console.error('Error occurred while loading file:', error);
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="mdi:alert" style="color: red;"></span>',
                                        title: "Error!",
                                        message: "Gagal memuat data."
                                    }, {
                                        type: "danger",
                                        delay: 5000,
                                        timer: 1000,
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        }
                                    });
                                });
                        }

                        function initializeComponent(file) {
                            if (file === "manajemen-siswa") {
                                initializeStudentManagement(); // Panggil fungsi untuk manajemen siswa
                            } else if (file === "manajemen-guru") {
                                initializeTeacherManagement(); // Panggil fungsi untuk manajemen guru
                            } else if (file === "manajemen-kelas") {
                                initializeClassManagement(); // Panggil fungsi untuk manajemen kelas
                            }
                            // Tambahkan lebih banyak kondisi untuk menu lainnya
                        }



                        function initializeTeacherManagement() {
                            console.log('Initializing Teacher Management');
                            var table = $("#add-row-teacher").DataTable({
                                pageLength: 5,
                                ajax: {
                                    url: "/guru", // URL untuk mengambil data guru
                                    dataSrc: '' // Menggunakan data langsung dari array
                                },
                                columns: [{
                                        data: 'name' // Kolom nama guru
                                    },
                                    {
                                        data: 'gender' // Kolom jenis kelamin
                                    },
                                    {
                                        data: null,
                                        render: function(data, type, row) {
                                            return '<button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editRowModalTeacher" data-id="' +
                                                row.id + '" data-name="' + row.name +
                                                '"><i class="fa fa-edit"></i></button>' +
                                                '<button type="button" class="btn btn-link btn-danger" data-id="' +
                                                row.id + '"><i class="fa fa-times"></i></button>';
                                        }
                                    }
                                ]
                            });
                            console.log('Teacher table initialized successfully.');
                        }

                        function initializeStudentManagement() {
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
                        }
                        // Implementasi fungsi lainnya untuk manajemen guru, kelas, dsb.
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
            <!--  Header Start -->
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
                                    class="d-none d-md-block">Download
                                    Free </span> <span class="d-block d-md-none">Free</span></a>
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
            <!--  Header End -->
            <div class="container-fluid">
                <div class="row">
                    {{-- TAMPILAN IKON --}}
                    <div class="row tampilan_ikon_dashboard">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-primary card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-center icon-big">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">Siswa</p>
                                                    <h4 class="card-title">{{ $siswaCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-info card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-center icon-big">
                                                    <i class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Guru</p>
                                                    <h4 class="card-title">{{ $guruCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-success card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-center icon-big">
                                                    <i class="far fa-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Absensi Guru</p>
                                                    <h4 class="card-title">{{ $absensiGuruCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-secondary card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-center icon-big">
                                                    <i class="far fa-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Absensi Guru</p>
                                                    <h4 class="card-title">{{ $absensiGuruCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- trafix absensi --}}
                    <div class="col-lg-8 tampilan_trafik_absensi">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="gap-2 mb-4 card-title d-flex align-items-center">
                                    Traffic Overview
                                    <span>
                                        <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-custom-class="tooltip-success" data-bs-title="Traffic Overview">
                                        </iconify-icon>
                                    </span>
                                </h5>
                                <div id="traffic-overview"></div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', (event) => {
                                        try {
                                            const siswaCountPerDay = {!! json_encode($siswaCountPerDay) !!};
                                            const guruCountPerDay = {!! json_encode($guruCountPerDay) !!};

                                            console.log('Data siswaCountPerDay:', siswaCountPerDay);
                                            console.log('Data guruCountPerDay:', guruCountPerDay);

                                            // Pastikan nilai yang dikirim adalah integer
                                            const siswaData = Object.values(siswaCountPerDay).map(val => Math.floor(val));
                                            const guruData = Object.values(guruCountPerDay).map(val => Math.floor(val));

                                            console.log('Data siswaData:', siswaData);
                                            console.log('Data guruData:', guruData);

                                            // Data untuk grafik
                                            var chart = {
                                                series: [{
                                                        name: "Siswa",
                                                        data: siswaData,
                                                    },
                                                    {
                                                        name: "Guru",
                                                        data: guruData,
                                                    },
                                                ],
                                                chart: {
                                                    toolbar: {
                                                        show: false,
                                                    },
                                                    type: "line",
                                                    fontFamily: "inherit",
                                                    foreColor: "#adb0bb",
                                                    height: 320,
                                                    stacked: false,
                                                },
                                                colors: ["#5F9EA0", "#FF69B4"],
                                                dataLabels: {
                                                    enabled: false,
                                                },
                                                legend: {
                                                    show: false,
                                                },
                                                stroke: {
                                                    width: 2,
                                                    curve: "smooth",
                                                },
                                                grid: {
                                                    borderColor: "rgba(0,0,0,0.1)",
                                                    strokeDashArray: 3,
                                                    xaxis: {
                                                        lines: {
                                                            show: false,
                                                        },
                                                    },
                                                },
                                                xaxis: {
                                                    axisBorder: {
                                                        show: false,
                                                    },
                                                    axisTicks: {
                                                        show: false,
                                                    },
                                                    categories: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
                                                },
                                                yaxis: {
                                                    tickAmount: 4,
                                                },
                                                markers: {
                                                    strokeColor: ["#5F9EA0", "#FF69B4"],
                                                    strokeWidth: 2,
                                                },
                                                tooltip: {
                                                    theme: "dark",
                                                    y: {
                                                        formatter: function(value) {
                                                            return Math.floor(value); // Menampilkan tanpa desimal
                                                        }
                                                    }
                                                },
                                            };

                                            console.log('Data chart:', chart);

                                            var chartInstance = new ApexCharts(
                                                document.querySelector("#traffic-overview"),
                                                chart
                                            );

                                            console.log('Chart instance:', chartInstance);

                                            chartInstance.render();

                                            console.log('Chart rendered');
                                        } catch (error) {
                                            console.error('Error:', error);
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="text-center card-body">
                                <img src="{{ asset('test/assets/images/backgrounds/product-tip.png') }}"
                                    alt="image" class="img-fluid" width="205">
                                <h4 class="mt-7">Productivity Tips!</h4>
                                <p class="mt-2 mb-3 card-subtitle">Duis at orci justo nulla in libero id leo
                                    molestie sodales phasellus justo.</p>
                                <button class="mb-3 btn btn-primary">View All Tips</button>
                            </div>
                        </div>
                    </div>
                    {{-- table siswa dan guru --}}
                    <div class="col-md-12 table_data_guru">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multi Filter Select</h4>
                                <select id="dataType" class="form-select" style="width: 200px;">
                                    <option value="students">Students</option>
                                    <option value="teachers">Teachers</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="multi-filter-select" class="table display table-striped table-hover">
                                        <thead>
                                            <tr id="table-head">
                                                <!-- Kolom akan diisi dinamis -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data akan diisi menggunakan JavaScript -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                // Debug untuk memeriksa apakah jQuery dan DataTable terdeteksi
                                console.log("jQuery version:", $.fn.jquery); // Output: 3.7.1
                                console.log("DataTable plugin exists:", typeof $.fn.DataTable === "function"); // Output: true

                                let table;

                                // Mapping kolom untuk tiap tipe data
                                const columnsMap = {
                                    students: ["Nama", "Kelas", "Jenis Kelamin", "Tanggal Masuk", "Telepon"],
                                    teachers: ["Nama", "Mata Pelajaran", "Jenis Kelamin", "Tanggal Bergabung", "Telepon"]
                                };

                                const fieldsMap = {
                                    students: ["name", "class_id", "gender", "created_at", "phone"],
                                    teachers: ["name", "subject", "gender", "created_at", "phone"]
                                };

                                // Fungsi untuk mengubah header tabel
                                function updateTableHead(type) {
                                    const headers = columnsMap[type] || [];
                                    const tableHead = $("#table-head");
                                    tableHead.empty(); // Hapus isi lama
                                    headers.forEach(header => {
                                        tableHead.append(`<th>${header}</th>`);
                                    });
                                }

                                // Fungsi untuk memuat data ke tabel
                                function loadData(type) {
                                    if (table) {
                                        table.destroy(); // Reset DataTable jika sudah ada
                                    }

                                    console.log(`Fetching data for type: ${type}`); // Debug AJAX request
                                    $.ajax({
                                        url: `http://127.0.0.1:8000/get-data`,
                                        type: "GET",
                                        data: {
                                            type: type
                                        },
                                        success: function(response) {
                                            console.log("Data received:", response);

                                            const data = response || [];
                                            const tbody = $("#multi-filter-select tbody");
                                            tbody.empty();

                                            // Isi tabel menggunakan data
                                            data.forEach(item => {
                                                let rowData = '<tr>';
                                                fieldsMap[type].forEach(field => {
                                                    // Format tanggal jika kolom adalah created_at
                                                    let cellData = field === 'created_at' ? new Date(item[
                                                        field]).toLocaleDateString() : item[field];
                                                    rowData += `<td>${cellData}</td>`;
                                                });
                                                rowData += '</tr>';
                                                tbody.append(rowData);
                                            });

                                            // Inisialisasi ulang DataTable dengan fitur sorting dan filter suggestion
                                            table = $("#multi-filter-select").DataTable({
                                                pageLength: 5, // Mengatur panjang halaman menjadi 5
                                                initComplete: function() {
                                                    this.api()
                                                        .columns()
                                                        .every(function() {
                                                            var column = this;
                                                            var select = $(
                                                                    '<select class="form-select"><option value="">Semua</option></select>'
                                                                )
                                                                .appendTo($(column
                                                                    .header())) // Tambahkan ke header kolom
                                                                .on("change", function() {
                                                                    var val = $.fn.dataTable.util
                                                                        .escapeRegex($(this).val());

                                                                    column.search(val ? "^" + val +
                                                                            "$" : "", true, false)
                                                                        .draw();
                                                                });

                                                            column.data()
                                                                .unique()
                                                                .sort()
                                                                .each(function(d, j) {
                                                                    select.append('<option value="' +
                                                                        d + '">' + d + "</option>");
                                                                    console.log(
                                                                        "Column data for filtering:",
                                                                        column.data().unique()
                                                                        .toArray());
                                                                });
                                                        });
                                                },
                                            });
                                        },
                                        error: function(xhr, status, error) {
                                            console.error("Error fetching data:", xhr.responseText || error);
                                        }
                                    });
                                }

                                // Inisialisasi awal untuk "students"
                                updateTableHead("students");
                                loadData("students");

                                // Event listener untuk dropdown
                                $("#dataType").change(function() {
                                    const selectedType = $(this).val();
                                    updateTableHead(selectedType);
                                    loadData(selectedType);
                                });
                            });
                        </script>

                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="gap-2 pb-3 mb-5 card-title d-flex align-items-center">Sessions by
                                    device<span>
                                        <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-custom-class="tooltip-success" data-bs-title="Locations">
                                        </iconify-icon>
                                    </span>
                                </h5>
                                <div class="row">
                                    <div class="col-4">
                                        <iconify-icon icon="solar:laptop-minimalistic-line-duotone"
                                            class="fs-7 d-flex text-primary"></iconify-icon>
                                        <span class="mt-2 fs-11 d-block text-nowrap">Computers</span>
                                        <h4 class="mt-1 mb-0">87%</h4>
                                    </div>
                                    <div class="col-4">
                                        <iconify-icon icon="solar:smartphone-line-duotone"
                                            class="fs-7 d-flex text-secondary"></iconify-icon>
                                        <span class="mt-2 fs-11 d-block text-nowrap">Smartphone</span>
                                        <h4 class="mt-1 mb-0">9.2%</h4>
                                    </div>
                                    <div class="col-4">
                                        <iconify-icon icon="solar:tablet-line-duotone"
                                            class="fs-7 d-flex text-success">
                                        </iconify-icon>
                                        <span class="mt-2 fs-11 d-block text-nowrap">Tablets</span>
                                        <h4 class="mt-1 mb-0">3.1%</h4>
                                    </div>
                                </div>

                                <div class="gap-4 pt-2 mt-7 vstack">
                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Computers</span>
                                            <h6 class="mb-0 fs-3 fw-medium text-dark lh-base">87%</h6>
                                        </div>
                                        <div class="mt-6 progress" role="progressbar" aria-label="Warning example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 100%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Smartphones</span>
                                            <h6 class="mb-0 fs-3 fw-medium text-dark lh-base">9.2%</h6>
                                        </div>
                                        <div class="mt-6 progress" role="progressbar" aria-label="Warning example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary" style="width: 50%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Tablets</span>
                                            <h6 class="mb-0 fs-3 fw-medium text-dark lh-base">3.1%</h6>
                                        </div>
                                        <div class="mt-6 progress" role="progressbar" aria-label="Warning example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 35%"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="overflow-hidden card hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('test/assets/images/blog/blog-img1.jpg') }}"
                                        class="card-img-top" alt="matdash-img">
                                </a>
                                <span
                                    class="bottom-0 px-2 py-1 mb-9 badge text-bg-light text-dark fs-2 lh-sm me-9 fw-semibold position-absolute end-0">2
                                    min Read</span>
                                <img src="{{ asset('test/assets/images/profile/user-3.jpg') }}" alt="matdash-"
                                    class="bottom-0 img-fluid rounded-circle position-absolute start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="p-4 card-body">
                                <span class="px-2 py-1 mt-3 badge text-bg-light fs-2 lh-sm">Social</span>
                                <a class="my-4 d-block fs-5 text-dark fw-semibold link-primary" href="">As yen
                                    tumbles, gadget-loving
                                    Japan goes
                                    for secondhand iPhones</a>
                                <div class="gap-4 d-flex align-items-center">
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-eye text-dark fs-5"></i>9,125
                                    </div>
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>3
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Mon, Dec 19
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="overflow-hidden card hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('test/assets/images/blog/blog-img2.jpg') }}"
                                        class="card-img-top" alt="matdash-img">
                                </a>
                                <span
                                    class="bottom-0 px-2 py-1 mb-9 badge text-bg-light text-dark fs-2 lh-sm me-9 fw-semibold position-absolute end-0">2
                                    min Read</span>
                                <img src="{{ asset('test/assets/images/profile/user-2.jpg') }}" alt="matdash-"
                                    class="bottom-0 img-fluid rounded-circle position-absolute start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="p-4 card-body">
                                <span class="px-2 py-1 mt-3 badge text-bg-light fs-2 lh-sm">Gadget</span>
                                <a class="my-4 d-block fs-5 text-dark fw-semibold link-primary" href="">Intel
                                    loses bid to revive
                                    antitrust case
                                    against patent foe Fortress</a>
                                <div class="gap-4 d-flex align-items-center">
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-eye text-dark fs-5"></i>4,150
                                    </div>
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>38
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Sun, Dec 18
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="overflow-hidden card hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('test/assets/images/blog/blog-img3.jpg') }}"
                                        class="card-img-top" alt="matdash-img">
                                </a>
                                <span
                                    class="bottom-0 px-2 py-1 mb-9 badge text-bg-light text-dark fs-2 lh-sm me-9 fw-semibold position-absolute end-0">2
                                    min Read</span>
                                <img src="{{ asset('test/assets/images/profile/user-3.jpg') }}" alt="matdash-img"
                                    class="bottom-0 img-fluid rounded-circle position-absolute start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="p-4 card-body">
                                <span class="px-2 py-1 mt-3 badge text-bg-light fs-2 lh-sm">Health</span>
                                <a class="my-4 d-block fs-5 text-dark fw-semibold link-primary" href="">COVID
                                    outbreak deepens as more
                                    lockdowns
                                    loom in China</a>
                                <div class="gap-4 d-flex align-items-center">
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-eye text-dark fs-5"></i>9,480
                                    </div>
                                    <div class="gap-2 d-flex align-items-center">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>12
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Sat, Dec 17
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-6 text-center">
                        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>Distributed by <a
                                href="https://themewagon.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
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
