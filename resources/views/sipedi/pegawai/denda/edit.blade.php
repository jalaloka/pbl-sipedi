<x-module.pegawai>
    <x-template.button.back-button url="pegawai/denda" />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Denda</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/denda', $denda->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" name="harga" value="{{ $denda->harga }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>
