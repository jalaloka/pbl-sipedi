<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url ('admin/master-data/module/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th width="45px">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    <th>Jumblah Pegawai</th>
                </thead>
                <tbody>
                    @foreach ($list_module as $module)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url='admin/master-data/module'
                                                                id="{{ $module->id }}" />
                                <x-template.button.edit-button url='admin/master-data/module'
                                                                id="{{ $module->id }}" />
                                <x-template.button.delete-button url='admin/master-data/module'
                                                                    id="{{ $module->id }}"/>
                        </div>
                        </td>
                        <td>{{ $module->name }}</td>
                        <td>{{ $module->tag }}</td>
                        <td>{{ $module->role_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
