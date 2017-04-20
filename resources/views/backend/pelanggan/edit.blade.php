@extends('layouts.master')
@section('title','Edit Pelanggan')
@section('js')
@endsection
@section('content')

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
  		@include('backend.pelanggan.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

  <!-- Page script -->

@endsection
