<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/koleksi-buku/fiksi" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Koleksi Buku
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url ('mahasiswa/koleksi-buku/fiksi') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" name="judul" class="form-control">
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
                        <label for="" class="control-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control">
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
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
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
</x-module.mahasiswa>
