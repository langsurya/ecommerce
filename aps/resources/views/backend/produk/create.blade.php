@extends('backend.layouts.master')
@section('title','Barang')
@section('css')

@endsection
@section('js')
  <script src="{{asset('public/assets/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/input-mask/jquery.inputmask.numeric.extensions.js')}}" type="text/javascript"></script>

  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
    $("#harga").inputmask();
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
    var max_fields = 3; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wapper
    var add_button = $(".add_field_button"); //Add buton
    var button = '<div class="form-group col-md-12"><div class="row"><div class="col-xs-2"><input type="text" class="form-control" placeholder="Name" name="name[]"></div><div class="col-xs-2"><input type="text" class="form-control" placeholder="Value" name="value[]"></div><div class="col-xs-3"><button type="button" class="btn btn-default remove_field">Remove field</button></div></div></div>';

    var x = 1; //initial text box count
    $(add_button).click(function(e) { //on add input button click
      e.preventDefault();
      if (x < max_fields) { //max input box allowed
          x++; //text box increment
          $(wrapper).append(button); //add input box
      }
    });

    $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
      e.preventDefault();
      $(this).closest('.form-group').remove();
      x--;
    })
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
        <li><a href=" }  ">Kategri Barang</a></li>
        <li class="active">Tambah Barang</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      <form class="" role="form" action="{{route('produk.store')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Produk</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#barang" data-toggle="tab" aria-expanded="false">Add Product </a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane  active" id="barang">
                      <!-- table -->
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Nama</label>
                              <input class="form-control" type="text" name="product_name" value="" >
                            </div>
                            <div class="form-group  col-md-6" id="reportType">
                              <label>Pilih Category</label>
                              <select class="form-control" name="id_category">
                                <option value="">Pilih Category</option>
                                @foreach ($category as $key=>$val)
                                <option value="{{$key}}">{{$val}}</option>
                                @endforeach
                              </select>
                              {{-- {{ Form::select('category',$category, null, ['class' => 'form-control']) }} --}}
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="sku">SKU</label>
                              <input type="text" class="form-control" placeholder="SKU" name="product_sku" value="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="stok">Stok</label>
                              <input type="text" class="form-control" placeholder="stok" name="product_stok" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12">
                              <label for="harga">Harga Produk</label>
                              <input id="harga" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" type="text" name="product_price" class="form-control" value="{{old('product_price')}}">
                              {{-- <input type="text" name="harga" class="form-control" placeholder="Harga Produk" value=""> --}}
                            </div> <!-- form-group -->
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Berat (Gram)</label>
                              <input class="form-control" type="text" name="product_berat" value="" >
                            </div>
                            <div class="form-group  col-md-6">
                              <label>Status</label>
                              {{ Form::select('product_status', [
                                '1' => 'Aktif',
                                '0' => 'Tidak Aktif'
                              ], null, ['class' => 'form-control']
                              ) }}
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.row -->
                          {{-- <div class="row">
                            <div class="form-group  col-md-6">
                              <label>Discount Nominal</label>
                              <input class="form-control" type="text" name="product_discount" value="0" >
                            </div> --}}
                            <!-- /.form-group -->
                          {{-- </div> --}}
                          <!-- /.row -->
                          <div class="row">
                            <div class="form-group col-md-12">
                              <label>Keterangan Lengkap</label>
                              {!! Form::textarea('product_description', null, array('id' => 'editor1')) !!}
                            </div>
                          </div> <!-- /.row -->
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <label for="exampleInputFile">Images</label>
                                  <input id="input-2" type="file" name='image[]' multiple=true class="file-loading" data-show-upload="false">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input_fields_wrap">
                              <div class="form-group col-md-12">
                                <label>Attributes</label>
                                <p>Add variants if this product comes in multiple versions, like different sizes or colors.</p>
                                <div class="row">
                                  <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Name" name="name[]">
                                  </div>
                                  <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Value" name="value[]">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> <!-- /.row -->
                          <div class="form-group">
                            <div class="row">
                              <div class="col-xs-3">
                                <button type="button" class="btn btn-default add_field_button">Add field</button>
                              </div>
                            </div>
                          </div><!-- /.form-group-->
                        </div><!-- /.col-md-12 -->
                      </div>
                      <!-- /.row -->
                    </div><!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <div class="box-footer">
                  <a href="{{ url('/backend/produk') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
                  <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
                </div>

              </div>
              <!-- /.box-body -->
            </div>

          </div>
        </div>

      </form>
      {{-- {!! Form::open(array('route' => 'produk.store','method'=>'POST')) !!}
    		@include('backend.produk.form')
    	{!! Form::close() !!} --}}
    </section>
    <!-- /.content -->
@endsection
