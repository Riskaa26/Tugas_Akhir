<x-module.Kepdes>
    <!-- Small Box (Stat card) -->
    <h1 class="mb-2 mt-4">Dashboard</h1>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 mb-4">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$data_penduduk}}</h3>
                    <p>Data Penduduk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('Kepdes/data-penduduk')}}" class="small-box-footer">
                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 mb-4">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$jumlah_laporan}}</h3>
                    <p>Laporan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <a href="{{url('Kepdes/laporan')}}" class="small-box-footer">
                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-widget">
                <div class="card-header">
                    <h4>Welcome Home!</h4>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center" style="height: 25vh;">
                    <img class="img-fluid pad" src="{{ url('public') }}/admin-assets/gambar/logo.png" alt="Logo" style="max-width: 10%; height: auto; margin-right: 50px;">
                    <div style="text-align: center;">
                        <h2>Halo, Kepala</h2>
                        <h4><p>Selamat Datang di Website Pelayanan Surat Desa Nusa Poring</p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.Kepdes>
