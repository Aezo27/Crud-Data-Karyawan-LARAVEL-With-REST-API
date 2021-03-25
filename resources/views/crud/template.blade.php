<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Crud - Rama</title>
        <!-- Favicon-->
        <link rel="icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="{{asset('assets/iconfont/material-icons.css')}}" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="{{asset('assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{asset('assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

        <!-- Bootstrap Spinner Css -->
        <link href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

        <!-- Bootstrap Select Css -->
        <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{asset('assets/css/themes/all-themes.css')}}" rel="stylesheet" />

        <!-- sweetalert2 -->
        <link href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />

        <!-- CSS manual -->
        <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    </head>

    <body class="theme-blue">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Tunggu Sebentar...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="./">Crud - Rama</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="{{asset('assets/images/user.png')}}" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Admin</b><br>
							Rama
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="">
                            <a href="{{route('home')}}">
                                <i class="material-icons">home</i>
                                <span>Data Pegawai</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('tambah')}}">
                                <i class="material-icons">assignment</i>
                                <span>Tambah Data</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> <a href="https://aezo27.github.io">Rama</a>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->

            <!-- #END# Right Sidebar -->
        </section>

        @yield('konten')

        <!-- Jquery Core Js -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Core Js -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

        <!-- Select Plugin Js -->
        <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="{{asset('assets/plugins/node-waves/waves.js')}}"></script>

        <!-- Jquery Validation Plugin Css -->
        <script src="{{asset('assets//plugins/jquery-validation/jquery.validate.js')}}"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="{{asset('assets/plugins/jquery-countto/jquery.countTo.js')}}"></script>

        <!-- Morris Plugin Js -->
        <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('assets/plugins/morrisjs/morris.js')}}"></script>

        <!-- Jquery Spinner Plugin Js -->
        <script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="{{asset('assets//plugins/node-waves/waves.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{asset('assets/js/admin.js')}}"></script>
        <script src="{{asset('assets/js/pages/forms/form-validation.js')}}"></script>

        <!-- Demo Js -->
        <script src="{{asset('assets/js/demo.js')}}"></script>

        <!-- Sweetalert2 -->
        <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
        @if (session('notif'))
        <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: "{{session('alert')}}",
                    title: "{{session('notif')}}"
                })
            });
        </script>
     @endif
     <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    @stack('script')

    </body>

    </html>