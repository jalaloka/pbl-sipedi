<x-module.pegawai>
    <x-template.button.back-button url="pegawai/mahasiswa" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($mahasiswa->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="col-md-9">
                <div class="card">
                    <div class="col-md-3">
                    </div>
                    <div class="card-header">
                        <div class="card-title">Show Data Anggota</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <dl class="row">
                                    <dt class="col-5">Nim</dt>
                                    <dd class="col-7">: {{ $mahasiswa->nim }}</dd>
                                    <dt class="col-5">Nama</dt>
                                    <dd class="col-7">: {{ $mahasiswa->nama }}</dd>
                                    <dt class="col-5">Tempat lahir</dt>
                                    <dd class="col-7">: {{ $mahasiswa->tempat_lahir }}</dd>
                                    <dt class="col-5">Tanggal lahir</dt>
                                    <dd class="col-7">: {{ $mahasiswa->tanggal_lahir }}</dd>
                                    <dt class="col-5">Alamat </dt>
                                    <dd class="col-7">: {{ $mahasiswa->alamat }}</dd>
                                    <dt class="col-5">Agama</dt>
                                    <dd class="col-7">: {{ $mahasiswa->agama }}</dd>
                                    <dt class="col-5">Jenis Kelamin </dt>
                                    <dd class="col-7">: {{ $mahasiswa->jenis_kelamin }}</dd>
                                    <dt class="col-5">Telepon </dt>
                                    <dd class="col-7">: {{ $mahasiswa->telepon }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.pegawai>
