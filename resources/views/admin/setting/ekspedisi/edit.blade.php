@extends('layouts.master')
@section('title','Ekspedisi')
@section('content')

  {{-- Content Wrapper --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ekspedisi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ekspedisi</a></li>
        <li class="active">{{$title}}</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      {!! Form::model($ekspedisi, ['method' => 'PATCH','route' =>['ekspedisi.update', $ekspedisi->id]]) !!}
    		@include('admin.setting.ekspedisi.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>

  @include('layouts.footer')
</div>
<!-- /.wrapper -->

  <!-- Page script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      //Date range as a button
      $('#daterange-btn').daterangepicker(
          {
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
          },
          function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
  </script>

@endsection
