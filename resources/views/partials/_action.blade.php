<div class="btn-group" role="group">
  <form action="{{ $delete_url }}" method="POST">
    @method('DELETE')
    @csrf
    <a href="{{ $show_url }}" class="btn btn-sm btn-info"><i class="fa fa-info"></i> Detail</a>
    <a href="{{ $edit_url }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('yakin ingin hapus ?')">
      <i class="fa fa-trash"> Hapus</i>
    </button>
  </form>
</div>
