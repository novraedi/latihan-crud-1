@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <img src="../gambar/{{ $data->gambar }}" class="img-fluid" alt="...">
        <h1>{{ $data->judul }}</h1>
    </div>
@endsection