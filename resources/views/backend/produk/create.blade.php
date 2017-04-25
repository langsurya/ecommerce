@extends('layouts.master')
@section('title','Barang')
@section('css')

@endsection
@section('js')
  <script src="{{asset('assets/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
    $("#input-2").fileinput({
      uploadUrl: "{{route('image.store')}}",
      uploadAsync: true,
      minFileCount: 1,
      maxFileCount: 5,
      allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
      uploadExtraData: function() {  // callback example
          var out = {_token: "{{ csrf_token() }}"};
          return out;
      }
    });
  </script>
  <script>
  $(document).ready(function () {
    // make the "Select a Report Type" option disabled and grey'd out
    $('#reportType option:eq(0)').attr('disabled', 'disabled').css('color', 'grey');
    });
  </script>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$title}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kategri Barang</a></li>
        <li class="active">Tambah Barang</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      {!! Form::open(array('route' => 'produk.store','method'=>'POST')) !!}
    		@include('backend.produk.form')
    	{!! Form::close() !!}
    </section>
    <!-- /.content -->
@endsection
