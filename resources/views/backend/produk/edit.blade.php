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
    var button = '<div class="form-group"><div class="row"><div class="col-xs-2"><input type="text" class="form-control" placeholder="Name" name="name[]"></div><div class="col-xs-2"><input type="text" class="form-control" placeholder="Value" name="value[]"></div><div class="col-xs-3"><button type="button" class="btn btn-default remove_field">Remove field</button></div></div></div>';

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
                    <li class="active"><a href="#barang" data-toggle="tab" aria-expanded="false">Barang </a></li>
                    <li><a href="#varian" data-toggle="tab" aria-expanded="false">Varian </a></li>
                    <li><a href="#gambar" data-toggle="tab" aria-expanded="true">Gambar </a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane  active" id="barang">
                      <!-- table -->
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Nama</label>
                              <input class="form-control" type="text" name="name" value="{{$product->product_name}}" >
                            </div>
                            <div class="form-group  col-md-6" id="reportType">
                              <label>Category</label>
                              <select name="id_category" class="form-control" id="">
                                <option value="">Pilih Category</option>
                                @foreach ($category as $key=>$val)
                                  <option value="{{ $key }}" {{$key == $product->id_category ? 'selected="selected"' : ''}}>{{$val}}</option>
                                @endforeach
                              </select>
                              {{-- {{ Form::select('category',$category, null, ['class' => 'form-control']
                              ) }} --}}
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="sku">SKU</label>
                              <input type="text" class="form-control" placeholder="SKU" name="sku" value="{{$product->product_sku}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="stok">Stok</label>
                              <input type="text" class="form-control" placeholder="stok" name="stok" value="{{$product->product_stok}}">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12">
                              <label for="harga">Harga Produk</label>
                              <input id="harga" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" type="text" name="product_price" class="form-control" value="{{$product->product_price}}">
                              {{-- <input type="text" name="harga" class="form-control" placeholder="Harga Produk" value=""> --}}
                            </div> <!-- form-group -->
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Berat (Gram)</label>
                              <input class="form-control" type="text" name="name" value="{{$product->product_berat}}" >
                            </div>
                            <div class="form-group  col-md-6">
                              <label>Status</label>
                              <select class="form-control" name="status" id="">
                                <option value="">Pilih Status</option>
                                  <option value="1" {{$product->product_status == 1 ? 'selected' : ''}}>Aktif</option>
                                  <option value="0" {{$product->product_status == 0 ? 'selected' : ''}}>Tidak Aktif</option>
                              </select>
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.row -->
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Discount Type</label>
                              {{ Form::select('status', [
                                'Rp' => 'Rp',
                                'R' => 'R'
                              ], null, ['class' => 'form-control']
                              ) }}

                            </div>
                            <div class="form-group  col-md-6">
                              <label>Discount Nominal</label>
                              <input class="form-control" type="text" name="name" value="{{$product->product_discount}}" >
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.row -->
                          <div class="row">
                            <div class="form-group col-md-12">
                              <label>Keterangan Lengkap</label>
                              <textarea name="product_description" id="editor1" cols="30" rows="10">{{ $product->product_description }}</textarea>
                              {{-- {!! Form::textarea('editor1', null, array('id' => 'editor1')) !!} --}}
                            </div>
                          </div>
                        </div>
                        <!-- /.col-md-9 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="varian">
                      <!-- Table -->
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input_fields_wrap">
                            @if (count($attribute) > 0)
                            @foreach ($attribute as $key => $attr)
                              <div class="form-group">
                                @if ($key == 0)
                                  <label>Attribute</label>
                                @endif
                                <div class="row">
                                  <div class="col-xs-2">
                                    <input type="text" class="form-control" name="name[]" value="{{$attr->name}}">
                                  </div>
                                  <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Value" name="value[]" value="{{$attr->values}}">
                                  </div>
                                  @if ($key != 0)
                                    <div class="col-xs-3">
                                      <button type="button" class="btn btn-default remove_field">Remove field</button>
                                    </div>
                                  @endif
                                </div>
                              </div>
                            @endforeach   
                            @else
                            <div class="form-group">
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
                            @endif                                
                            
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <button type="button" class="btn btn-default add_field_button">Add field</button>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div> 
                      <div class="box-footer">
                        <a href="{{ url('/backend/produk') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
                        <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
                      </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="gambar">
                      <!-- The timeline -->
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
                      <div class="box-footer">
                        <a href="{{ url('/backend/produk') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
                        <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Path Full</th>
                                <th>Path Thumb</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($gambar as $g)
                                <tr role="row" class="odd">
                                  <td>{{++$i}}</td>
                                  <td><img src="{{ asset($g->path_thumb) }}" alt=""></td>
                                  <td>{{$g->path_full}}</td>
                                  <td>{{$g->path_thumb}}</td>
                                  <td></td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->                    
                  </div>
                  <!-- /.tab-content -->
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
