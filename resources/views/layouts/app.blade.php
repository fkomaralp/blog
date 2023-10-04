<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, xtreme admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
        name="description"
        content="Xtreme is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Emre</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />

    <link rel="stylesheet" href="/admin/assets/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <!-- Favicon icon -->

    <!-- Custom CSS -->

    <!-- Custom CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="/admin/assets/css/fontawesome.min.css">
    <!-- Font Awesome -->
    <link href="/admin/assets/dist/css/style.min.css" rel="stylesheet" />
    {{--    <link href="/admin/assets/dist/css/file-manager-1.2.css" rel="stylesheet" />--}}
    <link href="/admin/assets/css/custom.css" rel="stylesheet" />
    @livewireStyles
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- -------------------------------------------------------------- -->
<!-- Preloader - style you can find in spinners.css -->
<!-- -------------------------------------------------------------- -->
<div class="preloader">
    <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
            stroke="#2962FF"
            stroke-width="2"
        ></path>
        <path
            d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
            stroke="#2962FF"
            stroke-width="2"
        ></path>
        <path
            id="teabag"
            fill="#2962FF"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
            id="steamL"
            d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke="#2962FF"
        ></path>
        <path
            id="steamR"
            d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
            stroke="#2962FF"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        ></path>
    </svg>
</div>
<!-- Pre-loader end -->
<div id="main-wrapper">
    <!-- -------------------------------------------------------------- -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <header class="topbar">
        @include('admin.includes.navbar')
    </header>
    <!-- -------------------------------------------------------------- -->
    <!-- End Topbar header -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- -------------------------------------------------------------- -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            @include('admin.includes.solbar')
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- -------------------------------------------------------------- -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
    <div class="page-wrapper">
        {{$slot}}
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer text-center">
            <a href="https://prestaturk.com">PrestaTürk </a>E-Ticaret & Özel Yazılım Sistemleri
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
</div>
<!-- -------------------------------------------------------------- -->
<!-- End Wrapper -->
<!-- -------------------------------------------------------------- -->
<div class="chat-windows"></div>
<!-- -------------------------------------------------------------- -->
<!-- All Jquery -->
<!-- -------------------------------------------------------------- -->
<script src="/admin/assets/dist/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/admin/assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- apps -->
<script src="/admin/assets/dist/js/app.min.js"></script>
<!-- full sidebar -->
<script>
    $(function () {
        'use strict';
        $('#main-wrapper').AdminSettings({
            Theme: false, // this can be true or false ( true means dark and false means light ),
            Layout: 'vertical',
            LogoBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            NavbarBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
            SidebarColor: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
        });
    });
</script>
<script src="/admin/assets/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/admin/assets/dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
<script src="/admin/assets/dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="/admin/assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/admin/assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/admin/assets/dist/js/feather.min.js"></script>
<script src="/admin/assets/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="/admin/assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="/admin/assets/dist/js/pages/dashboards/dashboard1.js"></script>
<script src="/admin/assets/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin/assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
<script src="/admin/assets/dist/libs/tinymce/tinymce.min.js"></script>
<script src="/admin/assets/dist/js/pages/contact/contact.js"></script>
{{--<script src="/admin/assets/dist/libs/tinymce/file-manager-1.2.js"></script>--}}
<script>
    $(function () {
        tinymce.init({
            selector: 'textarea#mymce'
        });
    });
</script>
@livewireScripts
</body>
</html>



