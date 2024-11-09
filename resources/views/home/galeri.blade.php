<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap CSS -->
    <link rel="stylesheet"
     href="assets/vendor/bootstrap/dist/css/bootstrap.min.css"
     />
     <!-- fontawesome -->
      <link rel="stylesheet" href="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
      <!-- aos -->
       <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css"/>
    <!-- lightbox -->
    <link rel="stylesheet" href="assets/lightbox/lightbox (1).css"/>
    
    <title>SD N Bulupayung 02</title>
  </head>
  <body>
 <!-- navbar -->
 <nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"
    >
    <img src="{{ asset('image/' . $contact->logo) }}" alt="Logo Sekolah" style="width: 40px; height: 40px; margin-right: 10px;">
    <span class="primary"></span>SD N Bulupayung 02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" >
        <li class="nav-item">
          <a class="nav-link fw-bolder {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item fw-bolder dropdown">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tentangkami">Tentang Kami</a></li>
            <li><a class="dropdown-item" href="visimisi">Visi Misi</a></li>
            <li><a class="dropdown-item" href="sambutan">Sambutan Kepala Sekolah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder primary" href="galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="ppdb">PPDB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- endnav -->

 <!-- breadcumbs -->
<div class="breadcumbs py-2">
  <div class="container">
    <div class="d-flex justify-content-between align-item-center text-white">
      <h2>Galeri</h2>
      <ol class="d-flex list-unstyled">
        <li>Home</li>
        <li>Galeri</li>
      </ol>
    </div>
  </div>
</div>
 <!-- end breadcumbs -->



<!-- Galeri -->
<!-- Tombol Filter Kategori -->
<div class="container my-4 text-center">
  <button class="btn btn-primary mx-1 filter-btn" data-category="all">Semua</button>
  <button class="btn btn-primary mx-1 filter-btn" data-category="kegiatan">Kegiatan Siswa</button>
  <button class="btn btn-primary mx-1 filter-btn" data-category="lomba">Lomba</button>
</div>

<!-- Daftar Gambar Galeri -->
<div class="container">
  <div class="row">
      @foreach ($galeri as $item)
          <div class="col-md-4 galeri-item" data-category="{{ $item->category }}">
              <a href="{{ asset('image/' . $item->image) }}" data-lightbox="galeri" data-title="{{ $item->title }}">
                  <img src="{{ asset('image/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid mb-3">
              </a>
          </div>
      @endforeach
  </div>
</div>


  <!-- Galeri -->
  
 
</div>

   <!-- footer -->
   <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5">
      <div class="footer mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">{{ $contact->name }}</h4>
              <p>{{ $contact->description }}
              </p>
              <strong>Phone</strong> : <span>{{ $contact->telepon }}</span>
              <br/>
              <strong>Email</strong> : <span>{{ $contact->email }}</span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">UseFull link</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="/" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Home
                  </a>
                </li>
                <li class="list-item">
                  <a href="tentangkami" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Profile
                  </a>
                </li>
                <li class="list-item">
                  <a href="berita" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Berita
                  </a>
                </li>
                <li class="list-item">
                  <a href="galeri" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Galeri
                  </a>
                </li>
                <li class="list-item">
                  <a href="ppdb" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  PPDB
                  </a>
                </li>
                <li class="list-item">
                  <a href="contact" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
     </div>
    </div>
    <div class="footer-down bg-draker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; Copyright <strong>SD N Bulupayung 02</strong>. All Rights Reserved
            </div>
            <div class="credits">
              designed by Aulia
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-links fload-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="https://youtu.be/J-X3yrUcFsc?si=TCwjJoWaFL4l3KYA" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </footer>
   
  <!-- endfooter -->

  <!-- to tap -->
<a href="#" class="btn-to-top p-3">
  <i class="fa fa-chevron-up"></i>
</a>
  <!--end to tap -->


    <script src="/assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/lightbox/lightbox (1).js"></script>
    <script>
      lightbox.option({
          'fadeDuration': 200,
          'resizeDuration': 200,
          'wrapAround': true,
          'alwaysShowClose': true // Menampilkan tanda silang untuk kembali
      });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.galeri-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    
                    if (category === 'all' || itemCategory === category) {
                        item.style.display = 'block'; // Tampilkan item
                    } else {
                        item.style.display = 'none'; // Sembunyikan item
                    }
                });
            });
        });
    });
</script>

  </body>
</html>