<x-module.Admin>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permintaan Surat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Konfirmasi Surat Permintaan</h5>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="suratForm" action="{{url('permintaan-surat', $permintaansurat->id)}}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tanda Tangan</label>
                                                <select name="ttd_kepdes" class="form-control">
                                                    <option value=""> Pilih Tanda Tangan</option>
                                                    <option value="Samsyudin">Samsyudin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Nomor Surat</label>
                                                <input type="text" name="no_surat" class="form-control" id="tanggal"
                                                    placeholder="Masukan Nomor Surat" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <span class="float-right text-bold " style="font-size:12px"><i
                                                    class="fas fa-info"></i> Informasi Penduduk </span>
                                            <div class="my-custom-hr"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Nama Lengkap</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->nama }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Jenis Kelamin</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->jenis_kelamin }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Tempat, Tgl Lahir</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->tempat_lahir }}, {{ $dataPenduduk->tanggal_lahir }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Agama</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->agama }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Pekerjaan</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->pekerjaan }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">NIK</label>
                                                <input type="text" class="form-control" value="{{ $dataPenduduk->nik }}"
                                                    name="nik_penduduk" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Alamat</label>
                                                <textarea class="form-control"
                                                    disabled>{{ $dataPenduduk->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Kewarganegaraan</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dataPenduduk->kewarganegaraan }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <span class="float-right text-bold " style="font-size:12px"><i
                                                    class="fas fa-info"></i> Informasi Surat </span>
                                            <div class="my-custom-hr"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-bold"
                                                    style="font-weight:bold; color:black; font-size:15px">KEPERLUAN
                                                    SURAT</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $permintaansurat->jenis_surat }}" name="jenis_surat"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group float-right">
                                        <button class="btn-sm btn btn-success mr-2" name="status" value="2"><i
                                                class="fas fa-check mr-2"></i> Terima</button>
                                        <button class="btn-sm btn btn-danger" name="status" value="3"><i
                                                class="fa fa-times-circle mr-2"></i>Tolak</button>
                                        <!-- <button type="submit" class="btn-sm btn btn-success mr-2"><i
                                                class="fas fa-user-plus mr-2"></i>Simpan</button>
                                        <button type="reset" class="btn-sm btn btn-danger"
                                            onclick="window.location.href='{{url('permintaan-surat')}}'"><i
                                                class="fa fa-times-circle mr-2"></i>Batal</button> -->
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
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
    <style>
    .my-custom-hr {
        border: 1px solid #ddd;
        margin: 20px 0;
        width: 100%;
        max-width: 100%;
        /* Menghindari overflow jika kontainer lebih kecil dari 100% */
    }
    </style>
</x-module.Admin>