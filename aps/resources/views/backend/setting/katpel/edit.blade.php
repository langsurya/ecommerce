@extends('backend.layouts.master')
@section('title','Edit Katpel')
@section('js')
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Kat Pelanggan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Kategori Pelanggan</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::model($katpel, ['method' => 'PATCH','route' => ['katpel.update', $katpel->id]]) !!}
  		@include('backend.setting.katpel.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
