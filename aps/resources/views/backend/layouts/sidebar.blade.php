<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->)
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">

    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ url('/admin') }}">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="{{ Request::is('admin/pelanggan') ? 'active' : null }}">
        <a href="{{ url('/admin/pelanggan') }}">
          <i class="fa fa-group"></i> <span>Pelanggan</span>
        </a>
      </li>
      {{-- Penjualan --}}
      <li class="treeview {{ Request::is('admin/pesanan') ? 'active' : null }}">
        {{-- <li class="treeview"> --}}
        <a href="#">
          <i class="fa fa-shopping-cart"></i> <span>Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/pesanan') ? 'active' : null }}"><a href="{{ url('admin/pesanan') }}"><i class="fa fa-file"></i> Pesanan</a></li>
        </ul>
      </li>
      {{-- Produk --}}
      <li class="treeview {{ Request::is('admin/category') || Request::is('admin/produk') ? 'active' : null}}">
        <a href="#">
          <i class="fa fa-tag"></i> <span>Produk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/category') ? 'active' : null }}"><a href="{{ url('/admin/category') }}"><i class="fa fa-tags"></i> Kategori Produk</a></li>
          <li class="{{ Request::is('admin/produk') ? 'active' : null }}"><a href="{{ url('/admin/produk') }}"><i class="fa fa-tags"></i> Produk </a></li>
        </ul>
      </li>
      {{-- Stock --}}
      <li class="treeview {{ Request::is('admin/realtime') || Request::is('admin/entry') || Request::is('admin/history') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-align-justify"></i> <span>Stock</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/realtime') ? 'active' : null }}"><a href="{{ url('/admin/realtime') }}"><i class="fa  fa-file"></i> Real Time Stock</a></li>
          {{-- <li class="{{ Request::is('admin/entry') ? 'active' : null }}"><a href="{{ url('/admin/entry') }}"><i class="fa fa-file"></i> Entry Stock</a></li>
          <li class="{{ Request::is('admin/history') ? 'active' : null }}"><a href="{{ url('/admin/history') }}"><i class="fa fa-file"></i> History Stock</a></li> --}}
        </ul>
      </li>
      {{-- Finance --}}
      <li class="treeview {{ Request::is('admin/finance') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-credit-card"></i> <span>Finance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/finance') ? 'active' : null }}"><a href="{{ url('/admin/finance') }}"><i class="fa  fa-file"></i> Check Transfer</a></li>
        </ul>
      </li>
      {{-- Laporan --}}
      <li class="treeview {{ Request::is('admin/penjualan') || Request::is('admin/perbarang') || Request::is('admin/perpelanggan') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-mail-reply-all"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/penjualan') ? 'active' : null }}"><a href="{{ url('/admin/penjualan') }}"><i class="fa  fa-file"></i> Penjualan</a></li>
          <li class="{{ Request::is('admin/perbarang') ? 'active' : null }}"><a href="{{ url('/admin/perbarang') }}"><i class="fa  fa-file"></i> Penjualan Per barang</a></li>
          <li class="{{ Request::is('admin/perpelanggan') ? 'active' : null }}"><a href="{{ url('/admin/perpelanggan') }}"><i class="fa  fa-file"></i> Penjualan Per Pelanggan</a></li>
        </ul>
      </li>
      {{-- menu setting --}}
      <li class="treeview {{ Request::is('admin/katpel') || Request::is('admin/ekspedisi') || Request::is('admin/payment') ? 'active' : null }}">
        <a href="#">
          <i class="fa  fa-database"></i> <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/katpel') ? 'active' : null }}"><a href="{{ url('/admin/katpel') }}"><i class="fa fa-group"></i> Kategori Pelanggan</a></li>
          <li class="{{ Request::is('admin/ekspedisi') ? 'active' : null }}"><a href="{{ url('/admin/ekspedisi') }}"><i class="fa fa-truck"></i> Ekspedisi</a></li>
          <li class="{{ Request::is('admin/payment') ? 'active' : null }}"><a href="{{ url('/admin/payment') }}"><i class="fa fa-cc-mastercard"></i> Payment</a></li>
        </ul>
      </li>
      {{-- menu Otorisasi --}}
      <li class="treeview {{ Request::is('admin/pengguna') || Request::is('admin/role') || Request::is('admin/route') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Otorisasi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/pengguna') }}"><i class="fa fa-group"></i> Pengguna</a></li>
          {{-- <li><a href="{{ url('/admin/role') }}"><i class="fa fa-truck"></i> Role (empty)</a></li>
          <li><a href="{{ url('/admin/route') }}"><i class="fa fa-chain"></i> Route (empty)</a></li> --}}
        </ul>
      </li>

      <li class="header">LABELS</li>
      {{-- <li>
      <a href="{{ url('/admin/table') }}">
      <i class="fa fa-th"></i> <span>Table</span>
      <span class="pull-right-container">
      <small class="label pull-right bg-green">Hot</small>
    </span>
  </a>
</li>
<li>
<a href="{{ url('/admin/forms') }}">
<i class="fa fa-edit"></i> <span>Forms</span>
</a>
</li>         --}}
</ul>
</section>
  <!-- /.sidebar -->
</aside>
<!-- /.main-sidebar -->
