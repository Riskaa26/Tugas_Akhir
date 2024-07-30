<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Aparat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('aparat') }}">Data Aparat</a></li>
                        <li class="breadcrumb-item active">Edit Aparat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Form for editing aparat -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Aparat</h3>
        </div>
        <!-- form start -->
        <form id="EditAparatForm" action="{{ url('admin/aparat-desa', $aparat->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $aparat->nama }}"
                                placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan"
                                value="{{ $aparat->jabatan }}" placeholder="Jabatan" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="foto">
                            <p class="mt-2">Foto saat ini:</p>
                            <img src="{{ url('public/uploads/aparat/' . $aparat->foto) }}" width="100"
                                alt="Foto saat ini">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save mr-2"></i>Update
                </button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='{{ url('admin/aparat-desa') }}'">
                    <i class="fa fa-times-circle mr-2"></i>Batal
                </button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('EditAparatForm').addEventListener('submit', function(event) {
            let isValid = true;
            const fields = ['nama', 'jabatan'];

            fields.forEach(function(field) {
                const input = document.getElementById(field);
                if (!input.value) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
                alert("Harap isi semua data yang diperlukan.");
            }
        });
    </script>
</x-module.Admin>
