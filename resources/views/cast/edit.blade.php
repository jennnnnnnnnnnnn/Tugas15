@extends('tampilan.utama')
@section('judul')
    Cast {{$cast->id}}
@endsection

@section('isi')
<div>
        <h2>Edit Cast {{$cast->id}}</h2>
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="nama" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur</label>
                <input type="text" class="form-control" name="umur"  value="{{$cast->umur}}"  id="umur" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <input type="text" class="form-control" name="bio"  value="{{$cast->bio}}"  id="bio" placeholder="Masukkan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    @endsection