<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
<img src="{{asset('assets/img/wonosobo.png')}}" class="logo" href="#"></img>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="nav justify-content-start">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('warga.ktp')}}">Pengajuan KTP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('warga.kk')}}">Pengajuan KK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('warga.sku')}}">Pengajuan SKU</a>
  </li>
</ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active">Admin</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.logout')}}">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>