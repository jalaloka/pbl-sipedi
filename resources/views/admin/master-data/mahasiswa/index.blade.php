<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Mahasiswa</div>
            <a href="{{ url('admin/master-data/mahasiswa/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark" >
                    <th width="45px">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nim</th>
                    <th>Nama</th>
                </thead>
                <tbody>
                    @foreach ($list_mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url='admin/master-data/mahasiswa'
                                                                    id="{{ $mahasiswa->id }}" />
                                    <x-template.button.edit-button url='admin/master-data/mahasiswa'
                                                                    id="{{ $mahasiswa->id }}" />
                                    <x-template.button.delete-button url='admin/master-data/mahasiswa' id="{{ $mahasiswa->id }}"/>
                            </div>
                            </td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
