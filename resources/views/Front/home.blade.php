<x-front>
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h2 class="text-white text-uppercase">SELAMAT DATANG</h2>
                        <h2 class="text-white text-uppercase">DI SISTEM INFORMASI PELAYANAN SURAT</h2>
                        <h2 class="display-3 my-4">DESA NUSA PORING</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Sambutan Kepala Desa</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 ">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="info-box">
                                <div class="ms-4">
                                    <h2>{{$sambutan->nama}}</h2>
                                    <h4>{{ $sambutan->jabatan }}</h4>
                                    <p style="text-align: justify;">{{ $sambutan->sambutan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{url('public/uploads/sambutan')}}/{{$sambutan->foto}}" alt="">
                            <div class="social-icons"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>SIPSDES NP</h1>
                        <p class="mx-auto">Merupakan Sistem Informasi Pelayanan Surat Desa Nusa Poring
                            berbasis website digunakan untuk mempermudah staff desa mengelola surat masuk dan surat
                            keluar
                            serta memudahkan masyarakat untuk membuat surat secara online</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{'public/web-assets'}}/img/icon1.png" alt="">
                        <h5>DESA NUSA PORING</h5>
                        <p>Desa Nusa Poring merupakan salah satu Desa yang terletak di Kecamatan Menukung, Kabupaten
                            Melawi, Provinsi Kalimantan Barat, Indonesia.
                            Desa nusa poring terbentuk dari pemekaran dari desa Mawang Mentatai pada tahun 2007 dan
                            terdiri dari 5 Dusun yaitu Dusun Nusa Poring,
                            Dusun Mengkilau, Dusun Sekujang, Dusun Guhung Bajang dan Dusun Nanga Dawai.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{'public/web-assets'}}/img/icon2.png" alt="">
                        <h5>VISI</h5>
                        <p>Dengan visi menjadi Desa yang sejahtera, berdaya saing, dan berbudaya, dengan masyarakat yang
                            harmonis dan berkembang secara berkelanjutan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{'public/web-assets'}}/img/icon3.png" alt="">
                        <h5>MISI</h5>
                        <p>
                        <p>1. Meningkatkan kesejahteraan masyarakat melalui pengembangan ekonomi lokal yang
                            berkelanjutan.</p>
                        <p>2. Memperkuat infrastruktur dan akses layanan dasar seperti pendidikan, kesehatan, dan
                            sanitasi.</p>
                        <p>3. Melestarikan dan mempromosikan kekayaan budaya dan alam Desa.</p>
                        <p>4. Mendorong partisipasi aktif masyarakat dalam proses pembangunan dan pengambilan keputusan.
                        </p>
                        <p>5. Mengembangkan potensi sumber daya manusia melalui pendidikan, pelatihan, dan pengembangan
                            keterampilan.</p>
                    </div>
                </div>
            </div>
    </section>


    <section id="milestone">
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Aparat Pemerintah Desa</h1>
                        <p class="mx-auto"></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{ url('public')}}/{{ $kepalaDesa->foto }}" alt="">
                            <div class="social-icons">
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <h5>{{$kepalaDesa->nama}}</h5>
                        <p>{{ $kepalaDesa->jabatan }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                        </div>
                    </div>
                </div>
                @foreach ($aparat as $aparat)
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{url('public')}}/{{$aparat->foto}}" alt="">
                            <div class="social-icons">
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <h5>{{$aparat->nama}}</h5>
                        <p>{{$aparat->jabatan}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</x-front>