@extends('layouts.app')

@section('title', 'Data Jumlah')
    
@section('content')

<div class="container">
    <a href="/admin/jumlahs/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    </div>  
    @endif

    
    <div class="table-responsive">
        <table class="table table-border table-hover table-stiped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($jumlahs as $jumlah)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $jumlah->title }}</td>
                    <td>{{ $jumlah->description }}</td>
                    <td>
                        <img src="/image/{{ $jumlah->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href=" {{ route('jumlahs.edit', $jumlah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jumlahs.destroy', $jumlah->id) }}" method="POST">
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