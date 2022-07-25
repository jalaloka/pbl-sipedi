<x-module.pegawai>
    <x-template.button.back-button url="pegawai/koleksi-buku/fiksi"  />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Buku Fiksi</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/koleksi-buku/fiksi', $fiksi->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{ $fiksi->kode_buku }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $fiksi->judul }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ $fiksi->penerbit }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Pengarang</label>
                            <input type="text" name="pengarang" value="{{ $fiksi->pengarang }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" value="{{ $fiksi->tahun_terbit }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" value="{{ $fiksi->lokasi_rak }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Halam</label>
                            <input type="text" name="jumlah_halaman" value="{{ $fiksi->jumlah_halaman }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku</label>
                            <input type="text" name="jumlah" value="{{ $fiksi->jumlah }}" class="form-control">
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
