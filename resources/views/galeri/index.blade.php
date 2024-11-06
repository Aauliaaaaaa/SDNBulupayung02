@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/admin/galeris/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Filter Kategori -->
    <div class="my-3">
        <form action="{{ route('galeris.index') }}" method="GET">
            <div class="form-inline">
                <label for="category" class="mr-2">Filter Kategori:</label>
                <select name="category" id="category" class="form-control">
                    <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>Semua</option>
                    <option value="kegiatan" {{ request('category') == 'kegiatan' ? 'selected' : '' }}>Kegiatan Siswa</option>
                    <option value="lomba" {{ request('category') == 'lomba' ? 'selected' : '' }}>Lomba</option>
                </select>
                <button type="submit" class="btn btn-primary ml-2">Filter</button>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-border table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($galeri as $galeri)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $galeri->title }}</td>
                    <td>{{ $galeri->description }}</td>
                    <td>
                        <img src="/image/{{ $galeri->image }}" alt="{{ $galeri->title }}" class="img-fluid" width="90">
                    </td>
                    <td>{{ $galeri->category }}</td> 
                    <td>
                        <a href="{{ route('galeris.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('galeris.destroy', $galeri->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
