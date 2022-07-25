<x-module.profile.mahasiswa>
    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($mahasiswa->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Mahasiswa</div>
        </div>
        <div class="card-body">
            <form action="{{ url('profile/mahasiswa', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat</label>
                            <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">No.Handphone</label>
                            <input type="text" name="telepon" value="{{ $mahasiswa->telepon }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Prodi</label>
                            <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" class="form-control">
                        </div>
                    </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary"><i class="fas fa-save"> </i>Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>
</x-module.profile.mahasiswa>
