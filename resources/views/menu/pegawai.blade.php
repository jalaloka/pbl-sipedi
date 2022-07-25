<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <x-template.menu.menu-item title="Dashboard" url="pegawai/dashboard" icon="fas fa-home" />
    </li>
    <li class="nav-item menu-open">
        <a href="#" class="nav-link">
            <i class="fa fa-users"></i>
            <p>
                Data Anggota
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-template.menu.menu-item title="Mahasiswa" url="pegawai/mahasiswa" icon="far fa-circle" />
            {{-- <x-template.menu.menu-item title="Pegawai" url="pegawai/pegawai" icon="far fa-circle" /> --}}
            {{-- <x-template.menu.menu-item title="Umum" url="pegawai/umum" icon="far fa-circle" /> --}}
        </ul>
    </li>
    <li class="nav-item">
        <x-template.menu.menu-item title="Pengunjung" url="pegawai/pengunjung" icon="fas fa-person-booth" />
    </li>
    <li class="nav-item">
        <x-template.menu.menu-item title="Peminjaman" url="pegawai/peminjaman" icon="far fa-calendar-alt" />
    </li>
    <li class="nav-item">
        <x-template.menu.menu-item title="Pengembalian" url="pegawai/pengembalian" icon="far fa-calendar-check" />
    </li>
    <li class="nav-item menu-open">
        <a href="#" class="nav-link">
            <i class="fa fa-book"></i>
            <p>
                Koleksi Buku
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-template.menu.menu-item title="Fiksi" url="pegawai/koleksi-buku/fiksi" icon="far fa-circle" />
            <x-template.menu.menu-item title="Nonfiksi" url="pegawai/koleksi-buku/nonfiksi" icon="far fa-circle" />
            <x-template.menu.menu-item title="Tugas Akhir" url="pegawai/koleksi-buku/tugasakhir"
                icon="far fa-circle" />
        </ul>
    </li>
    <li class="nav-item">
        <x-template.menu.menu-item title="Kondisi Buku" url="pegawai/kondisibuku" icon="fas fa-book-dead" />
    </li>
    <li class="nav-item">
        <x-template.menu.menu-item title="Denda" url="pegawai/denda" icon="fas fa-wallet" />
    </li>
    </li>
</ul>
