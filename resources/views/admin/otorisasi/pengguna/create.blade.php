@extends('layouts.master')
@section('title','Ekspedisi')
@section('js')
  <script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Active',
      off: 'Banned'
    });
  })
  </script>
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    {{ $title }}
    </h1>
    {!! $breadcrumb !!}
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'ekspedisi.store','method'=>'POST')) !!}
  		@include('admin.otorisasi.pengguna.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
