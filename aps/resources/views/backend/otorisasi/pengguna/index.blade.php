@extends('backend.layouts.master')
@section('title','Pengguna')
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
      Pengguna
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengguna</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Pengguna</h3>
            <h3 class="box-title pull-right">
              <a href="{{ url('/admin/pengguna/create') }}" class="btn btn-block btn-primary">
                <span class="fa fa-plus"></span> Tambah Pengguna
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
                      <tr role="row" align="center">
                        <th width="10px">#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr role="row" align="center">
                        <td class="sorting_1">1</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>Admin</td>
                        <td>
                          <a href="#" class="fa fa-eye"></a>
                          <a href="#" class="fa fa-edit"></a>
                          {{-- <a href="#" class="fa fa-trash"></a> --}}
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

@endsection
