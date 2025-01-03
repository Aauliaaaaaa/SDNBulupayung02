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
      <h2>PPDB</h2>
      <ol class="d-flex list-unstyled">
        <li>Home</li>
        <li>PPDB</li>
      </ol>
    </div>
  </div>
</div>
 <!-- end breadcumbs -->

  <!-- PPDB -->
  <div class="ppdb mt-5"> 
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="img-ppdb text-center"> <!-- Menambahkan class text-center untuk perataan -->
                    @if($ppdb) <!-- Memastikan data ada -->
                        <h5 class="mt-3"></h5> <!-- Menampilkan nama PPDB -->
                        <a href="{{ asset('image/' . $ppdb->logo) }}" data-lightbox="ppdb" data-title="{{ $ppdb->name }}">
                          <img src="{{ asset('image/' . $ppdb->logo) }}" alt="{{ $ppdb->name }}" class="img-fluid">
                        </a>
                        <p>{{ $ppdb->description }}</p> <!-- Menampilkan deskripsi jika ada -->
                    @else
                        <p>Tidak ada informasi PPDB yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- PPDB -->
 
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