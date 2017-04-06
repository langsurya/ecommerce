@php
  if ($fungsi=='edit'){
    // $pel_id = $pelanggans->id;
    $title = 'Edit Pesanan';
  }elseif($fungsi=='create'){
    // $pel_id = $pelanggans->id+1;
    $title = 'Tambah Pesanan';
  }
@endphp
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">
      @php echo $title
      @endphp
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
              <label>Pelanggan</label>
              {{ Form::select('pelanggan', [
                 '' => '-Pilih Pelanggan-',
                 'Pelanggan 1' => 'Pelanggan 1',
                 'Pelanggan 1' => 'Pelanggan 1'
                ], null, ['class' => 'form-control']
              ) }}
            </div>
            {{-- /.form-group --}}
            <div class="form-group">
              <label>Jenis Pelanggan</label>
              <input class="form-control" type="text" name="name" value="" disabled>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Dikirim Kepada</label>
              {{ Form::select('pelanggan', [
                 '' => '-Pilih Pelanggan-',
                 'Pelanggan 1' => 'Pelanggan 1',
                 'Pelanggan 1' => 'Pelanggan 1'
                ], null, ['class' => 'form-control']
              ) }}
            </div>
            <div class="form-group">
              <button class="btn" type="button" name="button"><span class="fa fa-plus"></span> Tambah Pelanggan</button>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="name" rows="5" cols="32" disabled></textarea>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Tanggal</label>
              <input class="form-control" type="text" value="2017-4-3" disabled>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- ./box-body -->
        </div>
        <!-- ./box -->

        <div class="box">
          <div class="box-body">
            <div class="form-group">
              <label>Catatan</label>
              <textarea name="name" class="form-control"></textarea>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- ./box -->
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
                {{ Form::select('pelanggan', [
                  '' => '',
                  'Pelanggan 1' => 'Pelanggan 1',
                  'Pelanggan 1' => 'Pelanggan 1'
                ], null, ['class' => 'form-control']
                ) }}
              </div>
              <button class="btn btn-primary" type="button" name="button"><span class="fa fa-plus"></span> Tambah Barang</button>
            </div>
            <div class="row">
              <div class="col-md-1">
                #
              </div>
              <div class="col-md-4">
                Nama Produk
              </div>
              <div class="col-md-2">
                Harga
              </div>
              <div class="col-md-2">
                Jumlah
              </div>
              <div class="col-md-3">
                Total
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-9">
                Sub Total
              </div>
              <div class="col-md-3">
                Rp 0
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Discount Type</label>
                  {{ Form::select('discount', [
                    '' => 'Rp',
                    'Pelanggan 1' => 'Pelanggan 1',
                    'Pelanggan 1' => 'Pelanggan 1'
                  ], null, ['class' => 'form-control']
                  ) }}
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
                  {{ Form::select('ekspedisi', [
                    '' => '-Pilih Ekspedisi-',
                    'Pelanggan 1' => 'Pelanggan 1',
                    'Pelanggan 1' => 'Pelanggan 1'
                  ], null, ['class' => 'form-control']
                  ) }}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
              <div class="col-md-3">
                <div class="form-group">
                  <label>Paket</label>
                  {{ Form::select('ekspedisi', [
                    '' => '-Pilih Paket-',
                    'Pelanggan 1' => 'Pelanggan 1',
                    'Pelanggan 1' => 'Pelanggan 1'
                  ], null, ['class' => 'form-control']
                  ) }}
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
                  {{ Form::text('biaya', null, array('class' => 'form-control')) }}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
            <hr>
            <div class="form-group">
              <h4>Total Bayar</h4>
              <h3>Rp 0</h3>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-warning box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Pembayaran</h3>
            <div class="box-tools pull-right">
              {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button> --}}
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-3">
                <label>Status Bayar</label>
                {{ Form::select('status_bayar', [
                  'belum_bayar' => 'Belum Bayar',
                  'sudah_bayar' => 'Sudah Bayar'
                ], null, ['class' => 'form-control']
                ) }}
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
