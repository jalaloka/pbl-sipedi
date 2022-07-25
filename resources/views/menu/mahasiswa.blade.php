<li class="nav-item">
    <x-template.menu.menu-item title="Dashboard" url="mahasiswa/dashboard" icon="fas fa-home"/>
<li class="nav-item menu-open">
    <a href="#" class="nav-link">
        <i class="fa fa-book"></i>
        <p>
            Koleksi Buku
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <x-template.menu.menu-item title="Fiksi" url="mahasiswa/koleksi-buku/fiksi" icon="fas fa-circle"/>
        <x-template.menu.menu-item title="Nonfiksi" url="mahasiswa/koleksi-buku/nonfiksi" icon="fas fa-circle"/>
        <x-template.menu.menu-item title="Tugas Akhir"  url="mahasiswa/koleksi-buku/tugasakhir" icon="fas fa-circle"/>
    </ul>
</li>
{{-- <li class="nav-item">
    <x-template.menu.menu-item title="Peminjaman" url="mahasiswa/peminjaman" icon="fas fa-clipboard-list"/>
</li>
<li class="nav-item">
    <x-template.menu.menu-item title="Pengembalian" url="mahasiswa/pengembalian" icon="fas fa-undo"/>
</li> --}}
