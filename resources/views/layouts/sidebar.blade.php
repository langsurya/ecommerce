<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->)
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><span class="hidden-xs">{{ Auth::user()->name }}</span></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ url('/backend') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="{{ Request::is('backend/pelanggan') ? 'active' : null }}">
        <a href="{{ url('/backend/pelanggan') }}">
          <i class="fa fa-group"></i> <span>Pelanggan</span>
        </a>
      </li>
      {{-- Penjualan --}}
      <li class="treeview {{ Request::is('backend/pesanan') ? 'active' : null }}">
        {{-- <li class="treeview"> --}}
        <a href="#">
          <i class="fa fa-shopping-cart"></i> <span>Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/pesanan') ? 'active' : null }}"><a href="{{ url('backend/pesanan') }}">Pesanan</a></li>
        </ul>
      </li>
      {{-- Produk --}}
      <li class="treeview {{ Request::is('backend/Category') || Request::is('backend/produk') ? 'active' : null}}">
        <a href="#">
          <i class="fa fa-tag"></i> <span>Produk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/Category') ? 'active' : null }}"><a href="{{ url('/backend/Category') }}"><i class="fa fa-tags"></i> Kategori Produk</a></li>
          <li class="{{ Request::is('backend/produk') ? 'active' : null }}"><a href="{{ url('/backend/produk') }}"><i class="fa fa-tags"></i> Produk </a></li>
        </ul>
      </li>
      {{-- Stock --}}
      <li class="treeview {{ Request::is('backend/realtime') || Request::is('backend/entry') || Request::is('backend/history') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-align-justify"></i> <span>Stock</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/realtime') ? 'active' : null }}"><a href="{{ url('/backend/realtime') }}"><i class="fa  fa-file"></i> Real Time Stock</a></li>
          <li class="{{ Request::is('backend/entry') ? 'active' : null }}"><a href="{{ url('/backend/entry') }}"><i class="fa fa-file"></i> Entry Stock</a></li>
          <li class="{{ Request::is('backend/history') ? 'active' : null }}"><a href="{{ url('/backend/history') }}"><i class="fa fa-file"></i> History Stock</a></li>
        </ul>
      </li>
      {{-- Finance --}}
      <li class="treeview {{ Request::is('backend/finance') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-credit-card"></i> <span>Finance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/finance') ? 'active' : null }}"><a href="{{ url('/backend/finance') }}"><i class="fa  fa-file"></i> Check Transfer</a></li>
        </ul>
      </li>
      {{-- Laporan --}}
      <li class="treeview {{ Request::is('backend/penjualan') || Request::is('backend/perbarang') || Request::is('backend/perpelanggan') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-mail-reply-all"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/penjualan') ? 'active' : null }}"><a href="{{ url('/backend/penjualan') }}"><i class="fa  fa-file"></i> Penjualan</a></li>
          <li class="{{ Request::is('backend/perbarang') ? 'active' : null }}"><a href="{{ url('/backend/perbarang') }}"><i class="fa  fa-file"></i> Penjualan Per barang</a></li>
          <li class="{{ Request::is('backend/perpelanggan') ? 'active' : null }}"><a href="{{ url('/backend/perpelanggan') }}"><i class="fa  fa-file"></i> Penjualan Per Pelanggan</a></li>
        </ul>
      </li>
      {{-- menu setting --}}
      <li class="treeview {{ Request::is('backend/katpel') || Request::is('backend/ekspedisi') || Request::is('backend/payment') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-database"></i> <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('backend/katpel') ? 'active' : null }}"><a href="{{ url('/backend/katpel') }}"><i class="fa fa-group"></i> Kategori Pelanggan</a></li>
          <li class="{{ Request::is('backend/ekspedisi') ? 'active' : null }}"><a href="{{ url('/backend/ekspedisi') }}"><i class="fa fa-truck"></i> Ekspedisi</a></li>
          <li class="{{ Request::is('backend/payment') ? 'active' : null }}"><a href="{{ url('/backend/payment') }}"><i class="fa fa-cc-mastercard"></i> Payment</a></li>
        </ul>
      </li>
      {{-- menu Otorisasi --}}
      <li class="treeview {{ Request::is('backend/pengguna') || Request::is('backend/role') || Request::is('backend/route') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Otorisasi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/backend/pengguna') }}"><i class="fa fa-group"></i> Pengguna</a></li>
          <li><a href="{{ url('/backend/role') }}"><i class="fa fa-truck"></i> Role (empty)</a></li>
          <li><a href="{{ url('/backend/route') }}"><i class="fa fa-chain"></i> Route (empty)</a></li>
        </ul>
      </li>

      <li class="header">LABELS</li>
      {{-- <li>
      <a href="{{ url('/backend/table') }}">
      <i class="fa fa-th"></i> <span>Table</span>
      <span class="pull-right-container">
      <small class="label pull-right bg-green">Hot</small>
    </span>
  </a>
</li>
<li>
<a href="{{ url('/backend/forms') }}">
<i class="fa fa-edit"></i> <span>Forms</span>
</a>
</li>         --}}
</ul>
</section>
  <!-- /.sidebar -->
</aside>
<!-- /.main-sidebar -->
