@extends('tampilan.utama')
@section('judul')
    Cast {{$cast->id}}
@endsection

@section('isi')

<h2>Show Cast {{$cast->id}}</h2>
<p>Nama Cast : {{$cast->nama}}</p>
<p>Umur Cast : {{$cast->umur}}</p>
<p>Bio Cast  : {{$cast->bio}}</p>

@endsection
