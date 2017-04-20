@extends('layouts.master')
@section('title','Ekspedisi')
@section('js')
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ekspedisi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Ekspedisi</a></li>
      <li class="active">{{$title}}</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'ekspedisi.store','method'=>'POST')) !!}
  		@include('backend.setting.ekspedisi.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
