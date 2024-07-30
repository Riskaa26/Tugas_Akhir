<x-frontNoFooter>
    <div class="container py-5">
        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <i class='bx bxs-envelope' style="font-weight:bold; color:black; font-size:15px"></i><spanclass="text-bold" style="font-weight:bold; color:black; font-size:15px"> INFORMASI SURAT</span>
                    </div>
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-bold" style="font-weight:bold; color:black; font-size:15px">
                                     KETERANGAN
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-bold" style="font-weight:bold; color:black; font-size:15px">
                                    NOMOR SURAT:-
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(isset($dataPenduduk))
                            <form action="{{ url('buat-surat') }}" method="post">
                                @csrf
                                <input type="hidden" name="nik_penduduk" value="{{ $dataPenduduk->nik }}">
                                <input type="hidden" name="jenis_surat" value="{{ $keperluan }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Nama Lengkap</label>
                                            <input type="text" class="form-control" value="{{ $dataPenduduk->nama }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Jenis Kelamin</label>
                                            <input type="text" class="form-control"
                                                value="{{ $dataPenduduk->jenis_kelamin }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Tempat, Tgl Lahir</label>
                                            <input type="text" class="form-control"
                                                value="{{ $dataPenduduk->tempat_lahir }}, {{ $dataPenduduk->tanggal_lahir }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Agama</label>
                                            <input type="text" class="form-control" value="{{ $dataPenduduk->agama }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Pekerjaan</label>
                                            <input type="text" class="form-control" value="{{ $dataPenduduk->pekerjaan }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">NIK</label>
                                            <input type="text" class="form-control" value="{{ $dataPenduduk->nik }}"
                                                name="nik_penduduk" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Alamat</label>
                                            <textarea class="form-control" disabled>{{ $dataPenduduk->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <label class="text-dark">Kewarganegaraan</label>
                                            <input type="text" class="form-control"
                                                value="{{ $dataPenduduk->kewarganegaraan }}" disabled>
                                        </div>
                                    </div>
                                    <hr class="mt-3" style="color: black">
                                    <div class="col-md-12">
                                        <div class="form-group py-2">
                                            <label class="text-bold" style="font-weight:bold; color:black; font-size:15px">KEPERLUAN SURAT</label>
                                            <input type="text" class="form-control" value="{{ $keperluan }}"
                                                name="jenis_surat" disabled>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3 float-end">Submit</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontNoFooter>