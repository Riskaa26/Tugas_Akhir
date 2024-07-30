<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Pelayanan Surat Desa Nusa Poring</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ url('public') }}/admin-assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('public') }}/admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="{{ url('public') }}/admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ url('public') }}/admin-assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public') }}/admin-assets/dist/css/adminlte.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    @stack('style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <x-layout.header />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-layout.sidebar />


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="content">
                <x-utils.notif/>
                {{ $slot }}
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <x-layout.footer />
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ url('public') }}/admin-assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('public') }}/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public') }}/admin-assets/dist/js/adminlte.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('public') }}/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="{{ url('public') }}/admin-assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script
        src="{{ url('public') }}/admin-assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="{{ url('public') }}/admin-assets/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public') }}/admin-assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="{{ url('public') }}/admin-assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="{{ url('public') }}/admin-assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{ url('public') }}/admin-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ url('public') }}/admin-assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="{{ url('public') }}/admin-assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="{{ url('public') }}/admin-assets/plugins/dropzone/min/dropzone.min.js"></script>
    
    @stack('script')
</body>


<script>
    // JavaScript for Bootstrap's form validation
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="sweetalert2.all.min.js"></scrip> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stack('script')


<script>
</html>55-55--0
