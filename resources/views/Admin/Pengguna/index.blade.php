<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Pengguna') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-left">
                            <a href="{{ url('admin/pengguna/create') }}" class="btn btn-dark btn-sm"><i
                                    class="fas fa-plus"></i> Tambah Data </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-weight:bolder">
                                        <td class="text-center">No.</td>
                                        <td class="text-center">Aksi</td>
                                        <td class="text-center">Nama</td>
                                        <td class="text-center">Foto</td>
                                        <td class="text-center">Username</td>
                                        <td class="text-center">Email</td>
                                        <td class="text-center">Tipe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pengguna as $index => $pengguna)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('pengguna.show', $pengguna->id) }}"
                                                    class="btn btn-info btn-sm btn-dark btn-mat" title="Show">
                                                    <i class="fas fa-info"></i>
                                                </a>
                                                <a href="{{ route('pengguna.edit', $pengguna->id) }}"
                                                    class="btn btn-warning btn-sm" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('pengguna.destroy', $pengguna->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                        onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $pengguna->name }}</td>
                                        <td class="text-center"><img
                                                src="{{ url('public/uploads/pengguna/' . $pengguna->foto) }}"
                                                width="50" alt="Foto Aparat"></td>
                                        <td>{{ $pengguna->username }}</td>
                                        <td class="text-center">{{ $pengguna->email }}</td>
                                        <td class="text-center">{{ $pengguna->type }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-module.Admin>