@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    <form action="/login" method="POST">
        @csrf

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

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="link">Belum punya akun? <a href="/register">Daftar di sini</a></p>
@endsection