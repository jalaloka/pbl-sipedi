<x-module.pegawai>
    <div class="container">
    <x-template.button.back-button url="pegawai/koleksi-buku/nonfiksi" />
        <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($nonfiksi->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Show Data Buku nonfiksi</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <dl class="row">
                                <dt class="col-5">Kode Buku</dt>
                                <dd class="col-7">: {{ $nonfiksi->kode_buku }}</dd>
                                <dt class="col-5">Judul</dt>
                                <dd class="col-7">: {{ $nonfiksi->judul }}</dd>
                                <dt class="col-5">Penerbit</dt>
                                <dd class="col-7">: {{ $nonfiksi->penerbit }}</dd>
                                <dt class="col-5">Pengarang</dt>
                                <dd class="col-7">: {{ $nonfiksi->pengarang }}</dd>
                                <dt class="col-5">Tahun Terbit</dt>
                                <dd class="col-7">: {{ $nonfiksi->tahun_terbit }}</dd>
                                <dt class="col-5">Lokasi Rak</dt>
                                <dd class="col-7">: {{ $nonfiksi->lokasi_rak }}</dd>
                                <dt class="col-5">Jumlah Buku</dt>
                                <dd class="col-7">: {{ $nonfiksi->jumlah }}</dd>
                                <dt class="col-5">Jumlah Halam</dt>
                                <dd class="col-7">: {{ $nonfiksi->jumlah_halaman }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-module.pegawai>
