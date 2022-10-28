@extends('layout.main')
@section('content')
    <div class="container mt-5">
      <div class="card-col d-flex flex-row gap-3" style="max-height: 500px">
        @foreach ($berita as $data)   
        <div class="card" style="width: 18rem;">
            <img src="gambar/{{ $data->gambar }}" class="card-img-top" style="height: 50%" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $data->judul }}</h5>
              <p class="card-text">{{ Str::substr($data->isi, 0, 100)  }}...</p>
              <a href="{{ route('home.show',$data->id) }}" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
@endsection
