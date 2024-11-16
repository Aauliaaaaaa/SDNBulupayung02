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
 
    @include('components.navbar')

 <!-- carausel -->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 50px;">
  <div class="carousel-indicators">
      @foreach ($sliders as $index => $slider)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
      @endforeach
  </div>
  <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)
          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <img src="{{ asset ('image/' . $slider->image) }}" class="d-block w-100 carousel-img" alt="{{ $slider->title }}">
              <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $slider->title }}</h5>
                  <p>{{ $slider->description }}</p>
              </div>
          </div>
      @endforeach
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
  </div>
  <!-- end about us -->

  <!-- visi misi -->

  <div class="visimisi mt-5">
    <div class="container">
      <div class="title-container">
      <h2 class="text-center fw-bold">Visi Misi</h2>
  </div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 text-center" data-aos="zoom-in-up">
                <p>Visi :</p>
                <p>{{ $visi->description }}</p> 
                <p>Misi :</p>
                <ul class="text-center list-unstyled">
                    @foreach($misi as $item)
                        <li>{{ $loop->iteration }}. {{ $item->description }}</li>
                    @endforeach
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
              @foreach($jumlahs as $jumlah)
                  <div class="col-md-2">
                      <div class="card text-center mt-2" data-aos="zoom-in">
                          <div class="card-body">
                              <img src="/image/{{ $jumlah->image }}" alt="" class="img-fluid" width="80">
                              <div class="card-title fw-bolder">{{ $jumlah->title }}</div>
                              <div class="card-description fw-bold">{{ $jumlah->description }}</div>
                          </div>
                      </div>
                  </div>
              @endforeach
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
      </div>
    </div>
    <!-- sambutan -->



    <!-- ppdb -->
    <div class="ppdb mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Alur PPDB</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6 d-flex align-items-center">
            <!-- Kolom untuk deskripsi -->
            <div>
              @if($ppdb)
                <p class="mt-3">{{ $ppdb->name }}</p>
                <p>{{ $ppdb->description }}</p>
              @else
                <p>Tidak ada informasi PPDB yang tersedia.</p>
              @endif
            </div>
          </div>
          <div class="col-md-6 text-center">
            <!-- Kolom untuk gambar -->
            @if($ppdb)
              <a href="{{ asset('image/' . $ppdb->logo) }}" data-lightbox="ppdb" data-title="{{ $ppdb->name }}">
                <img src="{{ asset('image/' . $ppdb->logo) }}" alt="{{ $ppdb->name }}" class="img-fluid w-75">
              </a>
            @endif
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

        <div class="container my-4 text-center">
          <button class="btn btn-primary mx-1 filter-btn" data-category="all">Semua</button>
          <button class="btn btn-primary mx-1 filter-btn" data-category="kegiatan">Kegiatan Siswa</button>
          <button class="btn btn-primary mx-1 filter-btn" data-category="lomba">Lomba</button>
        </div>

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
                  <i class="fa fa-chevron-right primary" ></i>
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
  <a href="#" class="btn-to-top" style="display: flex; justify-content: center; align-items: center;">
    <i class="fa fa-chevron-up"></i>
  </a>
    <!--end to tap -->
  

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