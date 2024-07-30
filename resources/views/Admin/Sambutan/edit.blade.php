<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Sambutan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Sambutan') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Data Sambutan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Sambutan</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/sambutan', $sambutan->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Method spoofing to PUT -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $sambutan->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ $sambutan->jabatan }}" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('admin/sambutan') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-module.Admin>
