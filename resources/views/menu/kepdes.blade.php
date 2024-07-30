<li class="nav-item">
    <a href="{{url('Kepdes/beranda')}}" class="nav-link {{request()->is('Kepdes/beranda') ? 'active' : ''}}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{(url('Kepdes/data-penduduk'))}}"
        class="nav-link {{request()->is('Kepdes/data-penduduk*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Data Penduduk
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{(url('Kepdes/laporan'))}}"
        class="nav-link {{request()->is('Kepdes/laporan*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
            Laporan
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