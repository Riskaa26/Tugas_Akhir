<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Surat Selesai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('permintaan-surat')}}">Dasboard</a></li>
                        <li class="breadcrumb-item active">Data Surat Selesai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid --> 
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Permintaan Surat</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="suratForm" action="{{url('permintaan-surat')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">NIK</label>
                    <select name="nik" class="form-control">
                        <option value=""> Pilih NIK Penduduk</option>
                        @foreach ($list_data_penduduk as $data_penduduk)
                        <option value="{{$data_penduduk->nik}}"> {{$data_penduduk->nik}} | {{$data_penduduk->nama}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Surat</label>
                    <input type="text" name="jenis_surat" class="form-control" id="jenissurat" placeholder="Jenis Surat" required>
                </div>
                <div class="btn-group float-right">
                    <button type="submit" class="btn-sm btn btn-success mr-2"><i class="fas fa-user-plus mr-2"></i>Simpan</button>
                    <button type="reset" class="btn-sm btn btn-danger" onclick="window.location.href='{{url('permintaan-surat')}}'"><i class="fa fa-times-circle mr-2"></i>Batal</button>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>

    <script>
        document.getElementById('suratForm').addEventListener('submit', function(event) {
            let isValid = true;
            const fields = ['tanggal', 'nik', 'nama', 'jenissurat', 'status'];

            fields.forEach(function(field) {
                const input = document.getElementById(field);
                if (!input.value) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                event.preventDefault();
                alert('Please fill out all fields.');
            }
        });
    </script>

    <style>
        .is-invalid {
            border-color: red;
        }
    </style>
</x-module.Admin>
