@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>

    <div class="success">
        Halo, {{ auth()->user()->name }}! Kamu sudah login.
    </div>

    <p>Email akun: {{ auth()->user()->email }}</p>
@endsection