@php
  if ($fungsi=='edit'){
    $pel_id = $pelanggans->id;
    $title = 'Edit Pelanggan';
  }elseif($fungsi=='create'){
    $pel_id = $pelanggans->id+1;
    $title = 'Tambah Pelanggan';
  }
@endphp
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
        <div class="form-group col-md-4">
          <label>ID </label>
            {!! Form::text('','BKR00'.($pel_id), array('disabled','class' => 'form-control')) !!}
            <input type="text" name="id_pel" value="BKR00{{$pel_id}}" hidden="">
        </div>
        <!-- /.form-group -->
        <div class="form-group col-md-4">
          <label>No HP</label>
          {!! Form::text('hp', null, array('placeholder' => 'No Hp','class' => 'form-control')) !!}
        </div>
        <!-- /.form-group -->
        <div class="form-group col-md-4">
          <label>Status</label>
          {{ Form::select('status', [
             'Aktif' => 'Aktif',
             'Tidak' => 'Tidak'], null, ['class' => 'form-control']
          ) }}
        </div>
        <!-- /.form-group -->
        {{-- row 2 col 2 --}}
        <div class="form-group col-md-4">
          <label>Kategori</label>
          {{ Form::select('kategori', [
             'Aktif' => 'Aktif',
             'Tidak' => 'Tidak'], null, ['class' => 'form-control']
          ) }}
        </div>
        <!-- /.form-group -->
        <div class="form-group col-md-8">
          <label>Nama</label>
          {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        {{-- /.row 3 --}}
        <div class="form-group col-md-4">
          <label>Email</label>
          {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
        <div class="form-group col-md-4">
          <label>Line</label>
          {!! Form::text('line', null, array('placeholder' => 'Line','class' => 'form-control')) !!}
        </div>
        <div class="form-group col-md-4">
          <label>Bbm</label>
          {!! Form::text('bbm', null, array('placeholder' => 'Bbm','class' => 'form-control')) !!}
        </div>
        <div class="form-group col-md-12">
          <label>Alamat</label>
          {!! Form::textarea('alamat', null, array('size' => '30x5','class' => 'form-control')) !!}
        </div>

      </div>
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  <div class="box-footer">
    <a href="{{ url('/backend/pelanggan') }}" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Kembali</a>
    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-save"></span> Simpan</button>
  </div>

</div>
