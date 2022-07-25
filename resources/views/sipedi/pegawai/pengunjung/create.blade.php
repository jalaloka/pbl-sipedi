<x-module.pegawai>
    <x-template.button.back-button url="pegawai/pengunjung" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Pengunjung</div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/pengunjung') }}" method="post">
                @csrf
                <div class="row">
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
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Keperluan</label>
                            <input type="text" class="form-control" name="keperluan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Hari</label>
                            <input type="text" class="form-control" name="hari">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" name="tanggal">
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
