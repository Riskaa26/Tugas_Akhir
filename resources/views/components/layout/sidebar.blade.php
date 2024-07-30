<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" onclick="return false;">
        <img src="{{url('public')}}/admin-assets/gambar/logo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIPSDES NP</span>
    </a>
    <style>
        .main-sidebar {
            background-color: dark;
        }

        .brand-text {
            color: dark;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.5;
            padding: 15px;
        }
    </style>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            @if (auth()->check())
    @if (auth()->user()->foto)
        <img src="{{ url('public/uploads/pengguna/' . auth()->user()->foto) }}" alt="User Image" class="img-circle elevation-2">
    @else
        <img src="{{url('public')}}/admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    @endif
    <div class="info" style="color: white;">
        {{ auth()->user()->name }}
    </div>
@else
    <img src="{{url('public')}}/admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    <div class="info" style="color: white;">
        <!-- Optional: Display a placeholder or message for unauthenticated users -->
    </div>
@endif

                <!-- <a href="#" class="d-block">Administrator</a> -->
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">{{$header}}</li>
                @include('menu.' . $menu)
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>