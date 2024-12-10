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

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        {{-- <div class="body-wrapper"> --}}
        <div class="container-fluid">
            @yield('section')
        </div>
        {{-- </div> --}}
        {{-- <script src="{{ asset('test/assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
        <script src="{{ asset('test/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('test/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('test/assets/libs/simplebar/dist/simplebar.js') }}"></script>
        <script src="{{ asset('test/assets/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('test/assets/js/app.min.js') }}"></script>
        <script src="{{ asset('test/assets/js/dashboard.js') }}"></script>
</body>

</html>
