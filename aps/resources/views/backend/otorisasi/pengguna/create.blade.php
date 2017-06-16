@extends('backend.layouts.master')
@section('title','Pengguna')
@section('css')
  {{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap-toggle.min.css') }}">
@endsection
@section('js')
{{-- Bootstrap toggle --}}
<script src="{{ asset('public/js/bootstrap-toggle.min.js') }}"></script>
 {{--  <script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Active',
      off: 'Null'
    });
  })
  </script> --}}
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
    {!! Form::open(array('route' => 'pengguna.store','method'=>'POST')) !!}
  		@include('backend.otorisasi.pengguna.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
