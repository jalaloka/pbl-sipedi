<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/pengembalian" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Koleksi Buku
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url ('mahasiswa/pengembalian') }}" method="post">
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
                        <label for="" class="control-label">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Id Anggota</label>
                        <input type="text" name="id_anggota" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Batas Pengembalian</label>
                        <input type="date" name="batas_pengembalian" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal pengembalian</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Denda</label>
                        <input type="text" name="denda" class="form-control">
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
</x-module.mahasiswa>
