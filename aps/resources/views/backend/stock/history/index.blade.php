@extends('backend.layouts.master')
@section('title','History Stock')
@section('js')
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
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Laporan History Stock Barang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Stock</a></li>
      <li class="active">History</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Laporan History Stock Barang</h3>
            <h3 class="box-title pull-right">
              <a href="{{ url('/backend/history/create') }}" class="btn btn-block btn-success"> Export Excel</a>
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
                <div class="form-group">
                  <label>Barang</label>
                  {{ Form::select('barang', [
                    '' => '',
                    '' => ''
                  ], null, ['class' => 'form-control']
                  ) }}
                </div>
              </div>
              <!-- /.colmd4 -->
            </div>
            <!-- /.row -->


          </div><hr>
          <!-- /.box-body -->
          <div class="box-body">
            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Tampilkan</button>
          </div>
          <!-- /.box-footer -->
        </div>

      </div>
    </div>

  </section>
  <!-- /.content -->

@endsection
