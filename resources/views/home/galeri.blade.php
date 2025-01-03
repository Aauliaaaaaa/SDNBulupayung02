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
 @include('layouts.navbar')
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