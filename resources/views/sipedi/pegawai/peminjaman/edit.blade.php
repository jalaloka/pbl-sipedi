<x-module.pegawai>
    <x-template.button.back-button url="pegawai/peminjaman" />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Peminjaman</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/peminjaman', $peminjaman->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{ $peminjaman->kode_buku }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Id Anggota</label>
                            <input type="text" name="id_anggota" value="{{ $peminjaman->id_anggota }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Peminjaman</label>
                            <input type="text" name="jumlah" value="{{ $peminjaman->jumlah }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $peminjaman->judul }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" value="{{ $peminjaman->nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Peminjaman</label>
                            <input type="text" name="tanggal_peminjaman" value="{{ $peminjaman->tanggal_peminjaman }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Batas Pengembalian</label>
                            <input type="text" name="batas_pengembalian" value="{{ $peminjaman->batas_pengembalian }}" class="form-control">
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
