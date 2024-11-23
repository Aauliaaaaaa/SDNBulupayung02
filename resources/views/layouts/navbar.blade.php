<nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="{{ asset('image/' . $contact->logo) }}" alt="Logo Sekolah" style="width: 40px; height: 40px; margin-right: 10px;">
      <span class="primary"></span>SD N Bulupayung 02</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto" >
          <li class="nav-item">
            <a class="nav-link fw-bolder {{ Request::is('/') ? 'primary' : " " }}" href="/">Beranda</a>
          </li>
          <li class="nav-item fw-bolder dropdown">
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Profile
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item {{ Request::is('tentangkami') ? 'primary' : " " }}" href="tentangkami">Tentang Kami</a></li>
              <li><a class="dropdown-item {{ Request::is('visimisi') ? 'primary' : " " }}" href="visimisi">Visi Misi</a></li>
              <li><a class="dropdown-item {{ Request::is('sambutan') ? 'primary' : " " }}" href="sambutan">Sambutan Kepala Sekolah</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder {{ Request::is('berita') ? 'primary' : " " }}" href="berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder {{ Request::is('galeri') ? 'primary' : " " }}" href="galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder {{ Request::is('ppdb') ? 'primary' : " " }}" href="ppdb">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder {{ Request::is('contact') ? 'primary' : " " }}" href="contact">Contact</a>
          </li>
  
          @guest
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="{{ route('login') }}">Login</a>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>