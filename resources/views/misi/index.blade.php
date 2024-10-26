@extends('layouts.app')

@section('title', 'Data Misi')
    
@section('content')

<div class="container">
    <a href="{{ route('misis.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($misis as $misi)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $misi->description }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ route('misis.edit', $misi->id) }}" class="btn btn-warning">Edit</a>

                        {{-- Form Hapus --}}
                        <form action="{{ route('misis.destroy', $misi->id) }}" method="POST" style="display: inline-block;">
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
