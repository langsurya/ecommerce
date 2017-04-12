@extends('layouts.master')
@section('title','Entry Stock')
@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Entry Stock
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Stock</a></li>
        <li class="active">Entry</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Entry Stock</h3>
              <h3 class="box-title pull-right">
                <a href="{{ url('/admin/stock/entry/create') }}" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
              </h3>
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" value="{{ date('Y-m-d') }}" disabled>
                    </div>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.colmd4 -->
                <div class="col-md-8">
                  <label>Keterangan</label>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pencarian...">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.form-md-8 -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-1">
                  #
                </div>
                <div class="col-md-5">
                  Nama Barang
                </div>
                <div class="col-md-3">
                  Masuk/Keluar
                </div>
                <div class="col-md-3">
                  Keluar
                </div>
              </div><hr>
              <!-- /.row-->
              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                  {{ Form::select('aksi', [
                    '' => '',
                    '' => ''
                    ], null, ['class' => 'form-control']
                    ) }}
                </div>
                <div class="col-md-3">
                  {{ Form::select('aksi', [
                    'masuk' => 'Masuk',
                    'keluar' => 'Keluar'
                    ], null, ['class' => 'form-control']
                    ) }}
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                </div>
                <!-- /.row -->
            </div><hr>
            <!-- /.box-body -->
            <div class="box-body">
              <a href="{{ url('/admin/entry') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
              <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
            <!-- /.box-footer -->
          </div>

        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')
</div>
<!-- /.wrapper -->
  <!-- page script -->
  <script>
    $(function () {
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
