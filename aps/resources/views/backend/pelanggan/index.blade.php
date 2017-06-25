@extends('backend.layouts.master')
@section('title','Pelanggan')
@section('js')
  <!-- page script -->
  <script>
    $(function () {
      // $("#example1").DataTable();
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
        Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Pelanggan</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <a href="{{ url('/admin/pelanggan/create') }}" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> Pelanggan</a>
            </h3>
            </div>
            <!-- /.box-header -->
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($pelanggans as $pel)
                          @if ($pel->admin==1)
                            {{-- jika ID pelanggan 1/pertama data tidak ditampilkan --}}
                            @else
                              <tr role="row" class="odd">
                                <td width="10px">{{ ++$i }}</td>
                                <td width="15px">{{ $pel->id }}</td>
                                <td>{{ $pel->name }}</td>
                                <td>{{ $pel->phone }}</td>
                                <td>{{ $pel->email }}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{ route('pelanggan.edit',$pel->id) }}"><span class="fa fa-edit"></span> Edit</a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['pelanggan.destroy', $pel->id],'style'=>'display:inline']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  {{-- <center>  {!! $pelanggans->render() !!} </center> --}}
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
