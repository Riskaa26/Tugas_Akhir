<x-frontNoFooter>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .info-box {
            background-color: white;
            padding: 10px; /* Reduce padding to move content closer to the header */
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px; /* Fixed width */
            max-height: 90%; /* Ensure it does not overflow */
            overflow-y: auto; /* Allow vertical scrolling if content overflows */
        }
        .info-box h5 {
            display: flex;
            align-items: center;
            font-size: 1.25rem;
            margin-bottom: 10px; /* Reduce margin-bottom to save space */
        }
        .info-box i {
            margin-right: 10px;
        }
        .info-box ol {
            padding-left: 20px;
            margin: 0; /* Remove default margin */
        }
        .info-box ol li {
            margin-bottom: 5px; /* Reduce margin-bottom to save space */
        }
    </style>
</head>
<body>
    <section id="about">
        <div class="container">
            <div class="info-box">
                <div>
                    <h5>
                        <i class="fas fa-info-circle"></i>
                        PANDUAN MEMBUAT SURAT
                    </h5>
                    <ol>
                        <li>Klik menu BUAT SURAT</li>
                        <li>Tampil halaman pilihan jenis surat</li>
                        <li>Klik tombol BUAT SURAT</li>
                        <li>Masukkan NIK</li>
                        <li>Klik tombol CEK NIK</li>
                        <li>Bila NIK sesuai, tampil data identitas</li>
                        <li>Isi baris keperluan surat</li>
                        <li>Klik Submit</li>
                        <li>Setelah berhasil akan tampil pesan:</li>
                        Berhasil membuat surat. Silakan ambil surat di kantor Desa dalam 2 - 3 hari kerja!
                    </ol>
                </div>
            </div>
        </div>
    </section>
</body>
</x-frontNotFooter>

