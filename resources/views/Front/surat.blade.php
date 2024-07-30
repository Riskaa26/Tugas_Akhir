<x-frontNoFooter>
    <style>
        #services .service {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        #services .service img {
            max-height: 200px;
            max-width: 150px;
            margin-bottom: 15px;
            align-self: center;
        }

        #services .service h5 {
            margin: 15px 0;
            font-size: 18px;
        }

        #services .service a.btn {
            align-self: center;
            margin-top: 15px;
        }

        .row.g-4>[class*='col-'] {
            display: flex;
        }
    </style>

    <section id="services" class="text-center">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT KETERANGAN</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Keterangan')}}" class="btn btn-primary">buat surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT REKOMENDASI</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Rekomendasi')}}" class="btn btn-primary">buat surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT UNDANGAN</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Undangan')}}" class="btn btn-primary">buat surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT KETERANGAN DOMISILI</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Keterangan Domisili')}}" class="btn btn-primary">buat
                            surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT KETERANGAN PINDAH</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Keterangan Pindah')}}" class="btn btn-primary">buat
                            surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT KETERANGAN USAHA</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Keterangan Usaha')}}" class="btn btn-primary">buat
                            surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT IJIN USAHA </h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Pengantar SKCK')}}" class="btn btn-primary">buat
                            surat</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="service">
                        <img src="public/web-assets/img/icon6.png" alt="">
                        <h5>SURAT PENGANTAR SKCK</h5>
                        <a href="{{url('cek-nik?jenis_surat=Surat Ijin Usaha')}}" class="btn btn-primary">buat surat</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-frontNoFooter>