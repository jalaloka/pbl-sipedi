<x-module.pegawai>
    <div class="container">
        <a href="{{ url('pegawai/pengunjung') }}" class="btn btn-xs btn-dark"><i class="fa fa-arrow-left"></i>
            Kembali</a>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Show Data Pengunjung</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-5">Id Anggota</dt>
                                    <dd class="col-7">: {{ $pengunjung->id_anggota }}</dd>
                                    <dt class="col-5">Nama</dt>
                                    <dd class="col-7">: {{ $pengunjung->nama }}</dd>
                                    <dt class="col-5">Keperluan</dt>
                                    <dd class="col-7">: {{ $pengunjung->keperluan }}</dd>
                                    <dt class="col-5">Hari</dt>
                                    <dd class="col-7">: {{ $pengunjung->hari }}</dd>
                                    <dt class="col-5">Tanggal Kunjungan</dt>
                                    <dd class="col-7">: {{ $pengunjung->tanggal }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-module.pegawai>
