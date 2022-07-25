<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/pegawai') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nip</label>
                        <input type="text" name="nip" class="form-control">
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
                        <label for="" class="control-label">Jenis Kelamin</label>
                        <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Open this select menu</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Agama</label>
                        <select class="form-control" aria-label="Default select example" name="agama">
                            <option selected>Open this select menu</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="username" class="form-control">
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
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">No.Handphone</label>
                        <input type="text" class="form-control" name="telepon">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="float-right btn btn-primary"> <i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</x-module.admin>
