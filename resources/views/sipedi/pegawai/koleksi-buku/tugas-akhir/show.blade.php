<x-module.pegawai>
    <div class="container">
        <a href="{{ url('pegawai/koleksi-buku/tugasakhir') }}" class="btn btn-xs btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($tugasakhir->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Show Data Buku Tugas Akhir</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-5">Judul Buku</dt>
                                <dd class="col-7">: {{ $tugasakhir->judul }}</dd>
                                <dt class="col-5">Penulis</dt>
                                <dd class="col-7">: {{ $tugasakhir->penulis }}</dd>
                                <dt class="col-5">Penerbit</dt>
                                <dd class="col-7">: {{ $tugasakhir->penerbit }}</dd>
                                <dt class="col-5">Tahun Terbit</dt>
                                <dd class="col-7">: {{ $tugasakhir->tahun_terbit }}</dd>
                                <dt class="col-5">Jumlah Halaman</dt>
                                <dd class="col-7">: {{ $tugasakhir->jumlah_halaman }}</dd>
                                <dt class="col-5">Lokasi Rak</dt>
                                <dd class="col-7">: {{ $tugasakhir->lokasi_rak }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-module.pegawai>
