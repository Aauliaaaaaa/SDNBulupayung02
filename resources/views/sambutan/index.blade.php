@extends('layouts.app')

@section('title', 'Data Sambutan')
    
@section('content')

<div class="container">
    <a href="/sambutans/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                @foreach ($sambutans as $sambutan)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $sambutan->title }}</td>
                    <td>{{ $sambutan->description }}</td>
                    <td>
                        <img src="/image/{{ $sambutan->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href=" {{ route('sambutans.edit', $sambutan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sambutans.destroy', $sambutan->id) }}" method="POST">
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