@php
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Data_Barang.xls");
@endphp


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>

  <h2 style="text-align: center">Data Barang</h2>
  <hr>

  <table>
    <tr>
      <th>NO</th>
      <th>Nama Barang</th>
      <th>Merk</th>
      <th>Tipe</th>
      <th>Satuan</th>
    </tr>

    @foreach ($barang as $b)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->merk }}</td>
        <td>{{ $b->tipe }}</td>
        <td>{{ $b->satuan }}</td>
      </tr>
    @endforeach

  </table>

</body>

</html>​
