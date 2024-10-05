@extends('layouts.app')

@section('title', 'Data Sambutan')
    
@section('content')

<div class="container">
    <a href="/sambutans" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sambutans.update', $sambutan->id) }}"  method="POST" enctype="multipart/form-data" >
                @method('PUT')
               @csrf 
               <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $sambutan->title }}">
               </div>
               @error('title')
               <small style="color: red">{{ $message }}</small>
               @enderror
               <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $sambutan->description }}</textarea>
               </div>
               @error('description')
               <small style="color: red">{{ $message }}</small>
               @enderror
               <img src="/image/{{ $sambutan->image }}" alt="" class="img-fluid">
               <div class="form-group">
                    <label for="">Galeri</label>
                    <input type="file" class="form-control" name="image">
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