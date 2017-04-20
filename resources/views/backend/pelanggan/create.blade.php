@extends('layouts.master')
@section('title','Tambah Pelanggan')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pelanggan</a></li>
        <li class="active">Tambah Pelanggan</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      @if (count($errors) > 0)

      @endif
      {!! Form::open(array('route' => 'pelanggan.store','method'=>'POST')) !!}
    		@include('backend.pelanggan.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
