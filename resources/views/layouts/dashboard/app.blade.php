<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Kaiadmin - Bootstrap 5 Admin Dashboard')</title>  <!-- Bagian ini diubah -->
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{ asset('tu/assets/img/kaiadmin/favicon.ico')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('tu/assets/js/plugin/webfont/webfont.min.js')}}') }}"></script>
    <script src="https://kit.fontawesome.com/0d0cc84b42.js" crossorigin="anonymous"></script>
    {{--  <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset ('tu/assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>  --}}

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('tu/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('tu/assets/css/kaiadmin.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('tu/assets/css/demo.css')}}" />
  </head>



  <body>



    <div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="light-blue2">
              <a href="index.html" class="logo">
                <img
                  src="{{ asset('tu/assets/img/kaiadmin/logo_light.svg')}}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
              <ul class="nav nav-secondary">
                <li class="nav-item active">
                  <a
                    data-bs-toggle="collapse"
                    href="#dashboard"
                    class="collapsed"
                    aria-expanded="false"
                  >
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="dashboard">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="../demo1/index.html">
                          <span class="sub-item">Dashboard 1</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-section">
                  <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                  </span>
                  <h4 class="text-section">______</h4>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#base">
                    <i class="fas fa-layer-group"></i>
                    <p>Akademik</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="base">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="components/avatars.html">
                          <span class="sub-item">Nilai Siwa</span>
                        </a>
                      </li>
                      <li>
                        <a href="components/avatars.html">
                          <span class="sub-item">Absensi Siswa</span>
                        </a>
                      </li>

                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarLayouts">
                    <i class="fas fa-th-list"></i>
                    <p>Administrasi</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="sidebarLayouts">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="components/buttons.html">
                              <span class="sub-item">Sumbangan Pembinaan Pendidikan(SPP)</span>
                            </a>
                        </li>
                        <li>
                            <a href="components/buttons.html">
                              <span class="sub-item">Slip Gaji Guru</span>
                            </a>
                        </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#forms">
                    <i class="fas fa-pen-square"></i>
                    <p>Forms</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="forms">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="forms/forms.html">
                          <span class="sub-item">Basic Form</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#tables">
                    <i class="fas fa-table"></i>
                    <p>Tables</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="tables">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="tables/tables.html">
                          <span class="sub-item">Basic Table</span>
                        </a>
                      </li>
                      <li>
                        <a href="tables/datatables.html">
                          <span class="sub-item">Datatables</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#maps">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Maps</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="maps">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="maps/googlemaps.html">
                          <span class="sub-item">Google Maps</span>
                        </a>
                      </li>
                      <li>
                        <a href="maps/jsvectormap.html">
                          <span class="sub-item">Jsvectormap</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#charts">
                    <i class="far fa-chart-bar"></i>
                    <p>Charts</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="charts">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="charts/charts.html">
                          <span class="sub-item">Chart Js</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts/sparkline.html">
                          <span class="sub-item">Sparkline</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="widgets.html">
                    <i class="fas fa-desktop"></i>
                    <p>Widgets</p>
                    <span class="badge badge-success">4</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../documentation/index.html">
                    <i class="fas fa-file"></i>
                    <p>Documentation</p>
                    <span class="badge badge-secondary">1</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#submenu">
                    <i class="fas fa-bars"></i>
                    <p>Menu Levels</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="submenu">
                    <ul class="nav nav-collapse">
                      <li>
                        <a data-bs-toggle="collapse" href="#subnav1">
                          <span class="sub-item">Level 1</span>
                          <span class="caret"></span>
                        </a>
                        <div class="collapse" id="subnav1">
                          <ul class="nav nav-collapse subnav">
                            <li>
                              <a href="#">
                                <span class="sub-item">Level 2</span>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <span class="sub-item">Level 2</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" href="#subnav2">
                          <span class="sub-item">Level 1</span>
                          <span class="caret"></span>
                        </a>
                        <div class="collapse" id="subnav2">
                          <ul class="nav nav-collapse subnav">
                            <li>
                              <a href="#">
                                <span class="sub-item">Level 2</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <span class="sub-item">Level 1</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">

        @yield('content') <!-- Tempat untuk konten halaman -->
        </div>
    </div>

    <button class="topbar-toggler more">
        {{--  <!--   Core JS Files   -->  --}}
        <script src="{{ asset('tu/assets/js/core/jquery-3.7.1.min.js')}}"></script>
        <script src="{{ asset('tu/assets/js/core/popper.min.js')}}"></script>
        <script src="{{ asset('tu/assets/js/core/bootstrap.min.js')}}"></script>

        {{--  <!-- jQuery Scrollbar -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

        {{--  <!-- Chart JS -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/chart.js/chart.min.js')}}"></script>

        {{--  <!-- jQuery Sparkline -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

        {{--  <!-- Chart Circle -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

        {{--  <!-- Datatables -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/datatables/datatables.min.js')}}"></script>

        {{--  <!-- Bootstrap Notify -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

        {{--  <!-- jQuery Vector Maps -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
        <script src="{{ asset('tu/assets/js/plugin/jsvectormap/world.js')}}"></script>

        {{--  <!-- Sweet Alert -->  --}}
        <script src="{{ asset('tu/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

        {{--  <!-- Kaiadmin JS -->  --}}
        <script src="{{ asset('tu/assets/js/kaiadmin.js')}}"></script>

        {{--  <!-- Kaiadmin DEMO methods, don't include it in your project! -->  --}}
        <script src="{{ asset('tu/assets/js/setting-demo.js')}}"></script>
        <script src="{{ asset('tu/assets/js/demo.js')}}"></script>
        <script>
          $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
          });

          $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
          });

          $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
          });
        </script>
</body>
</html>
