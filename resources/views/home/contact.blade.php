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
 <nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"
    ><span class="primary"></span>SD N Bulupayung 02</a>
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
          <a class="nav-link fw-bolder" href="galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="ppdb">PPDB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder primary" href="contact">Contact</a>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.6998531204188!2d109.1385521404077!3d-7.596797220037215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65696d4d1e69af%3A0x7e3a752ddbc772ea!2sSD%20Negeri%20Bulupayung%2002!5e0!3m2!1sid!2sid!4v1724481670124!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                        <p class="ms-5">Jl. Tambangan, Bulupayung, Kec. Kesugihan, Kabupaten Cilacap, Jawa Tengah 53272</p>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-envelope fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Email</h4>
                                        <p class="ms-5">info@gmail.com</p>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-phone-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Telephone</h4>
                                        <p class="ms-5">(+)21 345 231 786</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama Anda">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email Anda">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject"></input>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                   <textarea name="" id="" cols="30" class="form-control" placeholder="Your massage"></textarea>
                                </div>
                            </div>
                            <row class="mt-4">
                                <button type="submit" class="btn btn-submit">Kirim Pesan</button>
                            </row>
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
              <h4 class="fw-bold">SD N Bulupayung 02</h4>
              <p>jgbfjjbhs bv jhsfsvhbh bsn sjgjsgb vsjfhsf 
                 bhfvhs sh cs
                 jh bshjhs fhsjs
                 sbjgsugyf
              </p>
              <strong>Phone</strong> : <span>+62829301929201</span>
              <br/>
              <strong>Email</strong> : <span>sdn@gmail.com</span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">UseFull link</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Home
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Profile
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Berita
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Galeri
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  PPDB
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Contact
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Ikuti Berita Kami</h4>
              <p>abcf fhana jshei fijscn skjhf iu n jvs udh</p>
              <div class="input-group">
                <input 
                type="text" 
                class="form-control"
                placeholder="emailanda@gmail.com" 
                >
                <button 
                class="btn btn-subscribe" 
                type="button" 
                id="inputGroupFileAddon04">
                Subscribe
              </button>
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
              <a href="" class="mx-2">
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