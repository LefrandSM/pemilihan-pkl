{{-- NAVBAR LANDING PAGE --}}
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Smk Negeri 4 Payakumbuh</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?= ($title == "Landing Page") ? 'active' : '' ; ?>" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perusahaan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item <?= ($title == "Perusahaan Rekayasa Perangkat Lunak") ? 'active' : '' ; ?>" href="/rpl">Rekayasa perangkat lunak</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item <?= ($title == "Perusahaan Teknik Komputer dan Jaringan") ? 'active' : '' ; ?>" href="/tkj">Teknik komputer dan jaringan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item <?= ($title == "Perusahaan Multimedia") ? 'active' : '' ; ?>" href="/mm">Multimedia</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="/auth/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>