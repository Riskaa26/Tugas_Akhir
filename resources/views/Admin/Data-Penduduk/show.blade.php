<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data Penduduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('data-penduduk') }}">Data Penduduk</a></li>
                        <li class="breadcrumb-item active">Detail Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Data Penduduk</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- Displaying fields in the left column -->
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <p>{{ $datapenduduk->nik }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <p>{{ $datapenduduk->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <p>{{ $datapenduduk->tempat_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <p>{{ $datapenduduk->tanggal_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <p>{{ $datapenduduk->jenis_kelamin }}</p>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <p>{{ $datapenduduk->alamat }}</p>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <p>{{ $datapenduduk->agama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <p>{{ $datapenduduk->pekerjaan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status_perkawinan">Status Perkawinan</label>
                        <p>{{ $datapenduduk->status_perkawinan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status_penduduk">Status Penduduk</label>
                        <p>{{ $datapenduduk->status_penduduk }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Displaying fields in the right column -->
                    <div class="form-group">
                        <label for="jalan">Jalan</label>
                        <p>{{ $datapenduduk->jalan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <p>{{ $datapenduduk->dusun }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <p>{{ $datapenduduk->rt }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <p>{{ $datapenduduk->rw }}</p>
                    </div>
                    <div class="form-group">
                        <label for="desa">Desa</label>
                        <p>{{ $datapenduduk->desa }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <p>{{ $datapenduduk->kecamatan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <p>{{ $datapenduduk->kota }}</p>
                    </div>
                    <div class="form-group">
                        <label for="no_kk">No KK</label>
                        <p>{{ $datapenduduk->no_kk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_di_kk">Pendidikan di KK</label>
                        <p>{{ $datapenduduk->pendidikan_di_kk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <p>{{ $datapenduduk->pendidikan_terakhir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_ditempuh">Pendidikan di Tempuh</label>
                        <p>{{ $datapenduduk->pendidikan_ditempuh }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status_dlm_keluarga">Status dalam Keluarga</label>
                        <p>{{ $datapenduduk->status_dlm_keluarga }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <p>{{ $datapenduduk->kewarganegaraan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <p>{{ $datapenduduk->nama_ayah }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <p>{{ $datapenduduk->nama_ibu }}</p>
                    </div>
                    <div class="btn-group float-right">
                        <button class="btn-sm btn btn-danger" onclick="window.location.href='{{ url('data-penduduk') }}'"><i class="fa fa-times-circle mr-2"></i>Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.Admin>
