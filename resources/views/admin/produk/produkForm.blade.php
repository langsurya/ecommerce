@php
  if ($fungsi=='edit'){
    // $pel_id = $pelanggans->id;
    $title = 'Edit Ekspedisi';
  }elseif($fungsi=='create'){
    // $pel_id = $pelanggans->id+1;
    $title = 'Tambah Produk';
  }
@endphp
<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Pesanan</h3>
        <h3 class="box-title pull-right">
          <a href="http://localhost:8000/admin/pesanan/create" class="btn btn-block btn-primary">
            <span class="fa fa-plus"></span> Tambah Pesanan
          </a>
        </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#barang" data-toggle="tab" aria-expanded="false">Barang </a></li>
            <li class=""><a href="#varian" data-toggle="tab" aria-expanded="false">Varian </a></li>
            <li><a href="#grosir" data-toggle="tab" aria-expanded="true">Grosir </a></li>
            <li><a href="#gambar" data-toggle="tab" aria-expanded="true">Gambar </a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane  active" id="barang">
              <!-- table -->
              <div class="row">
                <div class="col-md-9">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Nama</label>
                      <input class="form-control" type="text" name="name" value="" >
                    </div>
                    <div class="form-group  col-md-6">
                      <label>Jenis</label>
                      {{ Form::select('pelanggan', [
                        '' => '-Pilih Jenis-',
                        'Pelanggan 1' => 'Pelanggan 1',
                        'Pelanggan 1' => 'Pelanggan 1'
                      ], null, ['class' => 'form-control']
                      ) }}
                    </div>
                    <div class="form-group col-md-12">
                      <label>Keterangan Lengkap</label>
                      {!! Form::textarea('editor1', null, array('id' => 'editor1')) !!}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Berat (Gram)</label>
                      <input class="form-control" type="text" name="name" value="" >
                    </div>
                    <div class="form-group  col-md-6">
                      <label>Status</label>
                      {{ Form::select('status', [
                        '1' => 'Aktif',
                        '0' => 'Tidak Aktif'
                      ], null, ['class' => 'form-control']
                      ) }}
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.row -->
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Discount Type</label>
                      {{ Form::select('status', [
                        'Rp' => 'Rp',
                        'R' => 'R'
                      ], null, ['class' => 'form-control']
                      ) }}

                    </div>
                    <div class="form-group  col-md-3">
                      <label>Discount Nominal</label>
                      <input class="form-control" type="text" name="name" value="0" >
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-md-9 -->
                <div class="col-md-3">
                  {{-- <img class="form-control" src="" alt="" /> --}}
                  <label>
                  <img class="img-responsive pad" src="{{ asset('assets/dist/img/avatar2.png') }}" alt="Photo">
                    Gambar Utama</label>
                  {{ Form::file('thefile') }}
                </div>
                <!-- /.col-md-3 -->
              </div>
              <!-- /.row -->
              <div class="box-footer">
                <a href="{{ url('/admin/pesanan') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
                <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="varian">
              <!-- The timeline -->
              varian
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="grosir">
              grosir
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="gambar">
              <!-- The timeline -->
              blm dikemas
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
