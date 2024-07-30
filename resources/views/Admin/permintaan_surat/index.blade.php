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
                            </style>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-weight:bolder">
                                        <td>NO</td>
                                        <td>Tanggal</td>
                                        <td>NIK</td>
                                        <td>Nama</td>
                                        <td>Jenis Surat</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($list_permintaan_surat as $permintaan_surat)
                                    @if($permintaan_surat->status == 1)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $permintaan_surat->created_at->translatedFormat('d F Y') }}</td>

                                        @if($permintaan_surat->dataPenduduk)
                                        <td>{{ $permintaan_surat->dataPenduduk->nik }}</td>
                                        <td>{{ $permintaan_surat->dataPenduduk->nama }}</td>
                                        @else
                                        <td colspan="2">Data tidak ditemukan</td>
                                        @endif

                                        <td>{{ $permintaan_surat->jenis_surat }}</td>
                                        <td>
                                            @if($permintaan_surat->status == 1)
                                            <span class="badge badge-warning">Surat Baru</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/permintaan-surat', $permintaan_surat->id) }}"
                                                    class="btn btn-sm btn-success">Konfirmasi</a>
                                            </div>
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
