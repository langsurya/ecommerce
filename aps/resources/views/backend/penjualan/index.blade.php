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
                <li class=""><a href="#blmbayar" data-toggle="tab" aria-expanded="false">Belum Bayar <span class="badge">{{ count($blmbayar) }}</span></a></li>
                <li><a href="#finance" data-toggle="tab" aria-expanded="true">Diperiksa Finance <span class="badge">{{ count($finances) }}</span></a></li>
                <li><a href="#dikemas" data-toggle="tab" aria-expanded="true">Belum Dikemas <span class="badge">{{ count($packings) }}</span></a></li>
                <li><a href="#dikirim" data-toggle="tab" aria-expanded="true">Belum Dikirim <span class="badge">{{ count($dikirims) }}</span></a></li>
                <li><a href="#selesai" data-toggle="tab" aria-expanded="true">Selesai <span class="badge">?</span></a></li>
                <li><a href="#batal" data-toggle="tab" aria-expanded="true">Batal <span class="badge">?</span></a></li>
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
                            <a href="{{ url('/admin/pesanan/') }}/{{$order->po}}/edit" class=""><i class="fa fa-edit"></i> </a>
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
                                      <td class="col-sm-4">
                                        <h5>Pemesan</h5>
                                        {{ $order->name }}
                                        <h5>Dikirim Kepada</h5>
                                        {{ $order->fullname }}
                                        <h5>Tanggal Pesanan</h5>
                                        {{ $order->created_at }}
                                      </td>
                                      <td class="col-sm-4">
                                        @foreach ($barangs as $barang)
                                          <a href="">{{ ($order->po==$barang->id) ? $barang->product_name : '' }}</a>{{ ($order->po==$barang->id) ? ' ('.$barang->qty.')' .', ' : '' }}
                                        @endforeach<br>
                                        @if ($order->pembayaran=='sudahbayar')
                                          <div class="alert alert-success col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            {{ $order->updated_at  }}
                                            <div class="pull-right">{{ $order->payment_type }}</div>
                                          </div>
                                          @else
                                          <div class="alert alert-warning col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            <b>Belum Bayar </b>
                                          </div> 
                                        @endif
                                      </td>
                                      <td class="col-sm-4">
                                        @if ($order->pembayaran != 'sudahbayar')
                                          <div  class="col-sm-6">
                                            <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"></div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"> - </div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin">Nomor Resi <br>-</div>
                                            </div>                                            
                                          </div>
                                        @elseif($order->pembayaran == 'sudahbayar')
                                          <div class="row">
                                            <div class="col-sm-4">
                                              <button class="btn btn-block btn-success margin">Dibayar</button>
                                            </div>
                                          </div>
                                          @if ($order->packing == 'dikemas')
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-success margin">Sudah Dikemas</button>
                                              </div>                                            
                                            </div>
                                            @if ($order->pengiriman == null)
                                              <div class="row">
                                                <div class="col-sm-6">
                                                <button class="btn btn-block btn-primary margin">Belum Dikirim</button>
                                                </div>                                            
                                              </div>
                                            @elseif($order->pengiriman == 'dikirim')
                                              <div class="row">
                                                <div class="col-sm-6">
                                                <button class="btn btn-block btn-success margin">Sudah Dikirim</button>
                                                </div>                                            
                                              </div>
                                            @endif
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @else
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-primary margin">Belum Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @endif
                                        @endif
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
                      @foreach ($blmbayar as $order)
                        {{-- @if ($order->pembayaran != "sudahbayar" ) --}}
                          <div class="box">
                            <div class="box-header pull-right">
                              <h3 class="box-title">
                                <a href="{{ url('/admin/pesanan/') }}/{{$order->po}}/edit" class=""><i class="fa fa-edit"></i> </a>
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
                                        <td class="col-sm-4">
                                          <h5>Pemesan</h5>
                                          {{ $order->name }}
                                          <h5>Dikirim Kepada</h5>
                                          {{ $order->fullname }}
                                          <h5>Tanggal Pesanan</h5>
                                          {{ $order->created_at }}
                                        </td>
                                        <td class="col-sm-4">
                                          @foreach ($barangs as $barang)
                                            <a href="">{{ ($order->po==$barang->id) ? $barang->product_name : '' }}</a>{{ ($order->po==$barang->id) ? ' ('.$barang->qty.')' .', ' : '' }}
                                          @endforeach<br>
                                          @if ($order->pembayaran=='sudahbayar')
                                            <div class="alert alert-success col-sm-10">
                                              <h5> Tagihan</h5>
                                              <h4> Rp {{ $order->total }}</h4>
                                              {{ $order->updated_at  }}
                                              <div class="pull-right">{{ $order->payment_type }}</div>
                                            </div>
                                            @else
                                            <div class="alert alert-warning col-sm-10">
                                              <h5> Tagihan</h5>
                                              <h4> Rp {{ $order->total }}</h4>
                                              <b>Belum Bayar </b>
                                            </div> 
                                          @endif
                                        </td>
                                        <td class="col-sm-4">
                                          @if ($order->pembayaran != 'sudahbayar')
                                            <div  class="col-sm-6">
                                              <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin"></div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin"> - </div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi <br>-</div>
                                              </div>                                            
                                            </div>
                                          @elseif($order->pembayaran == 'sudahbayar')
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <button class="btn btn-block btn-success margin">Dibayar</button>
                                              </div>
                                            </div>
                                            @if ($order->packing == 'dikemas')
                                              <div class="row">
                                                <div class="col-sm-6">
                                                <button class="btn btn-block btn-success margin">Sudah Dikemas</button>
                                                </div>                                            
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                                </div>                                            
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="margin">Nomor Resi<br>-</div>
                                                </div>                                            
                                              </div>
                                            @else
                                              <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-primary margin">Belum Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                            @endif
                                          @endif
                                        </td>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          {{-- @else --}}
                          {{-- jika sudah di bayar maka tidak akan di tampilkan --}}
                        {{-- @endif --}}
                      @endforeach
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="finance">
                  <!-- table -->
                  <div class="row">
                    <div class="col-xs-12">
                      @foreach ($finances as $order)
                        <div class="box">
                          <div class="box-header pull-right">
                            <h3 class="box-title">
                            <a href="{{ url('/admin/pesananFinance/') }}/{{$order->po}}/edit" class=""><i class="fa fa-edit"></i> </a>
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
                                      <td class="col-sm-4">
                                        <h5>Pemesan</h5>
                                        {{ $order->name }}
                                        <h5>Dikirim Kepada</h5>
                                        {{ $order->fullname }}
                                        <h5>Tanggal Pesanan</h5>
                                        {{ $order->created_at }}
                                      </td>
                                      <td class="col-sm-4">
                                        @foreach ($barangs as $barang)
                                          <a href="">{{ ($order->po==$barang->id) ? $barang->product_name : '' }}</a>{{ ($order->po==$barang->id) ? ' ('.$barang->qty.')' .', ' : '' }}
                                        @endforeach<br>
                                        @if ($order->pembayaran=='sudahbayar')
                                          <div class="alert alert-success col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            {{ $order->updated_at  }}
                                            <div class="pull-right">{{ $order->payment_type }}</div>
                                          </div>
                                          @else
                                          <div class="alert alert-warning col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            <b>Belum Bayar </b>
                                          </div> 
                                        @endif
                                      </td>
                                      <td class="col-sm-4">
                                        @if ($order->pembayaran != 'sudahbayar')
                                          <div  class="col-sm-6">
                                            <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"></div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"> - </div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin">Nomor Resi <br>-</div>
                                            </div>                                            
                                          </div>
                                        @elseif($order->pembayaran == 'sudahbayar')
                                          <div class="row">
                                            <div class="col-sm-4">
                                              <button class="btn btn-block btn-success margin">Dibayar</button>
                                            </div>
                                          </div>
                                          @if ($order->packing == 'dikemas')
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-success margin">Sudah Dikemas</button>
                                              </div>                                            
                                            </div>
                                            @if ($order->pengiriman == null)
                                              <div class="row">
                                                <div class="col-sm-6">
                                                <button class="btn btn-block btn-primary margin">Belum Dikirim</button>
                                                </div>                                            
                                              </div>
                                            @elseif($order->pengiriman == 'dikirim')
                                              <div class="row">
                                                <div class="col-sm-6">
                                                <button class="btn btn-block btn-success margin">Sudah Dikirim</button>
                                                </div>                                            
                                              </div>
                                            @endif
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @else
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-primary margin">Belum Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @endif
                                        @endif
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
                <div class="tab-pane" id="dikemas">
                  <!-- The timeline -->
                  <div class="row">
                    <div class="col-xs-12">
                      @foreach ($packings as $order)
                        <div class="box">
                          <div class="box-header pull-right">
                            <h3 class="box-title">
                              <a href="{{ url('/admin/pesananDikemas/') }}/{{$order->po}}/edit" class=""><i class="fa fa-edit"></i> </a>
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
                                      <td class="col-sm-4">
                                        <h5>Pemesan</h5>
                                        {{ $order->name }}
                                        <h5>Dikirim Kepada</h5>
                                        {{ $order->fullname }}
                                        <h5>Tanggal Pesanan</h5>
                                        {{ $order->created_at }}
                                      </td>
                                      <td class="col-sm-4">
                                        @foreach ($barangs as $barang)
                                          <a href="">{{ ($order->po==$barang->id) ? $barang->product_name : '' }}</a>{{ ($order->po==$barang->id) ? ' ('.$barang->qty.')' .', ' : '' }}
                                        @endforeach<br>
                                        @if ($order->pembayaran=='sudahbayar')
                                          <div class="alert alert-success col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            {{ $order->updated_at  }}
                                            <div class="pull-right">{{ $order->payment_type }}</div>
                                          </div>
                                          @else
                                          <div class="alert alert-warning col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            <b>Belum Bayar </b>
                                          </div> 
                                        @endif
                                      </td>
                                      <td class="col-sm-4">
                                        @if ($order->pembayaran != 'sudahbayar')
                                          <div  class="col-sm-6">
                                            <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"></div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"> - </div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin">Nomor Resi <br>-</div>
                                            </div>                                            
                                          </div>
                                        @elseif($order->pembayaran == 'sudahbayar')
                                          <div class="row">
                                            <div class="col-sm-4">
                                              <button class="btn btn-block btn-success margin">Dibayar</button>
                                            </div>
                                          </div>
                                          @if ($order->packing == '')
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-primary margin">Belum Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @else

                                          @endif
                                        @endif
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
                <div class="tab-pane" id="dikirim">
                  <!-- The timeline -->
                  
                  <!-- table -->
                  <div class="row">
                    <div class="col-xs-12">
                      @foreach ($dikirims as $order)
                        <div class="box">
                          <div class="box-header pull-right">
                            <h3 class="box-title">
                            <a href="{{ url('/admin/pesananDikirim/') }}/{{$order->po}}/edit" class=""><i class="fa fa-edit"></i> </a>
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
                                      <td class="col-sm-4">
                                      <h5>Pemesan</h5>
                                      {{ $order->name }}
                                      <h5>Dikirim Kepada</h5>
                                      {{ $order->fullname }}
                                      <h5>Tanggal Pesanan</h5>
                                      {{ $order->created_at }}
                                      </td>
                                      <td class="col-sm-4">
                                        @foreach ($barangs as $barang)
                                          <a href="">{{ ($order->po==$barang->id) ? $barang->product_name : '' }}</a>{{ ($order->po==$barang->id) ? ' ('.$barang->qty.')' .', ' : '' }}
                                        @endforeach<br>
                                        @if ($order->pembayaran=='sudahbayar')
                                          <div class="alert alert-success col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            {{ $order->updated_at  }}
                                            <div class="pull-right">{{ $order->payment_type }}</div>
                                          </div>
                                          @else
                                          <div class="alert alert-warning col-sm-10">
                                            <h5> Tagihan</h5>
                                            <h4> Rp {{ $order->total }}</h4>
                                            <b>Belum Bayar </b>
                                          </div> 
                                        @endif
                                      </td>
                                      <td class="col-sm-4">
                                        @if ($order->pembayaran != 'sudahbayar')
                                          <div  class="col-sm-6">
                                            <button class="btn btn-block btn-primary">Belum Dibayar</button>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"></div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin"> - </div>
                                            </div>                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="margin">Nomor Resi <br>-</div>
                                            </div>                                            
                                          </div>
                                        @elseif($order->pembayaran == 'sudahbayar')
                                          <div class="row">
                                            <div class="col-sm-4">
                                              <button class="btn btn-block btn-success margin">Dibayar</button>
                                            </div>
                                          </div>
                                          @if ($order->packing == 'dikemas')
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-success margin">Sudah Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @else
                                            <div class="row">
                                              <div class="col-sm-6">
                                              <button class="btn btn-block btn-primary margin">Belum Dikemas</button>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">{{ $order->ekspedisi }} - {{ $order->paket }}</div>
                                              </div>                                            
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="margin">Nomor Resi<br>-</div>
                                              </div>                                            
                                            </div>
                                          @endif
                                        @endif
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
