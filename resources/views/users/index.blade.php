@extends('adminlte::page')

@section('title', 'Inventori | Home')

@section('content_header')
  <h1 class="m-0 text-dark">Data Users</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>

                @php
                    $no = 1;
                @endphp

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop
