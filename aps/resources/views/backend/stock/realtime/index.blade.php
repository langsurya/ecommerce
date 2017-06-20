@extends('backend.layouts.master')
@section('title','Real Time')
@section('js')
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
      $("#example3").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
      $("#example4").DataTable({
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
              <!--header -->
                {{-- <div class="box-header with-border">
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
                          <button type="button" class="btn btn-flat" ><span class="fa fa-search"></span>s</button>
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
                </div> --}}
                <!-- box-body --><br>
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#semua" data-toggle="tab" aria-expanded="false">Semua <span class="badge">{{ count($products) }}</span></a></li>
                    <li class=""><a href="#ready" data-toggle="tab" aria-expanded="false">Stock Ready <span class="badge">{{ count($stoks_ready) }}</span></a></li>
                    <li class=""><a href="#kurang" data-toggle="tab" aria-expanded="true">Stock Kurang <span class="badge">{{ count($stoks_kurang) }}</span></a></li>
                    <li><a href="#kosong" data-toggle="tab" aria-expanded="true">Stock Kosong <span class="badge">{{ count($stoks_kosong) }}</span></a></li>
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
                                <a href="{{ url('/backend/stock/real/export') }}" class="btn btn-block btn-success">
                                  <span class="fa  fa-file-excel-o"></span> Export Excel
                                </a>
                              </h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            {{-- <div class="">
                            </div> --}}
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

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
                                    @foreach ($products as $product)
                                      <tr role="row" class="odd">
                                        <td class="sorting_1">{{++$i}}</td>
                                        <td>{{ $product->product_sku }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_stok }}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
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
                      <!-- row -->
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">
                                Stock Ready Barang
                              </h3>
                              <h3 class="box-title pull-right">
                                <a href="{{ url('/backend/stock/real/export') }}" class="btn btn-block btn-success">
                                  <span class="fa  fa-file-excel-o"></span> Export Excel
                                </a>
                              </h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            {{-- <div class="">
                            </div> --}}
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                              <div class="row">
                                <div class="col-sm-12">
                                  <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                      <tr role="row">
                                        <th width="10px">#</th>
                                        <th width="100px">SKU</th>
                                        <th>Nama Barang</th>
                                        <th width="20px">Stock</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($stoks_ready as $ready)
                                      <tr role="row" class="odd">
                                        <td class="sorting_1">{{++$r}}</td>
                                        <td>{{ $ready->product_sku }}</td>
                                        <td>{{ $ready->product_name }}</td>
                                        <td>{{ $ready->product_stok }}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
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

                    <div class="tab-pane" id="kurang">
                      <!-- row -->
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">
                                Stock Barang Kurang
                              </h3>
                              <h3 class="box-title pull-right">
                                <a href="{{ url('/backend/stock/real/export') }}" class="btn btn-block btn-success">
                                  <span class="fa  fa-file-excel-o"></span> Export Excel
                                </a>
                              </h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            {{-- <div class="">
                            </div> --}}
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                              <div class="row">
                                <div class="col-sm-12">
                                  <table id="example3" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                      <tr role="row">
                                        <th width="10px">#</th>
                                        <th width="100px">SKU</th>
                                        <th>Nama Barang</th>
                                        <th width="20px">Stock</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($stoks_kurang as $kurang)
                                      <tr role="row" class="odd">
                                        <td class="sorting_1">{{++$k}}</td>
                                        <td>{{ $kurang->product_sku }}</td>
                                        <td>{{ $kurang->product_name }}</td>
                                        <td>{{ $kurang->product_stok }}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
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
                    <div class="tab-pane" id="kosong">
                      <!-- row -->
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">
                                Stock Barang Kosong
                              </h3>
                              <h3 class="box-title pull-right">
                                <a href="{{ url('/backend/stock/real/export') }}" class="btn btn-block btn-success">
                                  <span class="fa  fa-file-excel-o"></span> Export Excel
                                </a>
                              </h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            {{-- <div class="">
                            </div> --}}
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                              <div class="row">
                                <div class="col-sm-12">
                                  <table id="example4" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                      <tr role="row">
                                        <th width="10px">#</th>
                                        <th width="100px">SKU</th>
                                        <th>Nama Barang</th>
                                        <th width="20px">Stock</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($stoks_kosong as $kosong)
                                      <tr role="row" class="odd">
                                        <td class="sorting_1">{{++$g}}</td>
                                        <td>{{ $kosong->product_sku }}</td>
                                        <td>{{ $kosong->product_name }}</td>
                                        <td>{{ $kosong->product_stok }}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
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

@endsection
