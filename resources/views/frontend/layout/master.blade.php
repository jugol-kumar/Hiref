<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codescandy.com/geeks-bootstrap-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Aug 2022 07:20:29 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("frontend") }}/assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->
    <link href="{{ asset("frontend") }}/assets/fonts/feather/feather.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="{{ asset("frontend") }}/assets/libs/dragula/dist/dragula.min.css" rel="stylesheet"/>
    <link href="{{ asset("frontend") }}/assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet"/>
    <link href="{{ asset("frontend") }}/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet"/>
    <link href="{{ asset("frontend") }}/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet"/>
    <link href="{{ asset("frontend") }}/assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
    <link href="{{ asset("frontend") }}/assets/libs/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    @stack('css')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset("frontend") }}/assets/css/theme.min.css">
    <link rel="stylesheet" href="{{ asset("frontend") }}/assets/css/custom.css">
    <title>Geeks - Bootstrap 5 Template</title>
</head>

<body class="bg-white">
<!-- navbar login -->
@include('frontend.inc.header')
<!-- Page Content -->
    @yield('content')
<!-- Page Content -->
<!-- footer -->
@include('frontend.inc.footer')
<!-- footer -->

<!-- Scripts -->
<!-- Libs JS -->
<script src="{{ asset("frontend") }}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/odometer/odometer.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/quill/dist/quill.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/dragula/dist/dragula.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/prismjs/prism.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/typed.js/lib/typed.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/fullcalendar/main.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/%40lottiefiles/lottie-player/dist/lottie-player.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/wnumb/wNumb.min.js"></script>
<script src="{{ asset("frontend") }}/assets/libs/glightbox/dist/js/glightbox.min.js"></script>



<!-- CDN File for moment -->
<script src='../../../../cdn.jsdelivr.net/npm/moment%402.29.1/min/moment.min.js'></script>




<!-- Theme JS -->
<script src="{{ asset("frontend") }}/assets/js/theme.min.js"></script>

@stack('js')
</body>

<!-- Mirrored from codescandy.com/geeks-bootstrap-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Aug 2022 07:21:27 GMT -->
</html>
