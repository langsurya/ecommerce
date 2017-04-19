@extends('layouts.master')
@section('title','Ekspedisi')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                <a href="{{ url('/admin/KategoriProduk/create') }}" class="btn btn-block btn-primary">
                  <span class="fa fa-plus"></span> Tambah Kategori Barang
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
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                          <th>Parent</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Keterangan</th>
                          <th  width="120px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($produks as $barang)
                          <tr role="row" class="odd">
                            <td class="sorting_1">{{ ++$i }}</td>
                            <td>{{ $barang->nama_barang}}</td>
                            <td>{{ $barang->parent }}</td>
                            <td>{!! $barang->keterangan !!}</td>
                            <td>
                              <a class="btn btn-primary" href="{{ route('KategoriProduk.show',$barang->barang_id) }}"><span class="fa fa-eye"></span></a>
                              <a class="btn btn-primary" href="{{ route('KategoriProduk.edit',$barang->barang_id) }}"><span class="fa fa-edit"></span></a>
                              {!! Form::open(['method' => 'DELETE','route' => ['KategoriProduk.destroy', $barang->barang_id], 'style' => 'display:inline']) !!}
                              <button class="btn btn-danger" type="submit" title="Hapus"><span class="fa fa-trash"></span></button>
                              {!! Form::close() !!}
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
