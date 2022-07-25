<x-module.mahasiswa>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengembalian</div>
            {{-- <a href="{{ url('mahasiswa/pengembalian/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Pengebalian</th>
                    <th>Nama</th>
                    <th>Denda</th>
                </thead>
                <tbody>
                    @foreach ($list_pengembalian as $pengembalian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ url('mahasiswa/pengembalian', $pengembalian) }}"class="btn btn-info"><i class="fas fa-info"></i> Info</a>
                                {{-- <div class="btn-group">
                                <x-template.button.info-button url="mahasiswa/koleksi-buku/fiksi"
                                                                id="{{ $fiksi->id }}" />
                                <x-template.button.edit-button url="mahasiswa/koleksi-buku/fiksi"
                                                                id="{{ $fiksi->id }}" />
                                </div> --}}
                            </td>
                            <td>{{ $pengembalian->judul }}</td>
                            <td>{{ $pengembalian->tanggal_peminjaman }}</td>
                            <td>{{ $pengembalian->tanggal_kembali }}</td>
                            <td>{{ $pengembalian->nama }}</td>
                            <td>{{ $pengembalian->denda }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.mahasiswa>
