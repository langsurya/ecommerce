@extends('layouts.master')
@section('title','Edit Produk')
@section('content')

  {{-- Content Wrapper --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kategori Barang</a></li>
        <li class="active">Edit Kategori Barang</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      {!! Form::model($barang, ['method' => 'PATCH','route' => ['KategoriProduk.update', $barang->barang_id]]) !!}
    		@include('admin.produk.kategori.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

  @include('layouts.footer')
</div>
<!-- /.wrapper -->

  <!-- Page script -->
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
