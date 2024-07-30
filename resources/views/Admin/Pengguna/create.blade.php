<x-module.Admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengguna</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('Pengguna') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pengguna</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Form untuk tambah data aparatur desa -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Pengguna</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="KelolaInformasiForm" action="{{ url('admin/pengguna') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tabel untuk memasukkan data aparat desa -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Tipe</th>
                                    <th>Foto</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                    </td>
                                    <td>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </td>
                                    <td>
                                        <input type="text" name="email" class="form-control" placeholder="email" required>
                                    </td>
                                    <td>
                                       <select name="type" class="form-control" id="" required>
                                            <option value="">Pilih Tipe</option>
                                            <option value="ADMIN">ADMIN</option>
                                            <option value="KEPDES">Kepala Desa</option>
                                       </select>
                                    </td>
                                    <td>
                                        <input type="file" name="foto" class="form-control" placeholder="foto" required>
                                    </td>
                                    <td>
                                        <input type="text" name="password" class="form-control" placeholder="Password" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

    <!-- <script>
        document.getElementById('KelolaInformasiForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            let isValid = true;
            const fields = ['foto', 'nama', 'jabatan'];

            fields.forEach(function (field) {
                const input = document.querySelector(`[name="${field}"]`);
                if (input && !input.value) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                alert("Harap isi semua data yang diperlukan.");
                return;
            }

            // Form validation passed, proceed with AJAX form submission
            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                }
            })
            .then(response => {
                if (response.ok) {
                    window.location.href = '{{ url('admin/aparat-desa') }}'; // Redirect to the index page after successful submission
                } else {
                    alert("Terjadi kesalahan saat menyimpan data.");
                }
            })
            .catch(error => {
                alert("Terjadi kesalahan saat menghubungi server.");
            });
        });
    </script> -->
</x-module.Admin>
