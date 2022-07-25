<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Pengembalian</div>
            <a href="{{ url('pegawai/pengembalian/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Judul</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Batas Pengembalian</th>
                    <th>Nama</th>
                    <th>Denda</th>
                </thead>
                <tbody>
                    @foreach ($list_pengembalian as $pengembalian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='pegawai/pengembalian'
                                                                    id="{{ $pengembalian->id }}" />
                                    {{-- <x-template.button.edit-button url='pegawai/pengembalian'
                                                                    id="{{ $pengembalian->id }}" /> --}}
                                    <x-template.button.delete-button url='pegawai/pengembalian' id="{{ $pengembalian->id }}"/>
                            </div>
                            </td>
                            <td>{{ $pengembalian->judul }}</td>
                            <td>{{ $pengembalian->tanggal_kembali }}</td>
                            <td>{{ $pengembalian->batas_pengembalian }}</td>
                            <td>{{ $pengembalian->nama }}</td>
                            <td>{{ $pengembalian->denda }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
