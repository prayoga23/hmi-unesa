<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin-sb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin-sb/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('admin-sb/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded " alt=""> -->
                </div>
                <div class="sidebar-brand-text mx-3">Portal HMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Postingan
            </div>

            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.mypublikasi.index') }}"
                    href="{{ route('portal.mypublikasi.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Publikasi Saya</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.myberita.index') }}" href="{{ route('portal.myberita.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Berita Saya</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.mygaleri.index') }}" href="{{ route('portal.mygaleri.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Galeri Saya</span>
                </a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Managemen Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.publikasi.index') }}"
                    href="{{ route('portal.publikasi.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Publikasi </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.berita.index') }}" href="{{ route('portal.berita.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Berita </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.galeri.index') }}" href="{{ route('portal.galeri.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Galeri </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('portal.kategori-publikasi.index') }}"
                    href="{{ route('portal.kategori-publikasi.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Kategori Publikasi </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.kategori-berita.index') }}"
                    href="{{ route('portal.kategori-berita.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Kategori Berita </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Nav::isRoute('admin.kategori-galeri.index') }}"
                    href="{{ route('portal.kategori-galeri.index') }}">
                    <span class="fas fa-fw fa-bars"></span>
                    <span class="sidenav-normal"> Kategori Galeri </span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->nama}}</span>
                                <img class="img-profile rounded-circle" src="{{ asset(auth()->user()->gambar) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('portal.profil.index') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('row-content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah yakin akan keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{
                        __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin-sb/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-sb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin-sb/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin-sb/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin-sb/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('admin-sb/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-sb/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
    @yield('script')


</body>

</html>