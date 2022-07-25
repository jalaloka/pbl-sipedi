<x-module.pegawai>
    <x-template.button.back-button url="pegawai/pengembalian" />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Pengembalian</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/pengembalian', $pengembalian->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{ $pengembalian->kode_buku }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $pengembalian->judul }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Id Anggota</label>
                            <input type="text" name="id_anggota" value="{{ $pengembalian->id_anggota }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" value="{{ $pengembalian->nama }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Peminjaman</label>
                            <input type="text" name="tanggal_peminjaman" value="{{ $pengembalian->tanggal_peminjaman }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Batas_Pengembalian</label>
                            <input type="text" name="batas_pengembalian" value="{{ $pengembalian->batas_pengembalian }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Pengembalian</label>
                            <input type="text" name="tanggal_kembali" value="{{ $pengembalian->tanggal_kembali }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Denda</label>
                            <input type="text" name="denda" value="{{ $pengembalian->denda }}" class="form-control">
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
