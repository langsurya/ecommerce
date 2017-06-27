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

    $(function () {
    var theText = $("#theText");
    // var theText = theText + 10;
    var theOutputText = $("#theOutputText");
    var theOutputKeyPress = $("#theOutputKeyPress");
    var theOutputKeyDown = $("#theOutputKeyDown");
    var theOutputKeyUp = $("#theOutputKeyUp");
    var theOutputFocusOut = $("#theOutputFocusOut");

    theText.keydown(function (event) {
        keyReport(event, theOutputKeyDown);
    });

    theText.keypress(function (event) {
        keyReport(event, theOutputKeyPress);
    });

    theText.keyup(function (event) {
        keyReport(event, theOutputKeyUp);
    });

    // theText.focusout(function (event) {
    //     theOutputFocusOut.html(".focusout() fired!");
    // });

    // theText.focus(function (event) {
    //     theOutputFocusOut.html(".focus() fired!");
    // });

    function keyReport(event, output) {
        // catch enter key = submit (Safari on iPhone=10)
        if (event.which == 10 || event.which == 13) {
            event.preventDefault();
        }
        // show event.which
        // output.html(event.which + "&nbsp;&nbsp;&nbsp;&nbsp;event.keyCode " + event.keyCode);
        // // report invisible keys  
        // switch (event.which) {
        //     case 0:
        //         output.append("event.which not sure");
        //         break;
        //     case 13:
        //         output.append(" Enter");
        //         break;
        //     case 27:
        //         output.append(" Escape");
        //         break;
        //     case 35:
        //         output.append(" End");
        //         break;
        //     case 36:
        //         output.append(" Home");
        //         break;
        // }
        // show field content
        theOutputText.text(parseInt(theText.val())+{{ str_replace(',00', '', str_replace('.', '', Cart::subtotal())) }});
    }
});
    
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
