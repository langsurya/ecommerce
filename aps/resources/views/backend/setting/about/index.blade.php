@extends('backend.layouts.master')
@section('title','Kategori Pelanggan')
@section('css')
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection
@section('js')
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      About Us
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">About Us</li>
    </ol>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="row">
      
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">About Us
              <small></small>
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            {!! Form::open(array('route' => ['about.update', $abouts->id],'method'=>'PATCH')) !!}
              {{ csrf_field() }}
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="editor1" name="isi" rows="10" cols="80" style="visibility: hidden; display: none;"> {{ $abouts->isi }}
                  </textarea>
                </div>
              </div>
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="">Email Web</label>
                  <input type="email" name="email" class="form-control" value="{{ $abouts->email }}">
                </div>
                <div class="form-group">
                  <label for="">Facebook ID</label>
                  <input type="text" name="facebook" class="form-control" value="{{ $abouts->facebook }}">
                </div>
                <div class="form-group">
                  <label for="">Twitter ID</label>
                  <input type="text" name="twitter" class="form-control" value="{{ $abouts->twitter }}">
                </div>           
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">No.Telp Web</label>
                  <input type="text" name="phone" class="form-control" placeholder="xxx-xxx-xxx" value="{{ $abouts->phone }}">
                </div>
                <div class="form-group">
                  <label for="">Youtube</label>
                  <input type="text" name="youtube" class="form-control" value="{{ $abouts->youtube }}">
                </div>
                <div class="form-group">
                  <label for="">Google+</label>
                  <input type="text" name="gplus" class="form-control" value="{{ $abouts->gplus }}">
                </div>         
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Alamat </label>
                  <input type="text" name="alamat" class="form-control" value="{{ $abouts->alamat }}">
                </div>                
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <a class="btn btn-danger" href=""><i class="fa fa-backward"></i> Back</a>
                  <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-save"></i> Submit</button>
                </div>                
              </div>
            </form>
          </div>
        </div>
        <!-- /.box -->
      <!-- /.col-->
      
    </div>

  </section>
  <!-- /.content -->


@endsection
