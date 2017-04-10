@extends('layouts.master')
@section('title','Laporan Penjualan Perpelanggan')
@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Penjualan Perpelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Penjualan Perpelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Penjualan Perpelanggan</h3>
              <h3 class="box-title pull-right">
                <a href="{{ url('/admin/stock/entry/create') }}" class="btn btn-block btn-success"> Export Excel</a>
              </h3>
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Awal</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" id="datepicker1">
                    </div>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" id="datepicker2">
                    </div>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.colmd6 -->
              </div><hr>
              <!-- /.row -->
              <a href="{{ url('/admin/perpelanggan/show') }}" class="btn btn-primary"><span class="fa fa-eye"></span> Tampilkan</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box-primary -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')

  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.6 -->
  {{-- <script src="../../bootstrap/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- DataTables -->
  {{-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  {{-- <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!-- bootstrap color picker -->
  <script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <!-- bootstrap time picker -->
  {{-- <script src="{{ asset('assetsplugins/timepicker/bootstrap-timepicker.min.js') }}"></script> --}}

  <!-- SlimScroll -->
  <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });
    });
  </script>
  <script>
    $(function () {
      //Date picker
      $('#datepicker1').datepicker({
        autoclose: true
      });
      $('#datepicker2').datepicker({
        autoclose: true
      });
      $("#example1").DataTable({
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true
      });

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  </body>
  </html>

@endsection
