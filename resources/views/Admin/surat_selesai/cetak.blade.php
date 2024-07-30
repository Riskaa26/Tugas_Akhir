<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Undangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 21cm;
            min-height: 29.7cm;
            margin: auto;
            padding: 20px;
            border: 1px solid #000;
        }

        header {
            text-align: center;
        }

        #img {
            float: left;
            width: 20%;
            text-align: center;
        }

        #text-header {
            float: right;
            width: 75%;
        }

        #text-header h3,
        #text-header h1,
        #text-header h6,
        #text-header h5 {
            margin: 0;
            padding: 0;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        #alamat {
            margin-top: 20px;
        }

        #lampiran {
            float: left;
            width: 50%;
        }

        #tgl-srt {
            float: right;
            width: 50%;
            text-align: right;
        }

        #alamat-tujuan {
            margin-top: 20px;
            text-align: left;
        }

        #pembuka {
            margin-top: 40px;
            text-align: justify;
        }

        #tempat-tgl {
            margin-top: 20px;
            margin-left: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 5px;
        }

        #penutup {
            margin-top: 40px;
            text-align: justify;
        }

        #ttd {
            margin-top: 60px;
            text-align: right;
        }

        #ttd p {
            margin: 0;
        }

        #nama-camat {
            margin-top: 80px;
            text-align: right;
        }

        .garis1 {
            border-top: 3px solid black;
            height: 2px;
            border-bottom: 1px solid black;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="clearfix">
            <div id="img">
                <img id="logo" src="{{'public/admin-assets'}}/img/logo.jpg" alt="Logo" width="140" height="160" />
            </div>
            <div id="text-header">
                <h3 class="kablogo">PEMERINTAH KABUPATEN MELAWI</h3>
                <h1 class="keclogo"><strong>KECAMATAN MENUKUNG</strong></h1>
                <h6 class="alamatlogo">Jl. Nusa Poring, No. 68, Telepon/Faximile (0298) 523024</h6>
                <h5 class="kodeposlogo"><strong>DESA NUSA PORING</strong></h5>
            </div>
        </header>
        <hr class="garis1" />
        <div id="alamat" class="clearfix">
            <div id="lampiran">
                Nomor : {{$permintaan_surat->no_surat}} <br />
                Lampiran : - <br />
                Perihal : Undangan
            </div>
            <div id="tgl-srt">
                <p id="tls">Nusa Poring, {{date("d-M-Y")}}</p>
                <p id="alamat-tujuan">
                    Kepada Yth.:<br />
                    Kepala Desa<br />
                    se - Kecamatan Menukung
                </p>
            </div>
        </div>
        <div id="pembuka">
            Menindak lanjuti surat dari Sekretariat Daerah Kabupaten Melawi Nomor : 005/001819/2018 perihal Peraturan Baru mengenai Badan Permusyawaratan Desa (BPD) berdasarkan Perda Nomor 4 Tahun 2018 dan Perbup Nomor 21 Tahun 2018 serta Tahapan Pengisian Anggota BPD, bersama ini kami mengharap atas kehadiran saudara besok pada :
        </div>
        <div id="tempat-tgl">
            <table>
                <tr>
                    <td>NIK Penduduk</td>
                    <td>:</td>
                    <td>{{$permintaan_surat->datapenduduk->nik}}</td>
                </tr>
                <tr>
                    <td>Nama Penduduk</td>
                    <td>:</td>
                    <td>{{$permintaan_surat->datapenduduk->nama}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>28 Juni 2018</td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td>:</td>
                    <td>08.00 WIB</td>
                </tr>
                <tr>
                    <td>Tempat</td>
                    <td>:</td>
                    <td>Aula Kantor Desa Jl. Nusa Poring No. 250 Nusa Poring</td>
                </tr>
                <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
        <div id="penutup">
            Demikian untuk menjadikan perhatian dan atas kehadirannya diucapkan terimakasih.
        </div>
        <div id="ttd" class="clearfix">
            <p><strong>KEPALA DESA</strong></p>
            <div id="nama-camat">
                <strong><u>{{$permintaan_surat->ttd_kepdes}}</u></strong>
            </div>
        </div>
    </div>
</body>

</html>
