@extends('backend.layouts.master')
@section('title','Pesanan')
@section('js')
  <script>    
    // membuat function tampilkan_nama
    function tampilkan_nama(){
      var nilai_form=document.getElementById("product").value;
      document.getElementById("hasil").value = nilai_form;
      document.getElementById("link").setAttribute("href", "{{ url('cart/') }}/addItem/" + nilai_form,);
      // document.getElementById("hasil").innerHTML = "<h3>Nama Saya Adalah Andi</h3>";
    }
    function tampilkan_id(){
      var alamat=document.getElementById('get_id').value;
      document.getElementById('id_tampil').value = alamat;
    }
    
  </script>
@endsection
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
