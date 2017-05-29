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
      <div class="col-md-12">
        {{-- row 1 col 3 --}}
        <div class="form-group">
          <label>Nama</label>
          {!! Form::text('nama_barang', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
        {{-- /.form-group --}}
        <div class="form-group">
          <label>Parent</label>
          {{ Form::select('parent', [
             '' => '-Pilih Parent-',
             'Utama' => 'Utama',
             'Fashion' => 'Fashion'
            ], null, ['class' => 'form-control']
          ) }}
        </div>
        {{-- /.form-group --}}
        <div class="form-group">
          <label>Keterangan</label>
          {{-- <textarea id="editor1" name="editor1" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
          </textarea> --}}
          {!! Form::textarea('keterangan', null, array('id' => 'editor1')) !!}
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Status</label>
          {{ Form::select('status', [
             '' => '-Pilih Status-',
             '1' => 'Aktif',
             '0' => 'Tidak Aktif'
            ], null, ['class' => 'form-control']
          ) }}
        </div>
        {{-- /.form-group --}}

      </div>
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  <div class="box-footer">
    <a href="{{ url('/admin/category') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
  </div>

</div>
