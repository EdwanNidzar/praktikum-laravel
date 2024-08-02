@extends('adminlte::page')

@section('title', 'Inventori | Users Detail')

@section('content_header')
  <h1 class="m-0 text-dark">Detail User</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="size: 20px; font-weight: bold">Detail Data User</h1>
        </div>

        <div class="card-body">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
          </div>
          <a href="{{ route('users.index') }}" class="btn btn-light float-right">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@stop
0