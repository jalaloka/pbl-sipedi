<x-module.pegawai>
    <x-template.button.back-button url="pegawai/denda" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Denda</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/denda') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>
