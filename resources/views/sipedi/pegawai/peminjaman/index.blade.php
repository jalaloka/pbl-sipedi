<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Peminjaman</div>
            <a href="{{ url('pegawai/peminjaman/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Jumlah</th>
                    <th>Batas Pengembalian</th>
                    <th>Nama</th>
                </thead>
                <tbody>
                    @foreach ($list_peminjaman as $peminjaman)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='pegawai/peminjaman'
                                                                    id="{{ $peminjaman->id }}" />
                                    {{-- <x-template.button.edit-button url='pegawai/peminjaman'
                                                                    id="{{ $peminjaman->id }}" /> --}}
                                    <x-template.button.delete-button url='pegawai/peminjaman' id="{{ $peminjaman->id }}"/>
                            </div>
                            </td>
                            <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                            <td>{{ $peminjaman->jumlah }}</td>
                            <td>{{ $peminjaman->batas_pengembalian }}</td>
                            <td>{{ $peminjaman->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
