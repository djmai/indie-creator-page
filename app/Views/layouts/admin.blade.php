<!DOCTYPE html>
<html lang="{{ $currentLanguage ?? 'en' }}">

<head>

    @include('layouts.partials.admin.head')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        @include('layouts.partials.admin.preloader')

        <!-- Navbar -->
        @include('layouts.partials.admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.partials.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                @yield('title')
                            </h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <!-- section col -->
                        @section('content')
                        @show
                        <!-- section col -->
                    </div>
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        @include('layouts.partials.admin.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="@asset('assets/admin/plugins/jquery/jquery.min.js')"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="@asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js')"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="@asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')"></script>
    <!-- AdminLTE App -->
    <script src="@asset('assets/admin/js/adminlte.js')"></script>

    @section('scripts')
    @show

</body>

</html>
