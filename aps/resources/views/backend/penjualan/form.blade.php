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
              <label>Pelanggan</label> <input type="text" name="id" id="id_tampil" size="2"> 
              <select class="form-control" id="get_id" onchange="tampilkan_id()">
                <option value="">Pilih Pelanggan</option>
              @foreach ($pelanggans as $pelanggan)
                @if (($pelanggan->admin==1)||($pelanggan->admin==2))
                  {{-- jika data dengan role admin 1/2 maka data tidak akan di tampilkan --}}
                  @else
                  <option value="{{ $pelanggan->id }}">{{ $pelanggan->name }}</option>
                @endif
              @endforeach
              </select>
            </div>
            {{-- /.form-group --}}
            <div class="form-group">
              <label>No Hp/Phone</label>
              <input class="form-control" type="text" name="phone" value="">
            </div>
            <!-- /.form-group -->
            <!-- /.form-group -->
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" id="email" type="text" name="email" value="" value="{{ old('email') }}">
            </div>
            <div class="form-group">
              <label>Tipe Pembayaran</label>
              <select class="form-control" name="payment_type" id="">
                <option value=""></option>
                @foreach ($payments as $payment)
                  <option value="{{ $payment->nama_bank }}">{{ $payment->nama_bank }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Kota</label>
              <input class="form-control" type="text" name="city" value="">
            </div>
            <div class="form-group">
              <label>Kode Pos</label>
              <input class="form-control" type="text" name="postcode" value="">
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat"></textarea>
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
            <textarea name="notes" class="form-control"></textarea>
          </div>
        </div>
        
      </div>
      <!-- /.col-md-3 -->
      <div class="col-md-9">
        <!-- box -->
        <div class="box box-warning box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Produk</h3>

            <div class="box-tools pull-right">
              {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button> --}}
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: block;">

            <div class="row">
              <div class="form-group  col-md-9">
                <select name="product" id="product" class="form-control" onchange="tampilkan_nama()">
                  <option style="text-align: center;" value="">Pilih Product</option>
                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }} (Rp {{ number_format($product->product_price, 2, '.',',') }}) </option>
                  @endforeach
                </select>
              </div>
              <input type="hidden" id="hasil" size="4" style="text-align: center;">
              <a class="btn btn-primary" id="link"><span class="fa fa-plus"></span> Tambah Barang </a>
            </div>
            <div class="row">
              <div class="col-md-1"> # </div>
              <div class="col-md-4"> Nama Produk {{-- <div id="hasil"></div> --}}</div>
              <div class="col-md-2"> Harga</div>
              <div class="col-md-2"> Jumlah</div>
              <div class="col-md-2"> Total</div>
              <div class="col-md-1">
              </div>
            </div>
            <hr>
            @foreach ($cartItems as $cartItem)
              <div class="row">
                <div class="col-md-1"> {{ ++$i }}</div>
                <div class="col-md-4">{{ $cartItem->name }}</div>
                <div class="col-md-2"> Rp {{ number_format($cartItem->price, 2, ',', '.') }}</div>
                <div class="col-md-2">  {{ $cartItem->qty }}</div>
                <div class="col-md-2">  Rp {{ number_format($cartItem->subtotal, 2, ',', '.') }}</div>
                <div class="col-md-1"><a href="{{ url('/cart/remove') }}/{{ $cartItem->rowId }}"><i class="fa fa-trash"></i></a></div>
              </div>
            @endforeach <hr> 
            <div class="row">
              <div class="col-md-9">  Sub Total</div>
              <div class="col-md-3">  Rp {{ Cart::subtotal() }}</div>
            </div><hr>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Discount Type</label>
                  <select name="discount" id="" class="form-control">
                    <option value="rp">Rp</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
              <div class="col-md-3">
                <div class="form-group">
                  <label>Discount Nominal</label>
                  {{ Form::text('discount_normal', null, array('class' => 'form-control')) }}
                </div>
                <!-- /.form-group -->

              </div>
              <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Ekspedisi</label>
                  <select class="form-control" name="ekspedisi" id="">
                  <option value="">Pilih Ekspedisi</option>
                  @foreach ($ekspedisi as $ekspe)
                    <option value="{{ $ekspe->name }}">{{ $ekspe->name }}</option>
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
                    <option value="">Pilih Paket</option>
                    <option value="SS">SS</option>
                    <option value="YES">YES</option>
                    <option value="REG">REG</option>
                    <option value="OKE">OKE</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
              <div class="col-md-3">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Berat Kg</label>
                  {{ Form::text('berat', null, array('class' => 'form-control')) }}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
              <div class="col-md-3">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Biaya Kirim</label>
                  <input class="form-control" id="theText" type="text" name="ongkir" size="10" value="0" />
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
            <hr>
            <div class="form-group">
              <h4>Total Bayar</h4>
              <h3>Rp <span id="theOutputText">{{ str_replace(',00', '', str_replace('.', '', Cart::subtotal())) }}</span></h3>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-warning box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Pembayaran</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
              <select name="pembayaran" class="form-control" id="">
                <option value="belumbayar"> Belum Bayar</option>
                <option value="sudahbayar"> Sudah Bayar</option>
              </select>
              </button>
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
