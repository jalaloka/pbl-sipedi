<x-module.profile.pegawai>
    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url ('profile/pegawai', $pegawai->id) }}" method="post">
            @csrf
            @method("put")
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="text" name="email" value="{{ $pegawai->email }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="username" value="{{ $pegawai->username }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">No.Handphone</label>
                        <input type="text" name="telepon" value="{{ $pegawai->telepon }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Alamat</label>
                        <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Agama</label>
                        <input type="text" name="agama" value="{{ $pegawai->agama }}" class="form-control">
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
</x-module.profile.pegawai>
