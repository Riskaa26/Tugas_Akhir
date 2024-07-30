<x-module.Kepdes>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Penduduk</h1>
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
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="font-weight:bolder">
                                        <td>N0</td>
                                        <td>AKSI</td>
                                        <td>NIK</td>
                                        <td>NAMA</td>
                                        <td>TEMPAT/TANGGAL LAHIR</td>
                                        <td>JENIS KELAMIN</td>
                                        <td>AGAMA</td>
                                        <td>ALAMAT</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_penduduk as $data_penduduk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group ml-2">
                                                <a href="{{ url('Kepdes/data-penduduk', $data_penduduk->nik) }}"
                                                    class="btn btn-sm btn-warning btn-mat">
                                                    <i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                        <td>{{ $data_penduduk->nik }}</td>
                                        <td>{{ $data_penduduk->nama }}</td>
                                        <td>{{ $data_penduduk->tempat_lahir }}, {{ $data_penduduk->tanggal_lahir }}</td>
                                        <td>{{ $data_penduduk->jenis_kelamin }}</td>
                                        <td>{{ $data_penduduk->agama }}</td>
                                        <td>{{ $data_penduduk->alamat }}</td>
                                    </tr>
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
</x-module.Kepdes>