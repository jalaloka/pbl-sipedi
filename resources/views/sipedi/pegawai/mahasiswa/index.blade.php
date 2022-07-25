<x-module.pegawai>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Anggota</div>
                <a href="{{ url('pegawai/mahasiswa/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark">
                        <th width="45px">NO</th>
                        <th width="100px">Aksi</th>
                        <th>Id Anggota</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Agama</th>
                    </thead>
                    <tbody>
                        @foreach ($list_mahasiswa as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url='pegawai/mahasiswa'
                                                                        id="{{ $mahasiswa->id }}" />
                                        {{-- <x-template.button.edit-button url='pegawai/mahasiswa'
                                                                        id="{{ $mahasiswa->id }}" /> --}}
                                        <x-template.button.delete-button url='pegawai/mahasiswa' id="{{ $mahasiswa->id }}"/>
                                </div>
                                </td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->telepon }}</td>
                                <td>{{ $mahasiswa->agama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-module.pegawai>
