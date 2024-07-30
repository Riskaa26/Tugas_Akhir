<li class="nav-item">
    <a href="{{url('admin/Dashboard')}}" class="nav-link {{request()->is('admin/Dashboard') ? 'active' : ''}}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{(url('admin/data-penduduk'))}}"
        class="nav-link {{request()->is('admin/data-penduduk*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Data Penduduk
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{request()->is('surat*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-envelope-open-text"></i>
        <p>
            Daftar Surat
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{url('admin/permintaan-surat')}}"
                class="nav-link {{request()->is('admin/permintaan-surat*') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Surat</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/surat-selesai')}}"
                class="nav-link {{request()->is('admin/surat-selesai') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Selesai</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{(url('admin/laporan'))}}" class="nav-link {{request()->is('admin/laporan*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
            Laporan
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{request()->is('surat*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-bars"></i>
        <p>
            Manajemen Web
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{url('admin/sambutan')}}" class="nav-link {{request()->is('sambutan*') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Sambutan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/aparat-desa')}}" class="nav-link {{request()->is('aparat-desa') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Aparat</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/visimisi')}}" class="nav-link {{request()->is('visimisi') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Visi Misi</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{(url('admin/pengguna'))}}" class="nav-link {{request()->is('pengguna*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Pengguna
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{(url('logout'))}}" class="nav-link {{request()->is('logout*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-arrow-left"></i>
        <p>
            Logout
        </p>
    </a>
</li>
</ul>
</li>