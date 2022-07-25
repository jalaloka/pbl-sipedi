<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Buku Non Fiksi</div>
            <a href="{{ url('pegawai/koleksi-buku/nonfiksi/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Buku</th>
                </thead>
                <tbody>
                    @foreach ($list_nonfiksi as $nonfiksi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='pegawai/koleksi-buku/nonfiksi'
                                                                    id="{{ $nonfiksi->id }}" />
                                    <x-template.button.edit-button url='pegawai/koleksi-buku/nonfiksi'
                                                                    id="{{ $nonfiksi->id }}" />
                                    <x-template.button.delete-button url='pegawai/koleksi-buku/nonfiksi'
                                                                        id="{{ $nonfiksi->id }}"/>
                            </div>
                            </td>
                            <td>{{ $nonfiksi->judul }}</td>
                            <td>{{ $nonfiksi->penerbit }}</td>
                            <td>{{ $nonfiksi->tahun_terbit }}</td>
                            <td>{{ $nonfiksi->jumlah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
