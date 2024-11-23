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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
        <h2>Contact</h2>
        <ol class="d-flex list-unstyled">
            <li>Home</li>
            <li>Contact</li>
        </ol>
        </div>
    </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->
     <div class="contact mb-5">
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb={{ $contact->maps_embed }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Location</h4>
                                        <p class="ms-5">{{ $contact->alamat }}</p>
                                    </div>
                                    <div class="col-md-4">
                                      <a href="mailto:{{ $contact->email }}" class="btn btn-outline-primary d-flex align-items-center p-3 text-decoration-none text-dark" style="border-radius: 8px;">
                                        <i class="fa fa-envelope fa-2x primary me-3"></i>
                                        <div>
                                          <h5 class="mb-0 fw-bolder">Email</h5>
                                          <p class="mb-0">{{ $contact->email }}</p>
                                        </div>
                                      </a>
                                    </div>                                  
                                    <div class="col-md-3">
                                      <a href="https://wa.me/{{ str_replace('+', '', $contact->telepon) }}" target="_blank" class="btn btn-outline-success d-flex align-items-center p-3 text-decoration-none text-dark" style="border-radius: 8px;">
                                        <i class="fab fa-whatsapp fa-2x me-3" style="color: #25D366;"></i>
                                        <div>
                                          <h5 class="mb-0 fw-bolder">WhatsApp</h5>
                                          <p class="mb-0">{{ $contact->telepon }}</p>
                                        </div>
                                      </a>
                                    </div>                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
     </div>
    <!-- end contact -->



   <!-- footer -->
   <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5">
      <div class="footer mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">{{ $contact->name }}</h4>
              <p>{{$contact-> description}}
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