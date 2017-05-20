<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}">
  {{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap-toggle.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Date Picter -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datepicker/datepicker3.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/iCheck/all.css') }}">
  <!-- fileinput css-->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/fileinput/fileinput.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/select2/select2.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables/dataTables.bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/assets/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/assets/dist/css/skins/_all-skins.min.css') }}">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@section('css')
@show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('backend.layouts.header')
  @include('backend.layouts.sidebar')

  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('backend.layouts.footer')
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('public/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>
{{-- Bootstrap toggle --}}
<script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('public/assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('public/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- InputMask -->
<script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('public/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('public/assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('public/assets/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('public/assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<!-- SlimScroll -->
<script src="{{ asset('public/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/assets/dist/js/demo.js') }}"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

@section('js')
@show
</body>
</html>
