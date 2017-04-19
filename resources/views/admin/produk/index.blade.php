@extends('layouts.master')
@section('title','Ekspedisi')
@section('js')
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
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
      Barang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Barang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">
              <a href="{{ url('/admin/produk/create') }}" class="btn btn-block btn-primary">
                <span class="fa fa-plus"></span> Tambah Barang
              </a>
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
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
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" width="10px" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">#</th>
                        <th>Sku</th>
                        <th>Name</th>
                        <th>Harga Retail</th>
                        <th>Harga Reseller</th>
                        <th>Grosir</th>
                        <th>Stok</th>
                        <th  width="120px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td class="sorting_1">1</td>
                        <td>PRD00213124</td>
                        <td>Botol Susu</td>
                        <td>Rp. 50.000</td>
                        <td>Rp. 45.000</td>
                        <td><span class="fa fa-check" style="font-size:18px; color:Green"></span></td>
                        <td>0</td>
                        <td>
                          <button class="btn btn-primary" type="button" title="view"><span class="fa fa-eye"></span></button>
                          <button class="btn btn-primary" type="button" title="edit"><span class="fa fa-edit"></span></button>
                          <button class="btn btn-danger" type="button" title="Hapus"><span class="fa fa-trash"></span></button>
                        </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">2</td>
                        <td>PRD00213124</td>
                        <td>Botol Susu Anak</td>
                        <td>Rp. 40.000</td>
                        <td>Rp. 35.000</td>
                        <td><span class="fa fa-check" style="font-size:18px; color:Green"></span></td>
                        <td>0</td>
                        <td>
                          <button class="btn btn-primary" type="button" title="view"><span class="fa fa-eye"></span></button>
                          <button class="btn btn-primary" type="button" title="edit"><span class="fa fa-edit"></span></button>
                          <button class="btn btn-danger" type="button" title="Hapus"><span class="fa fa-trash"></span></button>
                        </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">3</td>
                        <td>PRD00213124</td>
                        <td>Tes 123 Hitam</td>
                        <td>Rp. 50.000</td>
                        <td>Rp. 45.000</td>
                        <td><span class="fa fa-close" style="font-size:18px; color:Red"></span></td>
                        <td>0</td>
                        <td>
                          <button class="btn btn-primary" type="button" title="view"><span class="fa fa-eye"></span></button>
                          <button class="btn btn-primary" type="button" title="edit"><span class="fa fa-edit"></span></button>
                          <button class="btn btn-danger" type="button" title="Hapus"><span class="fa fa-trash"></span></button>
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
      </div>
    </div>

  </section>
  <!-- /.content -->
@endsection
