@extends('layouts.master')
@section('title','Pesanan')
@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pesanan</h3>
              <h3 class="box-title pull-right">
                <a href="{{ url('/admin/pesanan/create') }}" class="btn btn-block btn-primary">
                  <span class="fa fa-plus"></span> Tambah Pesanan
                </a>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class=""><a href="#semua" data-toggle="tab" aria-expanded="false">Semua <span class="badge">50</span></a></li>
                  <li class=""><a href="#blmbayar" data-toggle="tab" aria-expanded="false">Belum Bayarn <span class="badge">15</span></a></li>
                  <li class="active"><a href="#diperiksa" data-toggle="tab" aria-expanded="true">Diperiksa Finance <span class="badge">3</span></a></li>
                  <li><a href="#dikemas" data-toggle="tab" aria-expanded="true">Belum Dikemas <span class="badge">7</span></a></li>
                  <li><a href="#dikirim" data-toggle="tab" aria-expanded="true">Belum Dikirim <span class="badge">7</span></a></li>
                  <li><a href="#selesai" data-toggle="tab" aria-expanded="true">Selesai <span class="badge">4</span></a></li>
                  <li><a href="#batal" data-toggle="tab" aria-expanded="true">Batal <span class="badge">2</span></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="semua">
                    <!-- table -->
                    semua
                    <!-- /.table -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="blmbayar">
                    <!-- The timeline -->
                    blm bayar
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane active" id="diperiksa">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="dikemas">
                    <!-- The timeline -->
                    blm dikemas
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="dikirim">
                    <!-- The timeline -->
                    Belum Dikirim
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="selesai">
                    <!-- The timeline -->
                    Selesai
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="batal">
                    <!-- The timeline -->
                    Batal
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')

  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.6 -->
  {{-- <script src="../../bootstrap/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- DataTables -->
  {{-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  {{-- <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  <!-- SlimScroll -->
  {{-- <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  {{-- <script src="../../plugins/fastclick/fastclick.js"></script> --}}
  <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  {{-- <script src="../../dist/js/app.min.js"></script> --}}
  <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="../../dist/js/demo.js"></script> --}}
  <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  </body>
  </html>

@endsection
