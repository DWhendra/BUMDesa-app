<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
      <img src="{{asset('./assets/img/logodpmd.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">BUM Desa</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse h-100 w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('home')?'active':''}}" href="{{route('home')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Halaman Utama</span>
        </a>
      </li>
      @auth
      @canany(['admin', 'desa','pegawai'])
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DATA BUM DESA</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('bumdesa.index')?'active':''}}" href="{{ route('bumdesa.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data BUM Desa</span>
        </a>
      </li>
      @canany(['admin', 'desa'])
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('bumdesa.create')?'active':''}}" href="{{ route('bumdesa.create') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-plus text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tambah Data BUM Desa</span>
        </a>
      </li>
      @endcanany
      @endcanany
      @auth
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengumuman</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('pengumuman.index')?'active':''}}" href="{{ route('pengumuman.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-bullhorn text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data Pengumuman</span>
        </a>
      </li>
      @canany(['admin', 'pegawai'])
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('pengumuman.create')?'active':''}}" href="{{ route('pengumuman.create') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-plus-circle text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tambah Pengumuman</span>
        </a>
      </li>
      @endcanany
      @endauth
      @canany(['admin', 'pegawai', 'desa'])
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Evaluasi BUM DESA</h6>
      </li>
      @canany(['admin', 'pegawai'])
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('indikator.index')?'active':''}}" href="{{ route('indikator.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-list text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Indikator</span>
        </a>
      </li>
      @endcanany
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('rekapitulasi.index')?'active':''}}" href="{{ route('rekapitulasi.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-plus-square-o text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Rekapitulasi</span>
        </a>
      </li>
      @endcanany
      @canany(['admin', 'pegawai', 'desa'])
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.index')?'active':''}}" href="{{ route('user.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-users text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data Pengguna</span>
        </a>
      </li>
      @canany(['admin', 'pegawai'])
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.create')?'active':''}}" href="{{ route('user.create') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-user-plus text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tambah Pengguna</span>
        </a>
      </li>
      @endcanany
      @endcanany
      @endauth

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Aksi</h6>
      </li>
      @auth

      <form action="/logout" method="post">
        @csrf

        <li class="nav-item">
          <a class="nav-link ">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <button class="bg-transparent border-0 ms-6 text-secondary" type="submit"><i class="fa fa-sign-out text-danger text-sm opacity-10"></i>
                <span class="nav-link-text ms-3">Keluar</span></button>
            </div>
          </a>
        </li>
      </form>

      @else
      <li class="nav-item">
        <a class="nav-link " href="{{ route('user.login') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-sign-in text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Masuk</span>
        </a>
      </li>
      @endauth


    </ul>
  </div>
</aside>
