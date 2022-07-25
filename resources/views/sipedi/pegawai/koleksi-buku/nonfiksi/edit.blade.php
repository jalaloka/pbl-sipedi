<x-module.pegawai>
    <x-template.button.back-button url="pegawai/koleksi-buku/nonfiksi"  />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Buku Non Fiksi</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/koleksi-buku/nonfiksi', $nonfiksi->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{ $nonfiksi->kode_buku }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $nonfiksi->judul }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ $nonfiksi->penerbit }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Pengarang</label>
                            <input type="text" name="pengarang" value="{{ $nonfiksi->pengarang }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" value="{{ $nonfiksi->tahun_terbit }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" value="{{ $nonfiksi->lokasi_rak }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Halam</label>
                            <input type="text" name="jumlah_halaman" value="{{ $nonfiksi->jumlah_halaman }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku</label>
                            <input type="text" name="jumlah" value="{{ $nonfiksi->jumlah }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>
