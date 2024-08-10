@extends('adminlte::page')

@section('title', 'Inventori | Barang Detail')

@section('content_header')
  <h1 class="m-0 text-dark">Data Barang</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="font-size: 20px; font-weight: bold">Detail Data Barang</h1>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="form-group col-md-6 col-sm-12">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" readonly>
            </div>
            <div class="form-group col-md-6 col-sm-12">
              <label for="merk">Merk</label>
              <input type="text" name="merk" class="form-control" value="{{ $barang->merk }}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 col-sm-12">
              <label for="tipe">Tipe</label>
              <input type="text" name="tipe" class="form-control" value="{{ $barang->tipe }}" readonly>
            </div>
            <div class="form-group col-md-6 col-sm-12">
              <label for="satuan">Satuan</label>
              <input type="number" name="satuan" class="form-control" value="{{ $barang->satuan }}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="{{ route('barang.index') }}" class="btn btn-light float-right">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
