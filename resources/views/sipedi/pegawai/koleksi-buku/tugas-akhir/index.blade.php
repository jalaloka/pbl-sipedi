<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Buku Tugas Akhir</div>
            <a href="{{ url('pegawai/koleksi-buku/tugasakhir/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </thead>
                <tbody>
                    @foreach ($list_tugasakhir as $tugasakhir)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='pegawai/koleksi-buku/tugasakhir'
                                                                    id="{{ $tugasakhir->id }}" />
                                    <x-template.button.edit-button url='pegawai/koleksi-buku/tugasakhir'
                                                                    id="{{ $tugasakhir->id }}" />
                                    <x-template.button.delete-button url='pegawai/koleksi-buku/tugasakhir'
                                                                    id="{{ $tugasakhir->id }}"/>
                            </div>
                            </td>
                            <td>{{ $tugasakhir->judul }}</td>
                            <td>{{ $tugasakhir->penulis }}</td>
                            <td>{{ $tugasakhir->penerbit }}</td>
                            <td>{{ $tugasakhir->tahun_terbit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
