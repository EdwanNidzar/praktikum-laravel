@extends('adminlte::page')

@section('title', 'Inventori | Barang Edit')

@section('content_header')
  <h1 class="m-0 text-dark">Data Barang</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="font-size: 20px; font-weight: bold">Edit Data Barang</h1>
        </div>

        <div class="card-body">

          <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="form-group col-md-6 col-sm-12">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang"
                  value="{{ old('nama_barang', $barang->nama_barang) }}" required>
                @error('nama_barang')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="merk">Merk</label>
                <input type="text" name="merk" class="form-control" placeholder="Masukkan Merk"
                  value="{{ old('merk', $barang->merk) }}" required>
                @error('merk')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-sm-12">
                <label for="tipe">Tipe</label>
                <input type="text" name="tipe" class="form-control" placeholder="Masukkan Tipe"
                  value="{{ old('tipe', $barang->tipe) }}" required>
                @error('tipe')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="satuan">Satuan</label>
                <input type="number" name="satuan" class="form-control" placeholder="Masukkan Satuan"
                  value="{{ old('satuan', $barang->satuan) }}" required>
                @error('satuan')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>
                <a href="{{ route('barang.index') }}" class="btn btn-light float-right">Kembali</a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@stop
