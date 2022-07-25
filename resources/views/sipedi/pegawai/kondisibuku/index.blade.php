<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Kondisi Buku</div>
            <a href="{{ url('pegawai/kondisibuku/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Isbn</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Buku Bagus</th>
                    <th>Jumlah Buku Rusak</th>
                </thead>
                <tbody>
                    @foreach ($list_kondisibuku as $kondisibuku)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='pegawai/kondisibuku'
                                                                    id="{{ $kondisibuku->id }}" />
                                    <x-template.button.edit-button url='pegawai/kondisibuku'
                                                                    id="{{ $kondisibuku->id }}" />
                                    <x-template.button.delete-button url='pegawai/kondisibuku' id="{{ $kondisibuku->id }}"/>
                            </div>
                            </td>
                            <td>{{ $kondisibuku->isbn }}</td>
                            <td>{{ $kondisibuku->judul }}</td>
                            <td>{{ $kondisibuku->buku_bagus }}</td>
                            <td>{{ $kondisibuku->buku_rusak }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
