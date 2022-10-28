@extends('layout.main')
@section('content')
    <h1>Halaman Create Data</h1>
    <form action="{{ route('berita.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
            <textarea class="form-control" name="isi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input class="form-control" name="gambar" type="file" id="formFile">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection