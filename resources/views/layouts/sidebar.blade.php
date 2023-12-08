<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Inventaris</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item {{ ($active === "dashboard") ? 'menu-open' : '' }}">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dasboard
          </p>
        </a>
      </li>
      <li class="nav-item {{ ($active === "produk") ? 'menu-open' : '' }}">
        <a href="/produk" class="nav-link">
          <i class="nav-icon fas fa-solid fa-box-open"></i>
          <p>
            Produk
          </p>
        </a>
      </li>
      <li class="nav-item {{ ($active === "transaksi") ? 'menu-open' : '' }}">
        <a href="/transaksi" class="nav-link">
          <i class="nav-icon fas fa-solid fa-dolly"></i>
          <p>
            Transaksi
          </p>
        </a>
      </li>
      <li class="nav-item {{ ($active === "pelanggan") ? 'menu-open' : '' }}">
        <a href="/pelanggan" class="nav-link">
          <i class="nav-icon fas fa-solid fa-user"></i>
          <p>
            Pelanggan
          </p>
        </a>
      </li>
      <li class="nav-item {{ ($active === "kategori") ? 'menu-open' : '' }}">
        <a href="/kategori" class="nav-link">
          <i class="nav-icon fas fa-solid fa-list"></i>
          <p>
            Kategori
          </p>
        </a>
      </li>
      <li class="nav-item {{ ($active === "p_history") ? 'menu-open' : '' }} {{ ($active === "t_history") ? 'menu-open' : '' }}">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-solid fa-chart-line"></i>
          <p>
            History
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link {{ ($active === "p_history") ? 'active' : '' }}">
              <i class="far {{ ($active === "p_history") ? 'fa-dot-circle' : 'fa-circle' }} nav-icon"></i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ ($active === "t_history") ? 'active' : '' }}">
              <i class="far {{ ($active === "t_history") ? 'fa-dot-circle' : 'fa-circle' }} nav-icon"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
