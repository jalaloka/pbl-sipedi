<x-module.pegawai>
    <x-template.button.back-button url="pegawai/pengembalian" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Pengembalian</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/pengembalian') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Buku</label>
                            <input type="text" class="form-control" name="kode_buku">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Id Anggota</label>
                            <input type="text" class="form-control" name="id_anggota">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        {{-- <div class="text-danger" for="date">
                            <p style="font-size: 13px"> Dimulai Dari Bulan, Tanggal, dan Tahun</p><br>
                        </div> --}}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" name="tanggal_peminjaman">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Batas Pengembalian</label>
                            <input type="date" class="form-control" name="batas_pengembalian">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Pegembalian</label>
                        <input type="date" class="form-control" name="tanggal_kembali">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Denda</label>
                        <input type="text" class="form-control" name="denda">
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
