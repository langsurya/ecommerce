@extends('backend.layouts.master')
@section('title', $title)
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

    function keyReport(event, output) {
        // catch enter key = submit (Safari on iPhone=10)
        if (event.which == 10 || event.which == 13) {
            event.preventDefault();
        }
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
  {{-- <form method="post" action="{{ url('/admin/pesanan/') }}/{{ $po }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
  {!! Form::open(array('route' => ['pesananDikirim.update', $po],'method'=>'PATCH')) !!}
    {{-- {!! Form::model(['method'=>'PATCH' ,'route' => ['pesanan.update', $po]]) !!} --}}
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">
        {{ $title }}
        </h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>

    <!-- /.box-header -->
      <div class="box-body" style="display: block;">
        <div class="row">
          <div class="col-md-3">
            <!-- box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"><span class="fa fa-group"></span> Pelanggan</h3>
              </div>
              <!-- box-body -->
              <div class="box-body">
                {{-- row 1 col 3 --}}
                <div class="form-group">
                  <select class="form-control" id="get_id" onchange="tampilkan_id()" disabled="">
                    <option value="">{{ $address->fullname }}</option>
                  </select>
                </div>
                {{-- /.form-group --}}
                <div class="form-group">
                  <label>No Hp/Phone</label>
                  <input class="form-control" type="text" value="{{ $address->phone }}" disabled>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" value="{{ $address->email }}" disabled>
                </div>
                
                <div class="form-group">
                  <label>Kota</label>
                  <input class="form-control" type="text" value="{{ $address->kota }}" disabled>
                </div>
                <div class="form-group">
                  <label>Kode Pos</label>
                  <input class="form-control" type="text" value="{{ $address->postcode }}" disabled>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" disabled>{{ $address->alamat }}</textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal</label>
                  <input class="form-control" type="text" value="<?= date('Y/m/d'); ?>" disabled>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- ./box-body -->
            </div>
            <!-- ./box -->

            <div class="box box-primary">
              <div class="box-body">
              <label for="">Catatan</label>
                <textarea name="notes" class="form-control">{{ $address->notes }}</textarea>
              </div>
            </div>
            
          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-9">
            <!-- box -->
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Produk</h3>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="display: block;">

                <div class="row"><b>
                  <div class="col-md-1"> # </div>
                  <div class="col-md-4"> Nama Produk </div>
                  <div class="col-md-2"> Harga </div>
                  <div class="col-md-2"> Jumlah </div>
                  <div class="col-md-2"> Total </div>
                  <div class="col-md-1"></div></b>
                </div>
                <hr>
                @foreach ($orders as $order)
                  <div class="row">
                    <div class="col-md-1"> {{ ++$i }} </div>
                    <div class="col-md-4"> {{ $order->name }} </div>
                    <div class="col-md-2"> Rp {{ number_format($order->product_price, '2', ',', '.') }} </div>
                    <div class="col-md-2"> {{ $order->qty }} </div>
                    <div class="col-md-2"> Rp {{ number_format($order->total, '2', ',', '.') }} </div>
                    <div class="col-md-1"></div>
                  </div>
                @endforeach 
                <hr> 
                <div class="row">
                  <div class="col-md-9"> Sub Total </div>
                  <div class="col-md-3"> Rp {{ $subtotal }} </div>
                </div><hr>
                <div class="row">
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Ekspedisi</label>
                      <select class="form-control" name="ekspedisi" id="">
                      @foreach ($ekspedisi as $ekspe)
                        <option value="{{ $ekspe->name }}" {{ ($ekspe->name==$address->eksped) ? 'selected' : '' }}>{{ $ekspe->name }}</option>
                      @endforeach
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col-md-3 -->
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Paket</label>
                      <select class="form-control" name="paket" id="">
                        <option value="SS" {{ ($address->eksped=='SS') ? 'selected' : '' }}>SS</option>
                        <option value="YES" {{ ($address->eksped=='YES') ? 'selected' : '' }}>YES</option>
                        <option value="REG" {{ ($address->eksped=='REG') ? 'selected' : '' }}>REG</option>
                        <option value="OKE" {{ ($address->eksped=='OKE') ? 'selected' : '' }}>OKE</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col-md-3 -->
                  <div class="col-md-2">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Berat Kg</label>
                      <input class="form-control" type="text" name="berat" value="{{ ($address->berat=='') ? 0 : $address->berat }}">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col-md-3 -->
                  <div class="col-md-3">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Biaya Kirim</label>
                      <input id="theText" class="form-control" type="text" name="ongkir" size="10" value="{{ ($address->ongkir=='') ? 0 : $address->ongkir }}" />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
                <hr>
                <div class="form-group">
                  <h4>Total Bayar</h4>
                  <h3>Rp {{ number_format(str_replace(',00', '', str_replace('.', '', $subtotal))+$address->ongkir, 0,',','.') }}</h3>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Pembayaran</h3>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status Bayar</label>
                      <select class="form-control" name="pembayaran" id="">
                        <option value="belumbayar" {{ ($pembayaran == 'belumbayar') ? 'selected' : ''}}>Belum Bayar</option>
                        <option value="sudahbayar" {{ ($pembayaran == 'sudahbayar') ? 'selected' : ''}}>Sudah Dibayar</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div> 

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tanggal Pembayaran</label>
                      <input class="form-control" type="text" value="{{ $updated_at }}">
                    </div>
                    <!-- /.form-group -->
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Tipe Pembayaran</label>
                      <select class="form-control" name="payment_type">
                        @foreach ($payments as $pay)
                          <option value="{{ $pay->nama_bank }}" {{ ($pay->nama_bank==$address->payment) ? 'selected' : '' }}>{{ $pay->nama_bank . ' ('.$pay->no_rekening.')'}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>              
                </div>
              </div>              
            </div>
            <!-- /.box -->

            <!-- /.box -->
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Packing</h3>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status Packing</label>
                      <select class="form-control" name="packing" id="">
                        <option value="belum" {{ ($packing == 'belum') ? 'selected' : '' }}>Belum Dikemas</option>
                        <option value="dikemas" {{ ($packing == 'dikemas') ? 'selected' : ''}}>Sudah dikemas</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div> 
             
                </div>
              </div>              
            </div>
            <!-- /.box -->

            <!-- /.box -->
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Tracking</h3>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status Pengiriman</label>
                      <select class="form-control" name="pengiriman" id="">
                        <option value="belum" {{ ($pengiriman == 'belum' OR $pengiriman == null) ? 'selected' : ''}}>Belum Dikirim</option>
                        <option value="dikirim" {{ ($pengiriman == 'dikirim') ? 'selected' : ''}}>Sudah Dikirim</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div> 

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Nomor Resi</label>
                      <input name="no_resi" class="form-control" type="text" value="{{ $no_resi }}">
                    </div>
                    <!-- /.form-group -->
                  </div>
             
                </div>
              </div>              
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
      </div>

      <div class="box-footer">
        <a href="{{ url('/admin/pesanan') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
        <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
      </div>
    </div>
    </form>
    {{-- {!! Form::close() !!} --}}
  </section>
  <!-- /.content -->

  <!-- Page script -->

@endsection
