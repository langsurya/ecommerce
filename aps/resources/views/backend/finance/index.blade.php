@extends('backend.layouts.master')
@section('title','Finance')
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
    });
  </script>
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Finance
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Finance</li>
    </ol>
  </section>
  <!-- /.Content header -->

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Finance</h3>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box">
                <div class="box-header with-border">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        {{ Form::select('berdasarkan', [
                          '' => 'Cari Berdasarkan',
                          'Pelanggan 1' => 'Pelanggan 1',
                          'Pelanggan 1' => 'Pelanggan 1'
                        ], null, ['class' => 'form-control']
                        ) }}
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col-md-2-->
                    <div class="col-md-4">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian...">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-flat" ><span class="fa fa-search"></span></button>
                        </span>
                      </div>
                    </div>
                    <div class="col-md-2 pull-right">
                      <div class="form-group">
                        {{ Form::select('berdasarkan', [
                          '' => 'Pilih Bank',
                          'bri' => 'BRI',
                          'bca' => 'BCA'
                        ], null, ['class' => 'form-control']
                        ) }}
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <div class="col-md-2 pull-right">
                      <div class="form-group">
                        {{ Form::select('status', [
                          '' => 'Status Finance',
                          'Pelanggan 1' => 'Pelanggan 1',
                          'Pelanggan 2' => 'Pelanggan 1'
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
                    <li class="active"><a href="#semua" data-toggle="tab" aria-expanded="false">Semua <span class="badge">{{ count($semua) }}</span></a></li>
                    <li class=""><a href="#pending" data-toggle="tab" aria-expanded="false">Pending <span class="badge">{{ count($pending) }}</span></a></li>
                    <li class=""><a href="#disetujui" data-toggle="tab" aria-expanded="true">Disetujui<span class="badge">14</span></a></li>
                    <li><a href="#ditolak" data-toggle="tab" aria-expanded="true">Ditolak <span class="badge">7</span></a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="semua">
                      <!-- row -->
                      <div class="row">
                        <div class="col-xs-12">

                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">
                                Semua Pesanan
                              </h3>
                              <h3 class="box-title pull-right">
                                <a href="{{ url('/backend/finance/store') }}" class="btn btn-block btn-primary">
                                  <span class="fa  fa-save"></span> Simpan
                                </a>
                              </h3><hr>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            <div class="">
                              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                
                                <div class="row">
                                  <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                      <thead>
                                        <tr role="row">
                                          <th width="10px">#</th>
                                          <th width="100px">Nomor PO</th>
                                          <th>Nama Pengguna</th>
                                          <th>Nama Pelanggan</th>
                                          <th>Nama Bank</th>
                                          <th>Total</th>
                                          <th>Status Finance</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach ($semua as $order)
                                        <tr role="row" class="odd">
                                          <td class="sorting_1">{{ ++$s }}</td>
                                          <td>{{ $order->po }}</td>
                                          <td>{{ $order->name }}</td>
                                          <td>{{ $order->fullname }}</td>
                                          <td>{{ $order->pay }}</td>
                                          <td>Rp {{ $order->total }}</td>
                                          <td>
                                            <select name="status" id="" class="form-control">
                                            <option>-status-</option>
                                              <option value="disetujui" {{ ($order->status == 'disetujui') ? 'selected' : '' }}>Disetujui</option>
                                              <option value="ditolak" {{ ($order->status == 'ditolak') ? 'selected' : '' }}>Ditolak</option>
                                              <option value="pending" {{ ($order->status == 'pending') ? 'selected' : '' }}>Pending</option>
                                            </select>
                                          </td>
                                        </tr>
                                      @endforeach
                                        <tr role="row" class="odd">
                                          <td class="sorting_1">1</td>
                                          <td>49</td>
                                          <td>kasir 1</td>
                                          <td>Agis Setiawan</td>
                                          <td>BCA</td>
                                          <td>Rp 339.000</td>
                                          <td>
                                            {{ Form::select('status', [
                                              'i' => 'Disetujui',
                                              'k' => 'Ditolak',
                                              'g' => 'Pending'
                                            ], null, ['class' => 'form-control']
                                            ) }}
                                          </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                          <td class="sorting_1">2</td>
                                          <td>50</td>
                                          <td>kasir 2</td>
                                          <td>Dita Andriani</td>
                                          <td>BRI</td>
                                          <td>Rp 439.000</td>
                                          <td>
                                            {{ Form::select('status', [
                                              'i' => 'Disetujui',
                                              'k' => 'Ditolak',
                                              'g' => 'Pending'
                                            ], null, ['class' => 'form-control']
                                            ) }}
                                          </td>
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
                    <div class="tab-pane" id="pending">
                      <!-- row -->
                      <div class="row">
                        <div class="col-xs-12">

                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">
                                Pending Pesanan
                              </h3>
                              <h3 class="box-title pull-right">
                                <a href="{{ url('/backend/finance/store') }}" class="btn btn-block btn-primary">
                                  <span class="fa  fa-save"></span> Simpan
                                </a>
                              </h3><hr>
                            </div>
                            <!-- /.box-header -->
                            <!-- box-body -->
                            <div class="">
                              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                      <thead>
                                        <tr role="row">
                                          <th width="10px">#</th>
                                          <th width="100px">Nomor PO</th>
                                          <th>Nama Pengguna</th>
                                          <th>Nama Pelanggan</th>
                                          <th>Nama Bank</th>
                                          <th>Total</th>
                                          <th>Status Finance</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach ($pending as $order)
                                        <tr role="row" class="odd">
                                          <td class="sorting_1">{{ ++$p }}</td>
                                          <td>{{ $order->po }}</td>
                                          <td>{{ $order->name }}</td>
                                          <td>{{ $order->fullname }}</td>
                                          <td>{{ $order->pay }}</td>
                                          <td>Rp {{ $order->total }}</td>
                                          <td>
                                            <select name="status" id="" class="form-control">
                                            <option value="">-status-</option>
                                              <option value="disetujui" {{ ($order->status == 'disetujui') ? 'selected' : '' }}>Disetujui</option>
                                              <option value="ditolak" {{ ($order->status == 'ditolak') ? 'selected' : '' }}>Ditolak</option>
                                              <option value="pending" {{ ($order->status == 'pending') ? 'selected' : '' }}>Pending</option>
                                            </select>
                                          </td>
                                        </tr>
                                      @endforeach
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

                    <div class="tab-pane" id="disetujui">
                      disetujui
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="ditolak">
                      <!-- The timeline -->
                      blm ditolak
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
