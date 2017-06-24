@extends('backend.layouts.master')
@section('title','Pesanan')
@section('js')
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
@endsection
@section('content')

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
                <li class="active"><a href="#semua" data-toggle="tab" aria-expanded="false">Semua <span class="badge">{{ count($orders) }}</span></a></li>
                <li class=""><a href="#blmbayar" data-toggle="tab" aria-expanded="false">Belum Bayar <span class="badge">{{ count($orders) }}</span></a></li>
                <li><a href="#diperiksa" data-toggle="tab" aria-expanded="true">Diperiksa Finance <span class="badge">3</span></a></li>
                <li><a href="#dikemas" data-toggle="tab" aria-expanded="true">Belum Dikemas <span class="badge">7</span></a></li>
                <li><a href="#dikirim" data-toggle="tab" aria-expanded="true">Belum Dikirim <span class="badge">7</span></a></li>
                <li><a href="#selesai" data-toggle="tab" aria-expanded="true">Selesai <span class="badge">4</span></a></li>
                <li><a href="#batal" data-toggle="tab" aria-expanded="true">Batal <span class="badge">2</span></a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="semua">
                  <!-- table -->
                  <div class="row">
                    <div class="col-xs-12">
                      @foreach ($orders as $order)
                      <div class="box">
                        <div class="box-header pull-right">
                          <h3 class="box-title">
                          <a href="#" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> </a>
                        </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table">
                                  <thead>
                                    <th>PO # {{ $order->po }}</th>
                                    <th>Barang</th>
                                    <th>Status Transaksi</th>                                  
                                  </thead>
                                  <tbody>
                                    <td>
                                    <h5>Pemesan</h5>
                                    {{ $order->name }}
                                    <h5>Dikirim Kepada</h5>
                                    {{ $order->fullname }}
                                    <h5>Tanggal Pesanan</h5>
                                    {{ $order->created_at }}
                                    </td>
                                    <td>
                                      <a href="">{{ $order->product_name }}</a><br>
                                      <div class="alert alert-warning col-sm-8">
                                        <h5> Harga : Rp {{ number_format($order->harga, '2', ',','.') }}</h5>

                                        <h5> Tagihan</h5>
                                        <h4> Rp {{ $order->total }}</h4>
                                        <b> Belum Bayar</b>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-6">
                                        @if ($order->status == 'belum dibayar')
                                        <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                        @elseif($order->status == 'pending')
                                        <button class="btn btn-block btn-primary">Pending</button>
                                        @endif
                                      </div>
                                    </td>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <!-- /.table -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="blmbayar">
                  <!-- The timeline -->
                  <div class="row">
                    <div class="col-xs-12">
                      @foreach ($orders as $order)
                      <div class="box">
                        <div class="box-header pull-right">
                          <h3 class="box-title">
                          <a href="#" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> </a>
                        </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table">
                                  <thead>
                                    <th>PO # {{ $order->po }}</th>
                                    <th>Barang</th>
                                    <th>Status Transaksi</th>                                  
                                  </thead>
                                  <tbody>
                                    <td>
                                    <h5>Pemesan</h5>
                                    {{ $order->name }}
                                    <h5>Dikirim Kepada</h5>
                                    {{ $order->fullname }}
                                    <h5>Tanggal Pesanan</h5>
                                    {{ $order->created_at }}
                                    </td>
                                    <td>
                                      <a href="">{{ $order->product_name }}</a><br>
                                      <div class="alert alert-warning col-sm-8">
                                        <h5> Tagihan</h5>
                                        <h4> Rp. {{ $order->total }}</h4>
                                        <b> Belum Bayar</b>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-6">
                                        @if ($order->status == 'belum dibayar')
                                        <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                        @elseif($order->status == 'pending')
                                        <button class="btn btn-block btn-primary">Pending</button>
                                        @endif
                                      </div>
                                    </td>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="diperiksa">
                  <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header pull-right">
                            <h3 class="box-title">
                            <a href="{{ url('/admin/pelanggan/create') }}" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> </a>
                          </h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                              <div class="row">
                                {{-- <div class="col-sm-6"></div> --}}
                              </div>
                              <div class="row">
                                <div class="col-sm-4">PO
                                  
                                </div>
                                <div class="col-sm-4">Barang
                                  
                                </div>
                                <div class="col-sm-4">Status Transaksi
                                  
                                </div>
                              </div>

                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                      </div>
                    </div>
                  </section>
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

@endsection
