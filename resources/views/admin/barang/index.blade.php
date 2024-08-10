@extends('adminlte::page')

@section('title', 'Inventori | Home')

@section('plugins.Datatables', true)

@section('content_header')
  <h1 class="m-0 text-dark">Data Barang</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title" style="size: 20px; font-weight: bold">Daftar Barang</h1>
          <a href="{{ route('barang.create') }}" class="btn btn-primary float-right">Tambah Data</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered" id="tableBarang">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop
@push('js')
    <script type="text/javascript">
        $(function() {
            var dataTable = $('#tableBarang').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ route('get-barang') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true },
                    { data: 'nama_barang', name: 'nama_barang' },
                    { data: 'merk', name: 'merk' },
                    { data: 'tipe', name: 'tipe' },
                    { data: 'satuan', name: 'satuan' },
                ]
            });
            
        });
    </script>
@endpush