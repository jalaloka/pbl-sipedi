<x-module.pegawai>
    <x-template.button.back-button url="pegawai/kondisibuku" />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Kondisi Buku</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/kondisibuku', $kondisibuku->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Isbn</label>
                            <input type="text" name="isbn" value="{{ $kondisibuku->isbn }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $kondisibuku->judul }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ $kondisibuku->penerbit }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Total Buku</label>
                            <input type="text" name="total_buku" value="{{ $kondisibuku->total_buku }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku Bagus</label>
                            <input type="text" name="buku_bagus" value="{{ $kondisibuku->buku_bagus }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Buku Rusak</label>
                            <input type="text" name="buku_rusak" value="{{ $kondisibuku->buku_rusak }}" class="form-control">
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
