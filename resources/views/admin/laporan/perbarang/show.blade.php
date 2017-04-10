@extends('layouts.master')
@section('title','Laporan Penjualan Perbarang')
@section('content')

  {{-- Content Wrapper --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Penjualan Perbarang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan Penjualan Perbarang</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                2017/4/8 - 2017/5/8
              </h3>
                <h3 class="box-title pull-right">
                <a href="#" class="btn btn-block btn-success"> Export Excel</a>
              </h3>
            </div>
            <!-- /.box-header -->
            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
              <tr role="row">
                <th>#</th>
                <th width="100px">SKU</th>
                <th width="400px">Nama</th>
                <th>Nominal</th>
                <th>Jumlah Item</th>
                <th>Jumlah Transaksi</th>
              </tr>
              </thead>
              <tbody>
                <tr role="row" class="odd">
                  <td>1</td>
                  <td>PRD00123</td>
                  <td>Baby Cap</td>
                  <td>543.0293</td>
                  <td>8</td>
                  <td>3</td>
                </tr>
                <tr role="row" class="odd">
                  <td>2</td>
                  <td>PRD00123</td>
                  <td>Baby Cap</td>
                  <td>543.0293</td>
                  <td>8</td>
                  <td>3</td>
                </tr>
                <tr role="row" class="odd">
                  <td>3</td>
                  <td>PRD00123</td>
                  <td>Baby Cap</td>
                  <td>543.0293</td>
                  <td>8</td>
                  <td>3</td>
                </tr>
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

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
  <!-- page script -->
  <script>
    $(function () {
      // $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false
      });
    });
  </script>
  </body>
  </html>

@endsection