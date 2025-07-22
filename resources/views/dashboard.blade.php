@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-2xl font-bold">Selamat datang, {{ Auth::user()->name }}</h1>
        <p class="mt-2 text-gray-600">Role: <strong>{{ Auth::user()->role }}</strong></p>
    </div>
@endsection
