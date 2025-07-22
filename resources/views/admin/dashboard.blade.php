@extends('layouts.app')

@section('title', 'Panel Admin')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Halo, Admin {{ Auth::user()->name }}</h1>
    <p class="text-gray-600">Selamat datang di Panel Admin. Di sini kamu bisa mengelola laporan dan proyek.</p>
</div>
@endsection
