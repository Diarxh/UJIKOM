<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simpai -Sistem Informasi dan Manajemen Pelita Al-Ikshan</title>
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
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/3.1.3/bootstrap-notify.min.css">
 --}}

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
        <div id="spinner-container">
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
                background-color: white;
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
        <script></script>

        <!-- Tambahkan link ke Animate.css untuk animasi -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
                            <a class="sidebar-link" href="javascript:void(0)" data-file="manajemen-siswa"
                                aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="javascript:void(0)" data-file="manajemen-guru"
                                aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:square-academic-cap-2-bold-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Guru</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="javascript:void(0)" data-file="manajemen-kelas"
                                aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Manajemen Kelas</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Laporan & Pengaturan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="javascript:void(0)" data-file="manajemen-laporan"
                                aria-expanded="false">
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
                                <a href="javascript:void(0)" target="_blank"
                                    class="btn btn-primary fs-2 fw-semibold lh-sm">Buy
                                    Pro</a>
                            </div>
                            <div class="unlimited-access-img">
                                <img src="{{ asset('test/assets/images/backgrounds/rocket.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Modal loader -->
                <div id="loader" class="loader" style="display: none;">
                    <div class="loader-content">
                        <div class="loader-spinner"></div>
                        <div class="loader-text">Memuat...</div>
                    </div>
                </div>

                <!-- Text loading -->
                <div id="loading-text" style="display: none;"></div>
                <div id="spinner-container" style="display: none;">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <!-- End Sidebar navigation -->
                <script defer>
                    $(document).ready(function() {
                        const sidebar = document.getElementById('sidebarnav');
                        const workspace = document.querySelector('.container-fluid');
                        const spinnerContainer = document.getElementById('spinner-container');

                        // Menambahkan ikon dari Iconify
                        document.querySelectorAll('.iconify').forEach(function(icon) {
                            icon.style.color = icon.getAttribute('data-icon-color') || '#000';
                            icon.style.width = icon.getAttribute('data-icon-width') || '24px';
                            icon.style.height = icon.getAttribute('data-icon-height') || '24px';
                        });

                        let debounceTimer = null; // mendefinisikan variabel debounceTimer
                        const debounceTimeout = 300; // mendefinisikan variabel debounceTimeout (dikurangi dari 500 menjadi 300)

                        sidebar.addEventListener('click', (e) => {
                            if (e.target.tagName === 'A' && e.target.hasAttribute('data-file')) {
                                const file = e.target.getAttribute('data-file');
                                console.log(`Menu ${file} diakses`);
                                if (debounceTimer) {
                                    clearTimeout(debounceTimer);
                                }
                                debounceTimer = setTimeout(() => {
                                    history.pushState(null, '', `/spa/${file}`); // Mengubah URL
                                    loadFile(file); // Memanggil fungsi loadFile untuk mengambil file
                                }, debounceTimeout);
                            }
                        });

                        window.addEventListener('popstate', function(event) {
                            const path = window.location.pathname;
                            if (path.startsWith('/spa/')) {
                                const file = path.substring(5);
                                console.log('URL berubah: ' + file);
                                loadFile(file);
                            }
                        });

                        function initializeComponent(file) {
                            if (components && components[file]) {
                                components[file]();
                            } else {
                                console.log("Komponen tidak dikenal");
                            }
                        }

                        async function loadFile(file) {
                            spinnerContainer.style.display = 'block'; // Menampilkan spinner
                            const url = `/spa/${file}`;

                            try {
                                const response = await fetch(url);

                                if (!response.ok) {
                                    spinnerContainer.style.display = 'flex'; // Menampilkan spinner saat ada error
                                    $.notify({
                                        icon: '<span class="iconify" data-icon="mdi:alert" style="color: red;"><iconify-icon icon="solar:money-bag-bold-duotone" class="fs-6"></iconify-icon></span>',
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
                                    throw new Error(`Network response was not ok: ${response.statusText}`);
                                }

                                const content = await response.text(); // Ambil konten dari response
                                spinnerContainer.style.display = 'none'; // Sembunyikan spinner setelah berhasil
                                workspace.innerHTML = content; // Tampilkan konten ke workspace
                                console.log(`File ${file} berhasil dimuat ke workspace.`);

                                // Definisikan components di dalam loadFile
                                const components = {
                                    "manajemen-siswa": initializeStudentManagement,
                                    "manajemen-guru": initializeTeacherManagement,
                                    "manajemen-kelas": initializeClassManagement
                                };

                                // Inisialisasi komponen
                                initializeComponent(file, components);

                            } catch (error) {
                                console.error('Error occurred while loading file:', error);
                                spinnerContainer.style.display = 'none'; // Sembunyikan spinner saat error
                            }
                        }

                        function initializeComponent(file, components) {
                            if (components && components[file]) {
                                components[file](); // Panggil fungsi inisialisasi yang sesuai
                            } else {
                                console.log("Komponen tidak dikenal");
                            }
                        }

                        // load first page
                        const initialPath = window.location.pathname;
                        if (initialPath.startsWith('/spa/')) {
                            const file = initialPath.substring(5);
                            loadFile(file);
                        }

                        function initializeTeacherManagement() {
                            console.log("Document ready");

                            // Fungsi untuk menangani error AJAX
                            function handleAjaxError(event, jqxhr, settings, thrownError) {
                                console.error("AJAX error terjadi:");
                                console.error("URL:", settings.url);
                                console.error("Error Message:", thrownError);
                                console.error("Response Text:", jqxhr.responseText);
                                $("#spinner").hide(); // Sembunyikan spinner saat error
                            }

                            // Fungsi untuk inisialisasi DataTable
                            function initializeDataTable(tableId, url, columns) {
                                return $(tableId).DataTable({
                                    processing: true,
                                    serverSide: false,
                                    ajax: {
                                        url: url,
                                        type: "GET",
                                        dataSrc: function(json) {
                                            console.log(json); // Debugging data
                                            return json;
                                        }
                                    },
                                    columns: columns,
                                    paginate: true,
                                    pageLength: 5,
                                });
                            }

                            // Inisialisasi DataTable untuk slip gaji
                            const slipGajiColumns = [{
                                    data: 'guru.name',
                                    name: 'guru.name'
                                },
                                {
                                    data: 'tanggal_pembayaran',
                                    name: 'tanggal_pembayaran'
                                },
                                {
                                    data: 'total_gaji',
                                    name: 'total_gaji',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    data: 'status_pembayaran',
                                    name: 'status_pembayaran',
                                    render: function(data) {
                                        return `<span class="badge badge-${data === 'Dibayar' ? 'success' : 'warning'}">${data}</span>`;
                                    }
                                }
                            ];
                            initializeDataTable('#slip-gaji-table', "{{ route('api.slip-gaji') }}", slipGajiColumns);

                            // Inisialisasi DataTable untuk guru yang belum terbayar
                            const unpaidGuruColumns = [{
                                    data: 'name',
                                    name: 'name'
                                },
                                {
                                    data: 'tanggal_pembayaran',
                                    name: 'tanggal_pembayaran'
                                },
                                {
                                    data: 'total_gaji',
                                    name: 'total_gaji',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    data: 'status_pembayaran',
                                    name: 'status_pembayaran',
                                    render: function(data) {
                                        return `<span class="badge badge-${data === 'Dibayar' ? 'success' : 'warning'}">${data}</span>`;
                                    }
                                }
                            ];
                            initializeDataTable('#unpaid-guru-table', "{{ route('api.slip-gaji.unpaid') }}",
                                unpaidGuruColumns);

                            // Fungsi untuk mengaktifkan tab
                            $('.nav-tabs a').on('click', function(e) {
                                e.preventDefault();
                                $(this).tab('show');
                            });

                            // Inisialisasi DataTable untuk tabel guru
                            const guruTableColumns = [{
                                    data: 'name'
                                },
                                {
                                    data: 'subject'
                                },
                                {
                                    data: 'gender'
                                },
                                {
                                    data: null,
                                    render: function(data, type, row) {
                                        return '<button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editRowModal" data-id="' +
                                            row.id + '" data-name="' + row.name + '" data-subject="' + row.subject +
                                            '"><i class="fa fa-edit"></i></button>' +
                                            '<button type="button" class="btn btn-link btn-danger" data-id="' +
                                            row.id + '"><i class="fa fa-times"></i></button>';
                                    }
                                }
                            ];
                            const guruTable = initializeDataTable("#add-row", "/guru", guruTableColumns);

                            // Event untuk memuat data guru ke dalam modal edit
                            $("#add-row").on("click", ".btn-link.btn-primary", function() {
                                const id = $(this).data("id");
                                console.log("ID guru: ", id);
                                fetch(`/guru/${id}`)
                                    .then(response => response.json())
                                    .then(data => {
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
                                    })
                                    .catch(error => console.error("Error mengambil data guru: ", error));
                            });

                            // Fungsi untuk mengupdate guru
                            $("#editRowButton").click(async function() {
                                const id = $(this).data("id");
                                const data = {
                                    name: $("#editName").val(),
                                    subject: $("#editSubject").val(),
                                    gender: $("#editGender").val(),
                                    hire_date: $("#editHireDate").val(),
                                    phone: $("#editPhone").val(),
                                    email: $("#editEmail").val(),
                                    gaji_pokok: $("#editGajiPokok").val(),
                                    tunjangan: $("#editTunjangan").val(),
                                    potongan: $("#editPotongan").val(),
                                };

                                try {
                                    const response = await fetch(`/guru/update/${id}`, {
                                        method: "PUT",
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        body: JSON.stringify(data)
                                    });
                                    if (!response.ok) throw new Error("Gagal mengupdate guru");
                                    console.log("Data guru berhasil diupdate");
                                    guruTable.ajax.reload();
                                    $("#editRowModal").modal("hide");
                                    showNotification("success", "Data guru berhasil diupdate.");
                                } catch (error) {
                                    console.error("Error mengupdate guru: ", error);
                                    showNotification("danger", "Terjadi kesalahan saat mengupdate guru.");
                                }
                            });

                            // Event untuk menghapus guru
                            $("#add-row").on("click", ".btn-link.btn-danger", function() {
                                const id = $(this).data("id");
                                console.log("ID guru untuk dihapus: ", id);
                                $("#deleteRowButtonConfirm").data("id", id);
                                $("#deleteRowModal").modal("show");
                            });

                            // Konfirmasi hapus guru
                            $("#deleteRowButtonConfirm").click(async function() {
                                const id = $(this).data("id");
                                try {
                                    const response = await fetch(`/guru/delete/${id}`, {
                                        method: "DELETE",
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    if (!response.ok) throw new Error("Gagal menghapus guru");
                                    console.log("Data guru berhasil dihapus");
                                    guruTable.ajax.reload();
                                    $("#deleteRowModal").modal("hide");
                                    showNotification("success", "Data guru berhasil dihapus.");
                                } catch (error) {
                                    console.error("Error menghapus guru: ", error);
                                    showNotification("danger", "Terjadi kesalahan saat menghapus guru.");
                                }
                            });

                            // Fungsi untuk menampilkan notifikasi
                            function showNotification(type, message) {
                                $.notify({
                                    icon: `<i class="fas fa-${type === 'success' ? 'check' : 'exclamation-triangle'}" style="color: ${type === 'success' ? 'green' : 'red'};"></i>`,
                                    title: type === 'success' ? "Berhasil!" : "Gagal!",
                                    message: message
                                }, {
                                    type: type,
                                    delay: 5000,
                                    timer: 1000,
                                    placement: {
                                        from: "top",
                                        align: "right"
                                    }
                                });
                            }

                            function scrollToTable() {
                                const tableGuru = document.getElementById('tabelGuru1');
                                if (tableGuru) {
                                    tableGuru.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'start'
                                    });
                                } else {
                                    console.error('Error: Elemen dengan ID "tableGuru" tidak ditemukan.');
                                }
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
                                                "#f3545d", "#fdaf4b", "#1d7af3", "#59d05d",
                                                "#177dff", "#ffc107", "#33cc33", "#6666cc",
                                                "#cc33cc", "#33cccc",
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

                            //     console.log('Data subjects:', @json($subjectCounts));
                            //     console.log('Data teachers:', @json($teachers));
                            //     console.log('Data subjectCounts:', @json($subjectCounts));
                        }

                        function initializeClassManagement() {
                            // Kode untuk manajemen kelas
                        }



                        function initializeStudentManagement() {
                            console.log("Document ready");
                            $(document).ajaxError(function(event, jqxhr, settings, thrownError) {
                                console.error("AJAX error terjadi:");
                                console.error("URL:", settings.url);
                                console.error("Error Message:", thrownError);
                                console.error("Response Text:", jqxhr.responseText);
                                $("#spinner").hide(); // Pastikan spinner disembunyikan saat error
                            });
                            var table = $("#add-row").DataTable({
                                pageLength: 5,
                                ajax: {
                                    url: "/siswa" // URL untuk mengambil data siswa
                                        ,
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
                                    }, {
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
                                            icon: '<span class="iconify" data-icon="akar-icons:error" style="color: red;"></span>', // Ganti dengan ikon Iconify yang sesuai
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
                                        class_id: classId // Mengirim ID kelas yang dipilih
                                            ,
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
                                            icon: '<span class="iconify" data-icon="akar-icons:error" style="color: red;"></span>', // Ganti dengan ikon Iconify yang sesuai
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
                                            icon: '<span class="iconify" data-icon="akar-icons:check" style="color: green;"></span>', // Ganti dengan ikon Iconify yang sesuai
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
                                            icon: '<span class="iconify" data-icon="akar-icons:error" style="color: red;"></span>', // Ganti dengan ikon Iconify yang sesuai
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
                        }
                        // Implementasi fungsi lainnya untuk manajemen guru, kelas, dsb.
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
                    <div id="spinner-container" style="display: none;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

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
                    {{-- trafix absensi --}}
                    <div class="col-lg-8">
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

                                            // Fungsi untuk memproses data dan memastikan integer
                                            const processData = (data) => {
                                                try {
                                                    if (typeof data === 'string') {
                                                        data = JSON.parse(data)
                                                    }
                                                    return Object.values(data).map(val => Math.floor(val));
                                                } catch (error) {
                                                    console.error('Error parsing/processing data:', error);
                                                    return []; // Return empty array if error parsing JSON
                                                }
                                            };

                                            const siswaData = processData(siswaCountPerDay);
                                            const guruData = processData(guruCountPerDay);

                                            console.log('Data siswaData:', siswaData);
                                            console.log('Data guruData:', guruData);

                                            // Konstanta untuk kategori
                                            const categories = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

                                            // Konfigurasi chart
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
                                                    categories: categories,
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
                                                        formatter: value => Math.floor(value) // Menampilkan tanpa desimal
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
                        {{-- <div class="col-md-4"> --}}
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Doughnut Chart</div>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="chart-container" style="width: 500px; height: 500px">
                                    <canvas id="doughnutChart" style="width: 100%; height: 100%"></canvas>
                                </div>
                            </div>
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



            </div>
        </div>
    </div>
    <!-- Chart JS -->
    <script src="{{ asset('tu/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('tu/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('tu/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    {{-- <script src="{{ asset('test/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
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
                            "#f3545d", "#fdaf4b", "#1d7af3", "#59d05d", "#177dff", "#ffc107",
                            "#33cc33", "#6666cc", "#cc33cc", "#33cccc",
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
        // Fungsi untuk menampilkan spinner
        var showSpinner = function() {
            console.log("Menampilkan spinner...");
            var spinner = document.getElementById("spinner");
            var spinnerContainer = document.getElementById("spinner-container");

            spinnerContainer.style.display = "flex"; // Menampilkan div spinner-container
            spinner.style.display = "flex"; // Menampilkan spinner
            spinner.style.visibility = "visible"; // Membuat spinner terlihat

            // Menambahkan animasi masuk untuk teks "Loading..."
            document.getElementById("loadingText").classList.add("animate__animated", "animate__lightSpeedInLeft");
        };

        // Fungsi untuk menyembunyikan spinner dengan animasi
        var hideSpinner = function() {
            console.log("Menghapus spinner...");
            var spinner = document.getElementById("spinner");
            var loadingText = document.getElementById("loadingText");
            var spinnerContainer = document.getElementById("spinner-container");

            // Hapus animasi pada loadingText
            loadingText.classList.remove("animate__lightSpeedInLeft");
            loadingText.classList.remove("animate__animated");

            // Tambahkan animasi keluar pada loadingText
            loadingText.classList.add("animate__lightSpeedOutRight");
            loadingText.classList.add("animate__animated");

            // Tambahkan animasi fadeOut pada spinner
            spinner.classList.add("animate__fadeOut");
            spinner.classList.add("animate__animated");

            // Tunggu sampai animasi selesai (1 detik) dan sembunyikan spinner
            setTimeout(function() {
                console.log("Sembunyikan spinner dan teks setelah animasi selesai...");
                spinner.style.visibility = "hidden"; // Membuat spinner tidak terlihat
                spinner.style.opacity = 0; // Membuat spinner transparan
                spinner.style.display = "none"; // Menyembunyikan spinner

                loadingText.style.visibility = "hidden"; // Membuat text tidak terlihat
                loadingText.style.opacity = 0; // Membuat text transparan
                loadingText.style.display = "none"; // Menyembunyikan text

                spinnerContainer.style.display = "none"; // Menyembunyikan div spinner-container

                // Reset animasi pada loadingText
                loadingText.classList.remove("animate__lightSpeedOutRight");
                loadingText.classList.remove("animate__animated");

                // Reset animasi pada spinner
                spinner.classList.remove("animate__fadeOut");
                spinner.classList.remove("animate__animated");

                console.log('Animasi selesai, class animasi direset');
            }, 1000); // durasi animasi

            // Reset status spinner
            localStorage.setItem('spinnerShown', 'true');
            console.log('localStorage reset');
            console.log('Spinner telah di hide');
        };

        // Panggil `showSpinner` saat halaman dimuat
        showSpinner();

        // Simulasi penggunaan spinner
        setTimeout(function() {
            hideSpinner();
        }, 3000); // Spinner akan hilang setelah 3 detik
        function resetActiveClass() {
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            sidebarItems.forEach((item) => {
                item.classList.remove('active');
            });
        }
        const sidebar = document.getElementById('sidebarnav');

        sidebar.addEventListener('click', (e) => {
            if (e.target.tagName === 'A' && e.target.hasAttribute('data-file')) {
                resetActiveClass();
                e.target.classList.add('active');
            }
        });
    </script>

</body>

</html>
