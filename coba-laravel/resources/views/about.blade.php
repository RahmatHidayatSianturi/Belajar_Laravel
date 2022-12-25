@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img style="border-radius: 10px" src="img/{{ $image }}" alt="{{ $name }}" width="140" height="160" class="img-thumbnile rounded-circle">
    <br>
    <br>
    <div class="btn btn-primary"><a style="color: white; text-decoration: none;" href="/">Home</a></div>
@endsection
