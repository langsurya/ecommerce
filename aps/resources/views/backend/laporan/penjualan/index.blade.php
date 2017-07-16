@extends('backend.layouts.master')
@section('title','Laporan Penjualan')
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
      Laporan Penjualan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Laporan Penjualan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Laporan Penjualan</h3>
            <h3 class="box-title pull-right">
              {{-- <a href="{{ url('/backend/stock/entry/create') }}" class="btn btn-block btn-success"> Export Excel</a> --}}
            </h3>
          </div>
          <!-- /.box-header -->
          <!-- box-body -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <thead>
                      <tr role="row">
                        <th>#</th>
                        <th>No. PO</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Payment</th>
                        <th>Ekspedisi</th>
                        <th>Paket</th>
                        <th>Nomor Resi</th>
                        <th>Subtotal</th>
                        <th>Discount</th>
                        <th>Ongkir</th>
                        <th>Total</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $lap)
                        <tr role="row">
                          <td>{{ ++$i }}</td>
                          <td>#{{ $lap->po }}</td>
                          <td>Tanggal</td>
                          <td>{{ $lap->fullname }}</td>
                          <td>{{ $lap->pay }}</td>
                          <td>{{ $lap->ekspedisi }}</td>
                          <td>{{ $lap->paket }}</td>
                          <td>{{ $lap->no_resi }}</td>
                          <td>Rp {{ str_replace(',00', '', $lap->total) }}</td>
                          <td>{{ 0 }}</td>
                          <td>Rp {{ number_format($lap->ongkir,0,',','.') }}</td>
                          <td>Rp {{ number_format($lap->ongkir+str_replace(['.',',00'], '', $lap->total),0,',','.') }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box-primary -->
      </div>
    </div>

  </section>
  <!-- /.content -->

@endsection
