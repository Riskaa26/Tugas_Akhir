<x-module.Kepdes>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data Penduduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Kepdes/data-penduduk') }}">Data Penduduk</a></li>
                        <li class="breadcrumb-item active">Detail Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- View for showing data penduduk -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Data Penduduk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <p>{{ $penduduk->nik }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <p>{{ $penduduk->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <p>{{ $penduduk->tempat_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <p>{{ $penduduk->tanggal_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <p>{{ $penduduk->jenis_kelamin }}</p>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <p>{{ $penduduk->alamat }}</p>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <p>{{ $penduduk->agama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <p>{{ $penduduk->pekerjaan }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status Perkawinan</label>
                        <p>{{ $penduduk->status_perkawinan }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status Penduduk</label>
                        <p>{{ $penduduk->status_penduduk }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jalan">Jalan</label>
                        <p>{{ $penduduk->jalan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <p>{{ $penduduk->dusun }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <p>{{ $penduduk->rt }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <p>{{ $penduduk->rw }}</p>
                    </div>
                    <div class="form-group">
                        <label for="desa">Desa</label>
                        <p>{{ $penduduk->desa }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <p>{{ $penduduk->kecamatan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <p>{{ $penduduk->kota }}</p>
                    </div>
                    <div class="form-group">
                        <label for="no_kk">No KK</label>
                        <p>{{ $penduduk->no_kk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_di_kk">Pendidikan di KK</label>
                        <p>{{ $penduduk->pendidikan_di_kk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <p>{{ $penduduk->pendidikan_terakhir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_ditempuh">Pendidikan di Tempuh</label>
                        <p>{{ $penduduk->pendidikan_ditempuh }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status_dlm_keluarga">Status dalam Keluarga</label>
                        <p>{{ $penduduk->status_dlm_keluarga }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <p>{{ $penduduk->kewarganegaraan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <p>{{ $penduduk->nama_ayah }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <p>{{ $penduduk->nama_ibu }}</p>
                    </div>
                    <div class="btn-group float-right">
                        <button class="btn-sm btn btn-danger" onclick="window.location.href='{{ url('Kepdes/data-penduduk') }}'"><i class="fa fa-times-circle mr-2"></i>Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</x-module.Kepdes>
