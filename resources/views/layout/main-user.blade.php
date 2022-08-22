<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Komunitas Ekspor Indonesia | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="/assets/assets-user/img/logo-o-putih.png" rel='shortcut icon'>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/assets-user/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/assets/assets-user/css/style.css?v=1.0" rel="stylesheet">
</head>

<body>
    @include('partials.user.topbar')
    <main id="main">
        @yield('container')
    </main>
    @include('partials.user.footer')
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>
    @include('partials.user.modal')
    @include('partials.user.js')
</body>

</html>
