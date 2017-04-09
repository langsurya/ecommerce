@extends('layouts.master')
@section('title','Tambah Pelanggan')
@section('content')

  {{-- Content Wrapper --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pelanggan</a></li>
        <li class="active">Tambah Pelanggan</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      @if (count($errors) > 0)

      @endif
      {!! Form::open(array('route' => 'pelanggan.store','method'=>'POST')) !!}
    		@include('admin.pelanggan.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>

  @include('layouts.footer')

  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.6 -->
  {{-- <script src="../../bootstrap/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- Select2 -->
  {{-- <script src="../../plugins/select2/select2.full.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
  <!-- InputMask -->
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  {{-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> --}}
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap datepicker -->
  {{-- <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script> --}}
  <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!-- bootstrap color picker -->
  {{-- <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <!-- bootstrap time picker -->
  {{-- <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
  <!-- SlimScroll -->
  {{-- <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  {{-- <script src="../../plugins/fastclick/fastclick.js"></script> --}}
  <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  {{-- <script src="../../dist/js/app.min.js"></script> --}}
  <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="../../dist/js/demo.js"></script> --}}
  <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  <!-- Page script -->

  </body>
  </html>

@endsection
