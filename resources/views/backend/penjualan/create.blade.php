@extends('layouts.master')
@section('title','Ekspedisi')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pesanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Pesanan</a></li>
      <li class="active">Tambah Pesanan</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'pesanan.store','method'=>'POST')) !!}
  		@include('backend.penjualan.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

  <!-- Page script -->

@endsection
