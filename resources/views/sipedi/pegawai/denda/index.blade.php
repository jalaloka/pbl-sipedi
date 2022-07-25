<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Denda</div>
            <a href="{{ url('pegawai/denda/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th width="45px">NO</th>
                    <th width="100px">Aksi</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                </thead>
                <tbody>
                    @foreach ($list_denda as $denda)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url='pegawai/denda'
                                                                    id="{{ $denda->id }}" /> --}}
                                    <x-template.button.edit-button url='pegawai/denda'
                                                                    id="{{ $denda->id }}" />
                                    <x-template.button.delete-button url='pegawai/denda' id="{{ $denda->id }}"/>
                            </div>
                            </td>
                            <td>{{ $denda->keterangan }}</td>
                            <td>{{ $denda->harga }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>
