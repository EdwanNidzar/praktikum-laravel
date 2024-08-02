@extends('adminlte::page')

@section('title', 'Inventori | Edit User')

@section('content_header')
  <h1 class="m-0 text-dark">Edit User</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="size: 20px; font-weight: bold">Edit Data User</h1>
        </div>

        <div class="card-body">
          <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" placeholder="Masukkan Nama"
                value="{{ old('name', $user->name) }}" required>
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                value="{{ old('email', $user->email) }}" required>
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password (Leave blank if not changing)</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password_confirmation">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary float-right">Ubah</button>
            <a href="{{ route('users.index') }}" class="btn btn-light float-right">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
