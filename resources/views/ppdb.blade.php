@extends('layouts.app')

@section('title', 'Data Ppdb')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="/admin/ppdb/{{ $ppdb->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Sekolah" value="{{ $ppdb->name }}">
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <img src="/image/{{ $ppdb->logo }}" alt="" class="img-fluid">
                <div class="form-group">
                     <label for="">Galeri</label>
                     <input type="file" class="form-control" name="logo">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
