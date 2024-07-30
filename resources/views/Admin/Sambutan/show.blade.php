<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Sambutan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('sambutan') }}">Data Sambutan</a></li>
                        <li class="breadcrumb-item active">Detail Sambutan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Sambutan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <div class="mb-3">
                            <img src="{{ url('public/uploads/sambutan/' . $sambutan->foto) }}"
                                class="img-fluid img-thumbnail" alt="Foto Sambutan" style="width: 200px; height: auto;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sambutan">Sambutan:</label>
                    <p class="form-control-static">{{ $sambutan->sambutan }}</p>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <p class="form-control-static">{{ $sambutan->nama }}</p>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <p class="form-control-static">{{ $sambutan->jabatan }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Additional fields or empty space -->
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-danger" onclick="window.location.href='{{ url('admin/sambutan') }}'">
            <i class="fa fa-times-circle mr-2"></i>Kembali
        </button>
    </div>
    </div>
</x-module.Admin>