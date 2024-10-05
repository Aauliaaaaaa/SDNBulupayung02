@extends('layouts.app')

@section('title', 'Data Tentang')
    
@section('content')

<div class="container">
   
    <div class="row">
        <div class="col-md-12">
               @if ($message = Session::get('message'))
               <div class="alert alert-success">
               <strong>Berhasil</strong>
               <p>{{ $message }}</p>
               </div>
          </div>  
          @endif
            <form action="/admin/about/{{ $about->id }}"  method="POST" enctype="multipart/form-data" >
                @method('PUT')
               @csrf 
               <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $about->judul }}">
               </div>
               @error('judul')
               <small style="color: red">{{ $message }}</small>
               @enderror
               <div class="form-group">
                    <label for="">Subjudul</label>
                    <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="Subjudul">{{ $about->subjudul }}</textarea>
               </div>
               @error('description')
               <small style="color: red">{{ $message }}</small>
               @enderror
               <div class="form-group">
                    <label for="">Deskripsi 1</label>
                    <textarea name="deskripsi_1" id="" cols="30" rows="10" class="form-control" placeholder="deskripsi_1">{{ $about->deskripsi_1 }}</textarea>
                </div>
                @error('deskripsi_1')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 2</label>
                    <textarea name="deskripsi_2" id="" cols="30" rows="10" class="form-control" placeholder="deskripsi_2">{{ $about->deskripsi_2 }}</textarea>
                </div>
                @error('deskripsi_2')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 1</label>
                    <input type="kelebiahan_1" class="form-control" name="kelebiahan_1" placeholder="kelebiahan_1" value="{{ $about->kelebiahan_1 }}">
                </div>
                @error('kelebiahan_1')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 2</label>
                    <input type="kelebiahan_2" class="form-control" name="kelebiahan_2" placeholder="kelebiahan_2" value="{{ $about->kelebiahan_2 }}">
                </div>
                @error('kelebiahan_2')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 3</label>
                    <input type="kelebiahan_3" class="form-control" name="kelebiahan_3" placeholder="kelebiahan_3" value="{{ $about->kelebiahan_3 }}">
                </div>
                @error('kelebiahan_3')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 4</label>
                    <input type="kelebiahan_4" class="form-control" name="kelebiahan_4" placeholder="kelebiahan_4" value="{{ $about->kelebiahan_4 }}">
                </div>
                @error('kelebiahan_4')
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