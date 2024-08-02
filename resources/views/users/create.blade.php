@extends('adminlte::page')

@section('title', 'Inventori | Users Tambah')

@section('content_header')
  <h1 class="m-0 text-dark">Data Users</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="size: 20px; font-weight: bold">Tambah Data Users</h1>
        </div>

        <div class="card-body">

          <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name"class="form-control" placeholder="Masukkan Nama"
                value="{{ old('name') }}" required>
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                value="{{ old('email') }}" required>
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                value="{{ old('password') }}" required>
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
            <a href="{{ route('users.index') }}" class="btn btn-light float-right">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
