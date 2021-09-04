@extends('tampilan.utama')
@section('judul')
    Cast
@endsection

@section('isi')

<form action="/cast" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nama Cast</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                @error('nama_cast')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur Cast</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
                @error('umur_cast')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio Cast</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan bio">
                @error('bio_cast')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

@endsection