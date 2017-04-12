@extends('layouts.master')
@section('title','Edit Pelanggan')
@section('content')

  {{-- Content Wrapper --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pelanggan</a></li>
        <li class="active">Edit Pelanggan</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      {!! Form::model($pelanggans, ['method' => 'PATCH','route' => ['pelanggan.update', $pelanggans->id]]) !!}
    		@include('admin.pelanggan.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

  @include('layouts.footer')
</div>
<!-- /.wrapper -->

  <!-- Page script -->

@endsection
