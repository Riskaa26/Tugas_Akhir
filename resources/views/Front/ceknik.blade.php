<x-frontNoFooter>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            .btn-icon {
                margin-right: 5px;
                /* Adjust the value as needed */
            }

            .label-icon {
                margin-right: 5px;
                /* Adjust the value as needed */
            }
        </style>
    </head>
    <div class="container">
        <div class="row mt-3">
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Input</h4>
                            </div>
                            <div class="card-body">
                                <div class="image mb-3">
                                    <img src="public/web-assets/img/icon6.png" style="height:200px;width:150px" alt="">
                                </div>
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{url('Pengajuan-Surat')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="jenis_surat" value="{{ $keperluan }}">
                                    <div class="form-group">
                                        <label for="nik">
                                            <i class="fas fa-id-card label-icon"></i>
                                            NIK (Nomor Induk Kependudukan)
                                        </label>
                                        <input type="text" name="nik_penduduk" class="form-control" id="nik"
                                            placeholder="Masukkan NIK Anda..." required>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary mt-3">
                                            <i class="fas fa-search btn-icon"></i>
                                            Cek NIK
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontNoFooter>