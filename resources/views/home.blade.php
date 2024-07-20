@extends('adminlte::page')

@section('title', 'Inventori | Home')

@section('content_header')
  <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <p>Selamat Datang {{ Auth::user()->name }}</p>
        </div>
      </div>
    </div>
  </div>
@stop
