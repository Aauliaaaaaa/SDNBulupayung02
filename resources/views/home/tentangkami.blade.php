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
   @include('layouts.footer')
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