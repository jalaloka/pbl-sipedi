<x-module.pegawai>
    <x-template.button.back-button url="pegawai/koleksi-buku/tugasakhir"  />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Buku Tugas Akhir</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/koleksi-buku/tugasakhir', $tugasakhir->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $tugasakhir->judul }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Penulis</label>
                            <input type="text" name="penulis" value="{{ $tugasakhir->penulis }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ $tugasakhir->penerbit }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" value="{{ $tugasakhir->tahun_terbit }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Halam Buku</label>
                            <input type="text" name="jumlah_halaman" value="{{ $tugasakhir->jumlah_halaman }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Lokasi Rak</label>
                            <input type="text" name="lokasi_rak" value="{{ $tugasakhir->lokasi_rak }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>
