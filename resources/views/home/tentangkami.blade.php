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
 <!-- navbar -->
 @include('layouts.navbar')
<!-- endnav -->

 <!-- breadcumbs -->
<div class="breadcumbs py-2">
  <div class="container">
    <div class="d-flex justify-content-between align-item-center text-white">
      <h2>Profil</h2>
      <ol class="d-flex list-unstyled">
        <li>Home</li>
        <li>Tentang Kami</li>
      </ol>
    </div>
  </div>
</div>
 <!-- end breadcumbs -->

 <!-- profile -->
 <div class="profile-us mt-5">
  <div class="container">
      <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
              <h3 class="fw-bold profile-title">
                  {{ $about-> judul }}
              </h3>
              <p class="fw-bolder mt-4 profile-subtitle">
                 {{ $about-> subjudul}}
              </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
              <p>{{ $about -> deskripsi_1}}
              </p>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <i class="fa fa-check-double primary"></i>
                     {{ $about -> kelebiahan_1}}
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check-double primary"></i>
                    {{ $about -> kelebiahan_2}}
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check-double primary"></i>
                    {{ $about -> kelebiahan_3}}
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check-double primary"></i>
                    {{ $about -> kelebiahan_4}}
                  </li>
              </ul>
              <p class="mt-2">
                {{ $about -> deskripsi_2}}
              </p>
          </div>
      </div>
  </div>
 <!-- end profile -->

 <!-- teams -->
 <div class="teams bg-light mt-5 py-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Pengajar</h2>
      </div>
      <p class="text-center mt-4">Berikut adalah guru SDN 02 Bulupayung</p>
      <div class="row">
        @foreach($teams as $team)
        <div class="col-md-4 mt-4" data-aos="fade-up">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/' . $team->image) }}" class="card-img-top" alt="{{ $team->title }}">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ $team->title }}</h5>
              <p class="card-text text-muted">{{ $team->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- end teams -->
   
<div class="vh-50">


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
@include('layouts.tap')
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