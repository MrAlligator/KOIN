<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/assets-user/img/logo-o-putih.png">
    <link rel="icon" type="image/png" href="../../assets/assets-user/img/logo-o-putih.png">
    <title>
        Komunitas Ekspor Indonesia | {{ $title }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../../assets/assets-admin/css/nucleo-icons.css" rel="stylesheet">
    <link href="../../assets/assets-admin/css/nucleo-svg.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/assets-admin/css/nucleo-svg.css" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/assets-admin/css/argon-dashboard.css?v=2.0.4" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-100">
    @include('partials.admin.sidenav')
    <!-- Main content -->
    <main class="main-content position-relative border-radius-lg ">
        @include('partials.admin.navbar')
        <div class="container-fluid py-4">
            <!-- -->
            @yield('container')
        </div>
    </main>
    @include('partials.admin.js')
</body>

</html>
