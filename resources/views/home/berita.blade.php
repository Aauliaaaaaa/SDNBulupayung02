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
    
    <title>SD N Bulupayung 02</title>
  </head>
  <body>

    @include('components.navbar')

 <!-- breadcumbs -->
<div class="breadcumbs py-2">
  <div class="container">
    <div class="d-flex justify-content-between align-item-center text-white">
      <h2>Berita</h2>
      <ol class="d-flex list-unstyled">
        <li>Home</li>
        <li>Berita</li>
      </ol>
    </div>
  </div>
</div>
 <!-- end breadcumbs -->

  <!-- berita -->
 <!-- resources/views/berita/index.blade.php -->
    <div class="container small-card mt-5">
      <div class="row">
          @foreach ($beritas as $berita)
              <div class="col-md-4 news-item" data-aos="fade-up">
                  <div class="card">
                      <img src="{{ asset('image/' . $berita->image) }}" class="card-img-top news-img" alt="{{ $berita->title }}">
                      <div class="card-body">
                          <div class="news-date">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                          <h5 class="news-title" style="font-size: 1rem; font-weight: bold;">{{ $berita->title }}</h5>
                          <p class="card-text">{!! Str::markdown(Str::limit($berita->description, 100)) !!}</p> 
                          <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    </div>

    
    <!-- Tombol untuk Lihat Semua Berita -->
    {{-- <div class="text-center mt-4">
      <a href="#" class="btn btn-secondary">Lihat Semua Berita</a>
    </div> --}}
  </div>
  <!-- end berita -->
  
 
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
  </body>
</html>