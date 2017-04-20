@extends('layouts.master')
@section('title','Tambah Kategori Produk/Barang')
@section('js')
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>
@endsection
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Kategori Barang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Kategri Barang</a></li>
      <li class="active">Tambah Kategori Barang</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    {!! Form::open(array('route' => 'KategoriProduk.store','method'=>'POST')) !!}
  		@include('backend.produk.kategori.form')
  	{!! Form::close() !!}
  </section>
  <!-- /.content -->

@endsection
