<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>IVDN | DCA</title>

    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="{{ url(mix('backend/views/admin/css/template.css'))}}" rel="stylesheet" />
    <link href="{{ url(mix('backend/views/admin/css/dataTables.bootstrap4.css'))}}" rel="stylesheet" />
    <link href="{{ url(mix('backend/views/admin/css/ajax.css'))}}" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="sb-nav-fixed">

    <div class="ajax_response"></div>

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">IVDN | DCA</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="ml-auto"></div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url(route('admin.logout')) }}" role="button"><i class="fas fa-sign-out-alt mr-2"></i></i>Sair</a>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link" href="{{ url(route('admin.home')) }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Mapas
                        </a>

                        <a class="nav-link" href="{{ route('public.maps') }}" target="_blank">
                            <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                            Público
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Usuário:</div>
                    Inútil
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            @include('admin.includes.footer')

        </div>
    </div>
    <script src="{{ url(mix('backend/views/admin/js/libs.js'))}}"></script>
    <script src="{{ url(mix('backend/views/admin/js/scripts.js'))}}"></script>

    <script src="{{ url(mix('backend/views/admin/js/datatable.js'))}}" ></script>
    <script src="{{ url(mix('backend/views/admin/js/datatable_config.js'))}}" ></script>
    <script src="{{ url(mix('backend/views/admin/js/ajax.js'))}}" ></script>

</body>

</html>
