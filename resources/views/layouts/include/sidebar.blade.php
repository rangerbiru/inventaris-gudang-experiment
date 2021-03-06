<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('home')}}" class="site_title">
        {{-- <img src="{{asset('assets/images/sidrap.png')}}" alt="..." class="profile_img" style="max-width:35px;"> --}}
        <span style="font-size:18px;">INVENTARIS BARANG</span>
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{asset('assets/images/logo-tukang.png')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2>{{ucwords(Auth::user()->name)}}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Umum</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Dasboard </a></li>
        </ul>
      </div>
      
      @if (Auth::user()->role_id == 1)
          
      <div class="menu_section">
        <h3>Data Master</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-users"></i> Manajemen User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              {{-- <li><a href="{{route('user.listOfNonaktif')}}">Belum Aktif</a></li>
              <li><a href="{{route('user.listOfAktif')}}">Sudah Aktif</a></li> --}}
              <li><a href="{{route('user')}}">List Semua Data</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-gear"></i> Jenis Barang <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('jenis-barang')}}">List Semua Data</a></li>

            </ul>
          </li>
          <li><a><i class="fa fa-files-o"></i> Barang <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('barang')}}">List Semua Data</a></li>

            </ul>
          </li>
        </ul>
      </div>
      @endif
      <div class="menu_section">
        <h3>App</h3>
        <ul class="nav side-menu">
          <li><a href="{{route('transaksi')}}"><i class="fa fa-truck"></i> Transaksi </a></li>

          <li><a><i class="fa fa-pie-chart"></i> Laporan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('laporan.masuk')}}">Barang Masuk</a></li>
              <li><a href="{{route('laporan.keluar')}}">Barang Keluar</a></li>

            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>