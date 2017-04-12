<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  {{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap-toggle.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Date Picter -->
  <!-- daterange picker -->
  {{-- <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  {{-- <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  {{-- <link rel="stylesheet" href="assets/plugins/iCheck/all.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  {{-- <link rel="stylesheet" href="assets/plugins/colorpicker/bootstrap-colorpicker.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  {{-- <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  {{-- <link rel="stylesheet" href="assets/plugins/select2/select2.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">


  {{-- file js  --}}

  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.6 -->
  {{-- <script src="../../bootstrap/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  {{-- Bootstrap toggle --}}
  {{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
  <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
  <!-- Select2 -->
  {{-- <script src="../../plugins/select2/select2.full.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

  <!-- DataTables -->
  {{-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  {{-- <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

  <!-- InputMask -->
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  {{-- <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script> --}}
  <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  {{-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> --}}
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap datepicker -->
  {{-- <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script> --}}
  <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <!-- bootstrap color picker -->
  {{-- <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <!-- bootstrap time picker -->
  {{-- <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script> --}}
  <script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

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

  <!-- CK Editor -->
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Header menu/atas -->
  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          @if (Auth::guest())
            {{-- jika guest user login --}}
            @else
            {{-- jika admin login --}}
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }} (Keluar)</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                    {{ Auth::user()->name }} - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> --}}
            </li>

          @endif
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
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
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="{{ url('/admin') }}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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
              <li class="{{ Request::is('admin/pesanan') ? 'active' : null }}"><a href="{{ url('admin/pesanan') }}">Pesanan</a></li>
            </ul>
          </li>
          {{-- Produk --}}
          <li class="treeview {{ Request::is('admin/KategoriProduk') || Request::is('admin/produk') ? 'active' : null}}">
            <a href="#">
              <i class="fa fa-tag"></i> <span>Produk</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('admin/KategoriProduk') ? 'active' : null }}"><a href="{{ url('/admin/KategoriProduk') }}"><i class="fa fa-tags"></i> Kategori Produk</a></li>
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
              <li class="{{ Request::is('admin/entry') ? 'active' : null }}"><a href="{{ url('/admin/entry') }}"><i class="fa fa-file"></i> Entry Stock</a></li>
              <li class="{{ Request::is('admin/history') ? 'active' : null }}"><a href="{{ url('/admin/history') }}"><i class="fa fa-file"></i> History Stock</a></li>
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
              <li><a href="{{ url('/admin/role') }}"><i class="fa fa-truck"></i> Role (empty)</a></li>
              <li><a href="{{ url('/admin/route') }}"><i class="fa fa-chain"></i> Route (empty)</a></li>
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
    <!-- /.sidebar -->

   @yield('content')
<!-- /.wrapper di index file -->

</body>
</html>
