@extends('layouts.master')
@section('title','Pengguna')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
                        <tr role="row">
                          <th width="10px">#</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Roles</th>
                          <th width="20px">Status</th>
                          <th>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td class="sorting_1">1</td>
                          <td>admin</td>
                          <td>admin@gmail.com</td>
                          <td>Admin</td>
                          <td>
                            <small class="label label-primary">Active</small>
                          </td>
                          <td>
                            <a href="#" class="fa fa-eye"></a>
                            <a href="#" class="fa fa-edit"></a>
                            <a href="#" class="fa fa-trash"></a>
                          </td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">1</td>
                          <td>user</td>
                          <td>user@gmail.com</td>
                          <td>Kasir</td>
                          <td>
                              <small class="label label-primary">Active</small>
                          </td>
                          <td>
                            <a href="#" class="fa fa-eye"></a>
                            <a href="#" class="fa fa-edit"></a>
                            <a href="#" class="fa fa-trash"></a>
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
