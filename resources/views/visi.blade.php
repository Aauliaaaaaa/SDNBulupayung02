@extends('layouts.app')

@section('title', 'Data Visi')

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
            <form action="/admin/visi/{{ $visi->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Visi</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Sekolah" value="{{ $visi->name }}">
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $visi->description }}</textarea>
                    @error('description')
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
