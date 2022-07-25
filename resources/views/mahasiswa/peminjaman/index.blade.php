<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Peminjaman</div>
            {{-- <a href="{{ url('mahasiswa/peminjaman/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Batas Pengebalian</th>
                    <th>Jumlah</th>
                </thead>
                <tbody>
                    @foreach ($list_peminjaman as $peminjaman)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ url('mahasiswa/peminjaman', $peminjaman) }}"class="btn btn-info"><i class="fas fa-info"></i> Info</a>
                                {{-- <div class="btn-group">
                                <x-template.button.info-button url="mahasiswa/koleksi-buku/fiksi"
                                                                id="{{ $fiksi->id }}" />
                                <x-template.button.edit-button url="mahasiswa/koleksi-buku/fiksi"
                                                                id="{{ $fiksi->id }}" />
                                </div> --}}
                            </td>
                            <td>{{ $peminjaman->judul }}</td>
                            <td>{{ $peminjaman->nama }}</td>
                            <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                            <td>{{ $peminjaman->batas_pengembalian }}</td>
                            <td>{{ $peminjaman->jumlah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.mahasiswa>
