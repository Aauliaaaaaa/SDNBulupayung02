@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">
                    <strong>Berhasil!</strong>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" class="form-control" name="password" placeholder="Password Baru">
                    @error('password')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Ulangi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
                </div>
            </form>

            <a href="/admin/dashboard" class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>
</div>

@endsection
