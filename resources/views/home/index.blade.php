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
          <a class="nav-link fw-bolder primary" href="/">Beranda</a>
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
          <a class="nav-link fw-bolder" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- endnav -->

 <!-- carausel -->
 <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/1.jpg.jpeg" class="d-block w-100 carausel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Selamat Datang</h5>
          <p>Sekolah Dasar Negeri Bulupayung 02</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/img/2.jpg.jpeg" class="d-block w-100 carausel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/img/3.jpg.jpeg" class="d-block w-100 carausel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carausel -->

  <!-- about us -->
  <div class="profile-us mt-5">
    <div class="container">
        <div class="title-container">
        <h2 class="text-center fw-bold">Tentang Kami</h2>
    </div>
        <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="fw-bold profile-title">
                    SD N Bulupayung 02 merupakan unggulan di Desa Bulupayung.
                </h3>
                <p class="fw-bolder mt-4 profile-subtitle">
                    isinya deskripsi lebih jelas tentang sekolah mungkin?
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>Bentuk text ada disebelah kanan
                    mau diisi sama sambutan kepala sekolah atau visi misi juga boleh
                    visi misi aja ga si huhu. Prestasi yang diraih :
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <i class="fa fa-check-double primary"></i>
                        Juara 1 lomba Menggambar
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-check-double primary"></i>
                        Juara 1 lomba Berenang
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-check-double primary"></i>
                        Juara 3 lomba Memanah
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-check-double primary"></i>
                        Juara 1 lomba Menangis
                    </li>
                </ul>
                <p class="mt-2">
                    kami sangat bangga atas pencapaian-pencapaian yang diraih oleh siswa siswi kami
                </p>
            </div>
        </div>
    </div>
  </div>
  <!-- end about us -->

  <!-- visi misi -->
  <div class="visimisi mt-5">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">Visi Misi</h2>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 text-center" data-aos="zoom-in-up">
                <p>Visi :</p>
                <p>Merealisasikan lingkungan yang nyaman bagi para siswa, guru, dan pekerja</p>
                <p>Misi :</p>
                <ul class="text-center list-unstyled">
                    <li>1. Melindungi hak atas semua warga sekolah</li>
                    <li>2. Menjaga ketertiban sekolah</li>
                    <li>3. Membiasakan siswa dan siswi hidup sehat</li>
                    <li>4. Menjadikan sekolah yang nyaman untuk belajar</li>
                </ul>
            </div>
        </div>
    </div>
</div>

   <!-- end visi misi -->

    <!-- jumlah -->
    <div class="jumlah mt-2 bg-light py-5">
      <div class="container">
        <div class="title-container text-center p-4">
          <h2 class="fw-bold">Data Singkat Sekolah</h2>
        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-2">
            <!-- border-0 untuk menghilangkan garis -->
            <div class="card text-center mt-2" data-aos="zoom-in">
              <div class="card-body">
                <!-- Ikon untuk guru -->
                <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                <div class="card-title fw-bolder">12</div>
                <div class="card-description fw-bold">Guru</div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center mt-2" data-aos="zoom-in">
              <div class="card-body">
                <!-- Ikon untuk siswa -->
                <i class="fas fa-user-graduate fa-3x mb-3"></i>
                <div class="card-title fw-bolder">80</div>
                <div class="card-description fw-bold">Siswa</div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center mt-2" data-aos="zoom-in">
              <div class="card-body">
                <!-- Ikon untuk kelas -->
                <i class="fas fa-school fa-3x mb-3"></i>
                <div class="card-title fw-bolder">8</div>
                <div class="card-description fw-bold">Kelas</div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center mt-2" data-aos="zoom-in">
              <div class="card-body">
                <!-- Ikon untuk tenaga pendidik -->
                <i class="fas fa-user-tie fa-3x mb-3"></i>
                <div class="card-title fw-bolder">2</div>
                <div class="card-description fw-bold">Tenaga Pendidik</div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>   
    <!-- jumlah -->

   <!-- sambutan -->
   <!-- bg-light buat bg jd warna abu2 -->
    <div class="sambutan mt-5 py-5">
      <div class="container">
        <div class="title-container text-center p-4">
          <h2 class="fw-bold">Sambutan Kepala Sekolah</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/4.jpg.jpeg" alt=""  class="img-small">
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>Assalamualikum wr wb <br>
              Bentuk text ada disebelah kanan
              mau diisi sama sambutan kepala sekolah atau visi misi juga boleh
              visi misi aja ga si huhu. Prestasi yang diraih :
          </p>
          </div>
        </div>
      </div>
    </div>
    <!-- sambutan -->

    <!-- berita -->
  <div class="container small-card mt-5">
    <div class="row">
      <div class="title-container text-center p-4">
        <h2 class="fw-bold">Berita</h2>
      </div>
      <div class="row mt-5">
      <!-- Berita 1 -->
      <div class="col-md-4 news-item" data-aos="fade-up">
        <div class="card">
          <img src="https://via.placeholder.com/400x200" class="card-img-top news-img" alt="Berita 1">
          <div class="card-body">
            <div class="news-date">17 September 2024</div>
            <h5 class="news-title">Judul Berita 1</h5>
            <p class="card-text">Deskripsi singkat berita 1 yang memberikan gambaran umum mengenai isi berita...</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
     

      <!-- Berita 2 -->
      <div class="col-md-4 news-item" data-aos="fade-up">
        <div class="card">
          <img src="https://via.placeholder.com/400x200" class="card-img-top news-img" alt="Berita 2">
          <div class="card-body">
            <div class="news-date">15 September 2024</div>
            <h5 class="news-title">Judul Berita 2</h5>
            <p class="card-text">Deskripsi singkat berita 2 yang memberikan gambaran umum mengenai isi berita...</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col-md-4 news-item" data-aos="fade-up">
        <div class="card">
          <img src="https://via.placeholder.com/400x200" class="card-img-top news-img" alt="Berita 3">
          <div class="card-body">
            <div class="news-date">10 September 2024</div>
            <h5 class="news-title">Judul Berita 3</h5>
            <p class="card-text">Deskripsi singkat berita 3 yang memberikan gambaran umum mengenai isi berita...</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <!-- Tombol untuk Lihat Semua Berita -->
    <div class="text-center mt-4">
      <a href="#" class="btn btn-secondary">Lihat Semua Berita</a>
    </div>
  </div>
  <!-- end berita -->

    <!-- ppdb -->
    <div class="ppdb mt-5"> 
      <div class="container">
          <div class="title-container">
          <h2 class="text-center fw-bold">Alur PPDB</h2>
      </div>
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="img-ppdb">
                <div class=""></div>
                <div class="mt-2" data-aos="zoom-in" style="margin-left: -100px;">
                  <img src="/assets/img/g1.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- end ppdb -->

  <!-- galeri us -->
  <div class="galeri-us mt-5">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">Galeri</h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="mansory galeri-container">
                    <div class="mansory-sizer"></div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g4.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g6.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="mansory-item mt-2 py-2 galeri-item" data-aos="zoom-in-up">
                        <img src="/assets/img/g8.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- end galeri us -->

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
                  <a href="/" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary" ></i>
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
                  <a href="berita.html" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Berita
                  </a>
                </li>
                <li class="list-item">
                  <a href="galeri.html" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  Galeri
                  </a>
                </li>
                <li class="list-item">
                  <a href="ppdb.html" class="text-decoration-none text-white">
                  <i class="fa fa-chevron-right primary"></i>
                  PPDB
                  </a>
                </li>
                <li class="list-item">
                  <a href="contact.html" class="text-decoration-none text-white">
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