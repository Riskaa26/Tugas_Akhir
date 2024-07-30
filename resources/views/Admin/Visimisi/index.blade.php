<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Visi Misi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Visimisi') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Visi Misi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Table to display data -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-right">
                            <a href="{{ url('admin/visimisi/create') }}" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i> Tambah Data </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-weight:bolder">
                                        <td class="text-center">No</td>
                                        <td class="text-center">Aksi</td>
                                        <td class="text-center">Foto</td>
                                        <td class="text-center">desa</td>
                                        <td class="text-center">Visi</td>
                                        <td class="text-center">Misi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_visimisi as $index => $visimisi)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">
                                        <div class="btn-group">
                                                <a href="{{ route('visimisi.show', $visimisi->id) }}" class="btn btn-info btn-sm btn-dark btn-mat" title="Show">
                                                    <i class="fas fa-info"></i>
                                                </a>
                                                <a href="{{ route('visimisi.edit', $visimisi->id) }}" class="btn btn-warning btn-sm " title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('visimisi.destroy', $visimisi->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <!-- Add actions like edit and delete if needed -->
                                        </td>
                                        <td class="text-center"><img src="{{ url('public/uploads/visimisi/' . $visimisi->foto) }}" width="50"></td>
                                        <td class="text-center">{{ $visimisi->desa }}</td>
                                        <td class="text-center">{{ $visimisi->visi}}</td>
                                        <td class="text-center">{{ $visimisi->misi}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
</x-module.Admin>
