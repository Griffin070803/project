<!DOCTYPE html>
<html>
    <head>
        @include ('admin.blocks.head')
        @stack('css')
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include ('admin.blocks.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include ('admin.blocks.aside')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include ('admin.blocks.content-header')

                <!-- Main content -->
                {{-- <section class="content">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            Start creating your amazing application!
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </section> --}}
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            {{-- @include ('admin.blocks.footer') --}}
            <!-- Control Sidebar -->
            @include ('admin.blocks.control-sidebar')
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        @include ('admin.blocks.foot')
        @stack('js')
    </body>
</html>
