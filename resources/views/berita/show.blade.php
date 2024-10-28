<!-- resources/views/berita/show.blade.php -->
<div class="container mt-5 d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm border-0 text-center" style="border-radius: 10px; overflow: hidden;">
            <img src="{{ asset('image/' . $berita->image) }}" class="card-img-top img-fluid mx-auto" alt="{{ $berita->title }}" style="height: 400px; width: 100%; object-fit: cover;">
            
            <div class="card-body p-4" style="background-color: #f8f9fa;">
                <h1 class="card-title font-weight-bold mb-3" style="font-size: 2rem; color: #333;">{{ $berita->title }}</h1>
                <div class="text-muted mb-4" style="font-size: 0.9rem;">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                
                <p class="card-text text-center" style="line-height: 1.8; color: #555;">
                    {{ $berita->description }}
                </p>
                
                <div class="text-center mt-4">
                    <a href="/berita" class="btn btn-secondary" style="border-radius: 20px; padding: 10px 30px; font-weight: bold;">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>
</div>
