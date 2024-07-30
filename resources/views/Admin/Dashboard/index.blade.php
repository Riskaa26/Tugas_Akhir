<x-module.admin>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- Breadcrumb dapat ditempatkan di sini -->
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $jumlah_penduduk }}</h3>
              <p>Data Penduduk</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{url('data-penduduk')}}" class="small-box-footer">
              Lihat Detail <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $jumlah_permintaan_surat }}</h3>
              <p>Permintaan Surat</p>
            </div>
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <a href="{{url('permintaan-surat')}}" class="small-box-footer">
              Lihat Detail <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $permintaan_surat }}</h3>
              <p>Surat Selesai</p>
            </div>
            <div class="icon">
              <i class="fas fa-envelope-open-text"></i>
            </div>
            <a href="{{url('surat-selesai')}}" class="small-box-footer">
              Lihat Detail <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-md-12">
      <div class="card card-widget">
        <div class="card-header">
          <h4>Welcome Home!</h4>
        </div>

        <div class="card-body" style="display: flex; justify-content: center; align-items: center; height: 25vh;">
          <img class="img-fluid pad" src="{{ url('public') }}/admin-assets/gambar/logo.png" alt="Logo" style="max-width: 10%; height: auto; margin-right: 50px;">
          <div style="text-align: center;">
            <h2>Halo, Administrator</h2>
            <h4><p>Selamat Datang di Website Pelayanan Surat Desa Nusa Poring</p></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-module.admin>
