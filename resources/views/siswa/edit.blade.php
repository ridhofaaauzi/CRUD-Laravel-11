@extends('layout')
@section('content')
    <div>
        <h4>Edit Siswa</h4>
        <a href="{{ route('siswa.index') }}" class="btn btn-warning btn-sm mb-2">kembali</a>
    </div>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="nis">Nis</label>
            <input type="number" name="nis" class="form-control" value="{{ $siswa->nis }}" id="nis">
        </div>
        <div class="mb-2">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" id="nama">
        </div>
        <div class="mb-2">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}" id="alamat">
        </div>
        <div class="mb-2">
            <label for="no_hp">No HP</label>
            <input type="number" name="no_hp" class="form-control" value="{{ $siswa->no_hp }}" id="no_hp">
        </div>
        <div class="mb-2">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $siswa->jenis_kelamin }}"
                id="jenis_kelamin">
        </div>
        <div class="mb-2">
            <label for="hobi">Hobi</label>
            <input type="text" name="hobi" class="form-control" value="{{ $siswa->hobi }}" id="hobi">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
