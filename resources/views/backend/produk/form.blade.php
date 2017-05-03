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
                <div class="col-md-9">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Nama</label>
                      <input class="form-control" type="text" name="name" value="" >
                    </div>
                    <div class="form-group  col-md-6" id="reportType">
                      <label>Jenis</label>
                      {{ Form::select('category',$category, null, ['class' => 'form-control']
                      ) }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="sku">SKU</label>
                      <input type="text" class="form-control" placeholder="SKU" name="sku" value="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="stok">Stok</label>
                      <input type="text" class="form-control" placeholder="stok" name="stok" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="harga">Harga Produk</label>
                      <input type="text" name="harga" class="form-control" placeholder="Harga Produk" value="">
                    </div> <!-- form-group -->
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
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
                      <input class="form-control" type="text" name="name" value="0" >
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.row -->
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Keterangan Lengkap</label>
                      {!! Form::textarea('editor1', null, array('id' => 'editor1')) !!}
                    </div>
                  </div>
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
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="varian">
              <!-- Table -->
              <div class="row">
                <div class="col-md-12">
                  <div class="input_fields_wrap">
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
            </div>
            <!-- /.tab-pane -->
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
