<x-module.pegawai>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Pengunjung</div>
                <a href="{{ url('pegawai/pengunjung/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark">
                        <th width="45px">NO</th>
                        <th width="100px">Aksi</th>
                        <th>Nama</th>
                        <th>Keperluan</th>
                        <th>Hari</th>
                        <th>Tanggal Kunjungan</th>
                    </thead>
                    <tbody>
                        @foreach ($list_pengunjung as $pengunjung)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url='pegawai/pengunjung'
                                                                        id="{{ $pengunjung->id }}" />
                                        {{-- <x-template.button.edit-button url='pegawai/pengunjung'
                                                                        id="{{ $pengunjung->id }}" /> --}}
                                        <x-template.button.delete-button url='pegawai/pengunjung' id="{{ $pengunjung->id }}"/>
                                </div>
                                </td>
                                <td>{{ $pengunjung->nama }}</td>
                                <td>{{ $pengunjung->keperluan }}</td>
                                <td>{{ $pengunjung->hari }}</td>
                                <td>{{ $pengunjung->tanggal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-module.pegawai>
