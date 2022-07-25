<x-module.pegawai>
    <x-template.button.back-button url="pegawai/koleksi-buku/tugasakhir" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Koleksi Buku
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url ('pegawai/koleksi-buku/tugasakhir') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Jumlah Halaman Buku</label>
                        <input type="text" name="jumlah_halaman" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Lokasi Rak</label>
                        <input type="text" name="lokasi_rak" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
