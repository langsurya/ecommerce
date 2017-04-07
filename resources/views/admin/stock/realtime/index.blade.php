@extends('layouts.master')
@section('title','Real Time')
@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Stock Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Stock</a></li>
        <li class="active">Real Time</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Stock Barang</h3>
            </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box">
                  <div class="box-header with-border">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          {{ Form::select('discount', [
                            '' => 'Cari Berdasarkan',
                            'Pelanggan 1' => 'Pelanggan 1',
                            'Pelanggan 1' => 'Pelanggan 1'
                          ], null, ['class' => 'form-control']
                          ) }}
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <div class="col-md-3">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Pencarian...">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-flat" ><span class="fa fa-search"></span></button>
                          </span>
                        </div>
                      </div>
                      <div class="col-md-3 pull-right">
                        <div class="form-group">
                          {{ Form::select('discount', [
                            '' => 'Urut Berdasarkan',
                            'Pelanggan 1' => 'Pelanggan 1',
                            'Pelanggan 1' => 'Pelanggan 1'
                          ], null, ['class' => 'form-control']
                          ) }}
                        </div>
                        <!-- /.form-group -->
                      </div>
                    </div>
                  </div>
                  <!-- box-body --><br>
                  <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#semua" data-toggle="tab" aria-expanded="false">Semua <span class="badge">50</span></a></li>
                        <li class=""><a href="#ready" data-toggle="tab" aria-expanded="false">Stock Ready <span class="badge">15</span></a></li>
                        <li class=""><a href="#kurang" data-toggle="tab" aria-expanded="true">Stock Kurang <span class="badge">3</span></a></li>
                        <li><a href="#kosong" data-toggle="tab" aria-expanded="true">Stock Kosong <span class="badge">7</span></a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="semua">
                          <!-- row -->
                          <div class="row">
                            <div class="col-xs-12">

                              <div class="box">
                                <div class="box-header">
                                  <h3 class="box-title">
                                    Stock Semua Barang
                                  </h3>
                                  <h3 class="box-title pull-right">
                                    <a href="{{ url('/admin/stock/real/export') }}" class="btn btn-block btn-success">
                                      <span class="fa  fa-file-excel-o"></span> Export Excel
                                    </a>
                                  </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- box-body -->
                                <div class="">
                                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <!-- row -->
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class="dataTables_length" id="example1_length">
                                          {{-- Show entries --}}
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div id="example1_filter" class="dataTables_filter">
                                          {{-- pencarian data  --}}
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                          <thead>
                                            <tr role="row">
                                              <th width="10px">#</th>
                                              <th width="100px">SKU</th>
                                              <th>Nama Barang</th>
                                              <th width="20px">Stock</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr role="row" class="odd">
                                              <td class="sorting_1">1</td>
                                              <td>Clothing</td>
                                              <td>Utama</td>
                                              <td>10</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                              <td class="sorting_1">2</td>
                                              <td>Fashion</td>
                                              <td>Fashion</td>
                                              <td>20</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                              <td class="sorting_1">3</td>
                                              <td>Utama</td>
                                              <td>(not set)</td>
                                              <td>5</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                          {{-- fungsi prev & next --}}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                            </div>
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="ready">
                          <!-- The timeline -->
                          blm bayar
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="kurang">

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="kosong">
                          <!-- The timeline -->
                          blm kosong
                        </div>
                        <!-- /.tab-pane -->

                      </div>
                      <!-- /.tab-content -->
                    </div>
                  <div class="box-body">
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.box-body -->
          </div>

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
