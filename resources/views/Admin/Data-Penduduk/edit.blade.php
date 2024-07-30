<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Penduduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('data-penduduk') }}">Data Penduduk</a></li>
                        <li class="breadcrumb-item active">Edit Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Form for editing data penduduk -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Penduduk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="EditInformasiForm" action="{{ url('data-penduduk/' . $penduduk->nik) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" value="{{ $penduduk->nik }}" placeholder="NIK" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $penduduk->nama }}" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempatLahir" value="{{ $penduduk->tempat_lahir }}" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggalLahir" value="{{ $penduduk->tanggal_lahir }}" placeholder="Tanggal Lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                <option value="">--Pilih jenis kelamin--</option>
                                <option value="Laki-Laki" {{ $penduduk->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ $penduduk->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" value="{{ $penduduk->alamat }}" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input name="agama" type="text" class="form-control" id="agama" value="{{ $penduduk->agama }}" placeholder="Agama" required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" value="{{ $penduduk->pekerjaan }}" placeholder="Pekerjaan" required>
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="form-control" name="status_perkawinan" id="status_perkawinan" required>
                                <option value="">--Pilih Status Perkawinan--</option>
                                <option value="Kawin" {{ $penduduk->status_perkawinan == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                <option value="Belum Kawin" {{ $penduduk->status_perkawinan == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Penduduk</label>
                            <select class="form-control" name="status_penduduk" id="status_penduduk" required>
                                <option value="">--Pilih Status Penduduk--</option>
                                <option value="Penduduk Tetap" {{ $penduduk->status_penduduk == 'Penduduk Tetap' ? 'selected' : '' }}>Penduduk Tetap</option>
                                <option value="Pendatang" {{ $penduduk->status_penduduk == 'Pendatang' ? 'selected' : '' }}>Pendatang</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jalan">Jalan</label>
                            <input type="text" name="jalan" class="form-control" id="jalan" value="{{ $penduduk->jalan }}" placeholder="Jalan" required>
                        </div>
                        <div class="form-group">
                            <label for="dusun">Dusun</label>
                            <input type="text" name="dusun" class="form-control" id="dusun" value="{{ $penduduk->dusun }}" placeholder="Dusun" required>
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" name="rt" class="form-control" id="rt" value="{{ $penduduk->rt }}" placeholder="RT" required>
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" name="rw" class="form-control" id="rw" value="{{ $penduduk->rw }}" placeholder="RW" required>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <input type="text" name="desa" class="form-control" id="desa" value="{{ $penduduk->desa }}" placeholder="Desa" required>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="{{ $penduduk->kecamatan }}" placeholder="Kecamatan" required>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="kota" value="{{ $penduduk->kota }}" placeholder="Kota" required>
                        </div>
                        <div class="form-group">
                            <label for="no_kk">No KK</label>
                            <input type="text" name="no_kk" class="form-control" id="no_kk" value="{{ $penduduk->no_kk }}" placeholder="No KK" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_di_kk">Pendidikan di KK</label>
                            <input type="text" name="pendidikan_di_kk" class="form-control" id="pendidikan_di_kk" value="{{ $penduduk->pendidikan_di_kk }}" placeholder="Pendidikan di KK" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir" value="{{ $penduduk->pendidikan_terakhir }}" placeholder="Pendidikan Terakhir" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_ditempuh">Pendidikan di Tempuh</label>
                            <input type="text" name="pendidikan_ditempuh" class="form-control" id="pendidikan_ditempuh" value="{{ $penduduk->pendidikan_ditempuh }}" placeholder="Pendidikan di Tempuh" required>
                        </div>
                        <div class="form-group">
                            <label for="status_dlm_keluarga">Status dlm Keluarga</label>
                            <input type="text" name="status_dlm_keluarga" class="form-control" id="status_dlm_keluarga" value="{{ $penduduk->status_dlm_keluarga }}" placeholder="Status dlm Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" value="{{ $penduduk->kewarganegaraan }}" placeholder="Kewarganegaraan" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="{{ $penduduk->nama_ayah }}" placeholder="Nama Ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="{{ $penduduk->nama_ibu }}" placeholder="Nama Ibu" required>
                        </div>
                       
                        <div class="btn-group float-right">
                            <button type="submit" class="btn-sm btn btn-success mr-2"><i class="fas fa-save mr-2"></i>Update</button>
                            <button type="reset" class="btn-sm btn btn-danger" onclick="window.location.href='{{ url('data-penduduk') }}'"><i class="fa fa-times-circle mr-2"></i>Batal</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>

    <script>
        document.getElementById('EditInformasiForm').addEventListener('submit', function(event) {
            let isValid = true;
            const fields = [
                'nik', 'nama', 'jenis_kelamin', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'agama', 
                'pekerjaan', 'status_perkawinan', 'status_penduduk', 'jalan', 'dusun', 'rt', 'rw', 
                'desa', 'kecamatan', 'kota', 'no_kk', 'pendidikan_di_kk', 'pendidikan_terakhir', 
                'pendidikan_ditempuh', 'status_dlm_keluarga', 'kewarganegaraan', 'nama_ayah', 'nama_ibu'
            ];

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
