@extends('layouts.master')
@section('title','Payment Tambah')
@section('js')

@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Payment
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Payment</a></li>
      <li class="active">Tambah Payment</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'payment.store','method'=>'POST')) !!}
  		@include('admin.setting.payment.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
