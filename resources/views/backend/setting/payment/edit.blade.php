@extends('layouts.master')
@section('title','Edit Pelanggan')
@section('js')

@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Payment
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Payment</a></li>
      <li class="active">Edit Payment</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::model($payment, ['method' => 'PATCH','route' => ['payment.update', $payment->id]]) !!}
  		@include('backend.setting.payment.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->
@endsection
