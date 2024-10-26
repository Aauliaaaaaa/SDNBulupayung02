@extends('layouts.app')

@section('title', 'Data Sambutan')

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
            <form action="/admin/sambutan/{{ $sambutan->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Sekolah</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Sekolah" value="{{ $sambutan->name }}">
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $sambutan->description }}</textarea>
                    @error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <img src="/image/{{ $sambutan->logo }}" alt="" class="img-fluid">
                    <div class="form-group">
                    <label for="">Galeri</label>
                    <input type="file" class="form-control" name="logo">
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
