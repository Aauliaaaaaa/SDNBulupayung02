<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <title>SD N Bulupayung 02</title>
  </head>
  <body>
    
    <!-- Konten Halaman Berita -->
    <div class="container mt-5 d-flex justify-content-center" style="padding: 100px;">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 text-center" style="border-radius: 10px; background-color: #f8f9fa;">
                <img src="{{ asset('image/' . $berita->image) }}" class="card-img-top img-fluid mx-auto" alt="{{ $berita->title }}" style="height: 500px; width: 100%; object-fit: contain;">
                
                <div class="card-body p-5" style="background-color: #f8f9fa; padding: 40px;">
                  <h1 class="card-title font-weight-bold mb-3" style="font-size: 2rem; color: #333;">{{ $berita->title }}</h1>
                  <div class="text-muted mb-4" style="font-size: 0.9rem;">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                  
                  <!-- Garis pemisah -->
                  <hr style="border: 1px solid #ccc; margin: 20px 0;">
                  
                  <p class="card-text text-center" style="line-height: 1.8; color: #ffffff;">
                      {!! $berita->description !!}
                  </p>
                  
                  <!-- Tombol Kembali ke Daftar Berita -->
                  <div class="text-center mt-4">
                      <a href="/berita" class="btn btn-secondary" style="border-radius: 20px; padding: 10px 30px; font-weight: bold; background-color: #0088ff !important; color: white !important; display: inline-block; border: 1px solid rgb(255, 255, 255); text-decoration: none;">
                          Kembali ke Daftar Berita
                      </a>
                  </div>
              </div>
              
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="/assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="/assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
