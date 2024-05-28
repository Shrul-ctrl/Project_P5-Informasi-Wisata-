<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">WisataNusantara</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Interface
    </div>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fa-solid fa-plane-departure"></i>
        <span>Destinasi Wisata</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fa-solid fa-location-dot"></i>
        <span>Lokasi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fa-regular fa-calendar-days"></i>
        <span>Event</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('kategori.index')}}">
        <i class="fa-solid fa-layer-group"></i>
        <span>Kategori</span>
      </a>
    </li>
    <hr class="sidebar-divider">
  </ul>