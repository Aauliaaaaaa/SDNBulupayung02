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
      <h2>Sambutan Kepala Sekolah</h2>
      <ol class="d-flex list-unstyled">
        <li>Home</li>
        <li>Sambutan Kepala Sekolah</li>
      </ol>
    </div>
  </div>
</div>
 <!-- end breadcumbs -->

  <!-- sambutan -->
   <!-- bg-light buat bg jd warna abu2 -->
   <div class="sambutan mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4" data-aos="fade-right">
                <img src="{{ asset('image/' . $sambutan->logo) }}" alt="{{ $sambutan->name }}" class="img-small">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
                    {{ $sambutan->description }}
                </p>
            </div>
        </div>
    </div>
</div>
    <!-- sambutan -->
 
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