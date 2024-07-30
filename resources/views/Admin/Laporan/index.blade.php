<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <h1 class="m-0">Laporan Surat</h1>
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

                                       
                                        <td>Tanggal</td>
                                        <td>No.Surat</td>
                                        <td>Nama</td>
                                        <td>Jenis Surat</td>
                                        <td>Alamat</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_permintaan_surat->sortByDesc('updated_at')->values() as $permintaan_surat)
                                        @if($permintaan_surat->status == 2 || $permintaan_surat->status == 3)
                                            <tr>

                                                
                                                <td>{{ $permintaan_surat->created_at->translatedFormat('d F Y') }}</td>
                                                <td>{{ $permintaan_surat->no_surat }}</td>
                                                <td>{{ $permintaan_surat->dataPenduduk->nama }}</td>
                                                <td>{{ $permintaan_surat->jenis_surat }}</td>
                                                <td>{{ $permintaan_surat->dataPenduduk->alamat}}</td>
                                                
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