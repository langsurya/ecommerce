@extends('layouts.master')
@section('title','Kategori Pelanggan')
@section('js')
  {{-- no js --}}
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategori Pelanggan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Pelanggan</a></li>
      <li class="active">Tambah Kategori Pelanggan</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'katpel.store','method'=>'POST')) !!}
  		@include('backend.setting.katpel.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->


@endsection
