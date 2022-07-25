<x-module.pegawai>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Kodisi Buku</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/kondisibuku') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Isbn</label>
                            <input type="text" class="form-control" name="isbn">
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
                            <label for="" class="control-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Total Buku</label>
                            <input type="text" class="form-control" name="total_buku">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku Bagus</label>
                            <input type="text" class="form-control" name="buku_bagus">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku Rusak</label>
                            <input type="text" class="form-control" name="buku_rusak">
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>
