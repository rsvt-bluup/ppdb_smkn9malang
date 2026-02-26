<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index-2.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index-2.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown {{ request()->routeIs('beranda') ? 'active' : ''}}">
        <a href="{{ route('beranda') }}" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
      </li>

      <li class="menu-header">Starter</li>
      <li class="{{ request()->routeIs('user') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user') }}"><i class="far fa-square"></i> <span>Pengguna</span></a></li>
      <li class="dropdown {{ request()->routeIs('jurusan') ? 'active' : '' }}"><a href="{{ route('jurusan') }}" class="nav-link"><i class="fas fa-fire"></i></i><span>Jurusan</span></a></li>
      <li class="dropdown {{ request()->routeIs('pendaftaran') ? 'active' : '' }}"><a href="{{ route('pendaftaran') }}"class="nav-link"><i class="fas fa-fire"></i></i><span>Pendaftaran</span></a></li>
    </ul>
  </aside>
</div>