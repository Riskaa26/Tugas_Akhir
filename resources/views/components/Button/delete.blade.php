<form action="{{url($url, $nik)}}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini')">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
</form>