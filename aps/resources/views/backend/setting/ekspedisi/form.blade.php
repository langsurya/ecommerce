<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">
    <!-- var $title di ambil dari EkspedisiController -->
    {{ $title }}
    </h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
    <!-- /.box-tools pull-right -->
  </div>
  <!-- /.box-header with-border -->

  <!-- /.box-header -->
  <div class="box-body" style="display: block;">
    <div class="row">
      <div class="col-md-12">
        {{-- row 1 col 3 --}}
        <div class="form-group">
          <label>Nama</label>
          {!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
        {{-- /.form-group --}}
        <div class="form-group">
          <label>Keterangan</label>
          {!! Form::text('keterangan', null, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
        </div>
        <!-- /.form-group -->

      </div>
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  <div class="box-footer">
    <a href="{{ url('/admin/ekspedisi') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
  </div>
  <!-- box-footer -->

</div>
<!-- box box-default -->
