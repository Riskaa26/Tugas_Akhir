<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Visi Misi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('visimisi') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Data Visi Misi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Form untuk tambah data aparatur desa -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Visi Misi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="KelolaInformasiForm" action="{{ url('admin/visimisi') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tabel untuk memasukkan data aparat desa -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Desa</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="file" name="foto" class="form-control" required>
                                    </td>
                                    <td>
                                        <input type="text" name="desa" class="form-control" placeholder="Desa" required>
                                    </td>
                                    <td>
                                        <input type="text" name="visi" class="form-control" placeholder="Visi" required>
                                    </td>
                                    <td>
                                        <input type="text" name="Misi" class="form-control" placeholder="Misi" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>    
</x-module.Admin>
