<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gyan Brikha   Admin & Dashboard ">
    <meta name="author" content="Gyan Brikha  Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.png')}}" />

    <!-- TITLE -->
    <title>@yield('title') | Dhruv's Practical</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />

</head>

<body class="app sidebar-mini ltr light-mode" >

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('Componentes.Header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('Componentes.Sidebar')

            <!--app-content open-->
            @yield('content')

            <!--app-content closed-->
        </div>
        <!-- FOOTER -->
        @include('Componentes.Footer')
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--SIDEMENU JS -->
<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- INTERNAL Notifications js -->
<!-- <script src="../assets/plugins/notify/js/rainbow.js"></script> -->
<script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
<!-- <script src="../assets/plugins/notify/js/jquery.growl.js"></script> -->
<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

<!-- TypeHead js -->
<script src="{{asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
<script src="{{asset('assets/js/typehead.js')}}"></script>

<!-- COUNTERS JS-->
<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{asset('assets/plugins/counters/counters-1.js')}}"></script>

<!-- SIDEBAR JS -->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

<!-- Color Theme js -->
<script src="{{asset('assets/js/themeColors.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- INPUT MASK JS-->
{{-- <script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script> --}}

<!-- FILE UPLOADES JS -->
<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

<!-- INTERNAL Bootstrap-Datepicker js-->
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- INTERNAL File-Uploads Js-->
<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

<!-- SELECT2 JS -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>

<!-- BOOTSTRAP-DATERANGEPICKER JS -->
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- INTERNAL Bootstrap-Datepicker js-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

<!-- INTERNAL Sumoselect js-->
<script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

<!-- TIMEPICKER JS -->
<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

<!-- INTERNAL intlTelInput js-->
<script src="{{asset('assets/plugins/intl-tel-input-master/intlTelInput.js')}}"></script>
<script src="{{asset('assets/plugins/intl-tel-input-master/country-select.js')}}"></script>
<script src="{{asset('assets/plugins/intl-tel-input-master/utils.js')}}"></script>

<!-- INTERNAL jquery transfer js-->
<script src="{{asset('assets/plugins/jQuerytransfer/jquery.transfer.js')}}"></script>

<!-- INTERNAL multi js-->
<script src="{{asset('assets/plugins/multi/multi.min.js')}}"></script>

<!-- DATEPICKER JS -->
<script src="{{asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

<!-- COLOR PICKER JS -->
<script src="{{asset('assets/plugins/pickr-master/pickr.es5.min.js')}}"></script>
<script src="{{asset('assets/js/picker.js')}}"></script>

<!-- MULTI SELECT JS-->
<script src="{{asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
<script src="{{asset('assets/plugins/multipleselect/multi-select.js')}}"></script>

<!-- FORMELEMENTS JS -->
<script src="{{asset('assets/js/formelementadvnced.js')}}"></script>
<script src="{{asset('assets/js/form-elements.js')}}"></script>

<!-- SHOW PASSWORD JS -->
<script src="{{asset('assets/js/show-password.min.js')}}"></script>


<!-- FORMVALIDATION JS -->
<script src="{{asset('assets/js/form-validation.js')}}"></script>

<!-- Handle Counter js -->
<script src="{{asset('assets/js/handlecounter.js')}}"></script>

<!-- NVD3-CHARTS JS -->
<script src="{{asset('assets/plugins/charts-nvd3/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/charts-nvd3/nv.d3.js')}}"></script>
<script src="{{asset('assets/plugins/charts-nvd3/stream_layers.js')}}"></script>
<script src="{{asset('assets/js/nvd3.js')}}"></script>


<!-- INTERNAL WYSIWYG Editor JS -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

@if(!empty(session('message')))
<script>
  window.onload = function() {
    not2("{{session('message')}}");
  };
</script>
@endif

@if(!empty(session('success')))
<script>
  window.onload = function() {
    not1("{{session('success')}}");
  };
</script>
@endif


</body>

</html>
