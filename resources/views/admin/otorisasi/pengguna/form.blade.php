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
          <label>Username</label>
          {!! Form::text('name', null, array('placeholder' => 'username','class' => 'form-control')) !!}
        </div>
        {{-- /.form-group --}}
        <div class="form-group">
          <label>Email</label>
          {!! Form::email('email', null, ['placeholder' => 'Email','class' => 'form-control']) !!}
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Status</label>
          {{ Form::checkbox('status', 0, null, ['data-toggle' => 'toggle', 'data-on'=>'Active', 'data-off'=>'Banned']) }}
          {{-- <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled"> --}}
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  <div class="box-footer">
    <a href="{{ url('/admin/pengguna') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
  </div>

</div>
