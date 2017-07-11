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
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
      $('#example3').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
      $('#example4').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
      $('#example5').DataTable({
        "paging": true,
        "lengthChange": true,
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
                <!-- box-body --><br>
                <div class="nav-tabs-custom">
                  <div class="">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                <th width="10px">#</th>
                                <th width="100px">Nomor PO</th>
                                <th>Nama Pengirim</th>
                                <th>Nama Bank</th>
                                <th>Jumlah Transfer</th>
                                {{-- <th>Aksi</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($pembayaran as $pay)
                              <tr role="row" class="odd">
                                {!! Form::open(array('route' => 'finance.store','method'=>'POST')) !!}
                                <td class="sorting_1">{{ ++$s }}</td>
                                <td>{{ $pay->id_order }} <input type="hidden" size="5" name="po" value="{{ $pay->id_order }}"></td>
                                <td>{{ $pay->pengirim }}</td>
                                <td>{{ $pay->bank }}</td>
                                <td>Rp {{ number_format($pay->jumlah_transfer, 0,',','.') }}</td>
                                {{-- <td>
                                  <select name="status" id="" class="form-control">
                                  <option>-status-</option>
                                    <option value="disetujui" >Disetujui</option>
                                    <option value="ditolak" >Ditolak</option>
                                    <option value="pending" >Pending</option>
                                  </select>
                                  <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Update</button>
                                </td> --}}
                                {!! Form::close() !!}
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
