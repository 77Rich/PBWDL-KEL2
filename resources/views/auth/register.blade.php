@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
    <h2>Buat Akun</h2>

    <form action="/register" method="POST">
        @csrf

        <div class="field">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="field">
            <label for="password_confirmation">Ulangi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="btn">Daftar</button>
    </form>

    <p class="link">Sudah punya akun? <a href="/login">Login di sini</a></p>
@endsection