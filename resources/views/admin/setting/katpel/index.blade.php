@extends('layouts.master')
@section('title','Kategori Pelanggan')
@section('js')
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
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategori Pelanggan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kategori Pelanggan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">
            <a href="{{ url('/admin/katpel/create') }}" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> Pelanggan</a>
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
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">#</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Keterangan</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</th>
                      <th width="100px">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($katpel as $pel)
                        {{-- @if ($pel->id==1) --}}
                          {{-- jika ID pelanggan 1/pertama data tidak ditampilkan --}}
                          {{-- @else --}}
                            <tr role="row" class="odd">
                              <td class="sorting_1">{{ ++$i }}</td>
                              <td>{{ $pel->name }}</td>
                              <td>{{ $pel->keterangan }}</td>
                              <td>{{ $pel->status }}</td>
                              <td>
                                <a class="btn btn-primary" href="{{ route('katpel.edit', $pel->id) }}" title="Edit"><span class="fa fa-edit"></span> </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['katpel.destroy', $pel->id],'style'=>'display:inline']) !!}
                                {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                                <button type="submit" class="btn btn-danger" title="Hapus"><span class="fa fa-trash"></span></button>
                                {!! Form::close() !!}
                              </td>
                            </tr>
                        {{-- @endif --}}
                      @endforeach
                    </tbody>
                  </table>
                <center>  {!! $katpel->render() !!} </center>
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
