<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Selesai</h1>
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
                                    <!-- Optional header content can go here -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <style>
                                table#example1 th,
                                table#example1 td {
                                    text-align: center;
                                }

                                .btn-text-icon {
                                    display: inline-block;
                                    /* Menggunakan inline-block agar background sesuai dengan teks */
                                    vertical-align: middle;
                                    /* Menyamakan tinggi teks dengan ikon */
                                }

                                .btn-text-icon .btn {
                                    padding: 4px 8px;
                                    /* Atur padding agar tombol tidak terlalu kecil */
                                }
                            </style>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-weight: bolder">
                                        <!-- <td>No.</td>    -->
                                        <td>Tanggal</td>
                                        <td>NIK</td>
                                        <td>Nama</td>
                                        <td>Jenis Surat</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_permintaan_surat->sortByDesc('updated_at')->values() as $permintaan_surat)
                                        @if($permintaan_surat->status == 2 || $permintaan_surat->status == 3)
                                            <tr>
                                                <!-- <td>{{$loop->iteration}}</td> -->

                                                <td>{{ $permintaan_surat->created_at->translatedFormat('d F Y') }}</td>

                                                <td>{{ $permintaan_surat->dataPenduduk->nik }}</td>
                                                <td>{{ $permintaan_surat->dataPenduduk->nama }}</td>
                                                <td>{{ $permintaan_surat->jenis_surat }}</td>
                                                <td>
                                                    @if($permintaan_surat->status == 2)
                                                        <span class="badge badge-success">Diterima</span>
                                                    @else ($permintaan_surat->status == 3)
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($permintaan_surat->status == 2 )
                                                    
                                                    <div class="btn-group">
                                                    <a href="{{ url("admin/surat-selesai/$permintaan_surat->id") }}/cetak" class="btn btn-sm btn-primary">Cetak</a>

                                                        <!-- <form
                                                            action="{{ url('admin/surat-selesai/cetak', $permintaan_surat->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-primary">Cetak</button>
                                                        </form> -->
                                                    </div>
                                                    @else($permintaan_surat->status == 3)
                                                    <a href="{{ url('admin/surat-selesai/cetak', $permintaan_surat->id) }}" class="btn btn-sm btn-danger">Hapus</a>

                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
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