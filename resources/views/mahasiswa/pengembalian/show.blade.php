<x-module.mahasiswa>
    <div class="container">
        <a href="{{ url('mahasiswa/pengembalian') }}" class="btn btn-xs btn-dark"><i class="fa fa-arrow-left"></i>
            Kembali</a>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Show Data Pengembalian</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-5">Kode Buku</dt>
                                    <dd class="col-7">: {{ $pengembalian->kode_buku }}</dd>
                                    <dt class="col-5">Judul Buku</dt>
                                    <dd class="col-7">: {{ $pengembalian->judul }}</dd>
                                    <dt class="col-5">Id Anggota</dt>
                                    <dd class="col-7">: {{ $pengembalian->id_anggota }}</dd>
                                    <dt class="col-5">Nama</dt>
                                    <dd class="col-7">: {{ $pengembalian->nama }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-5">Tanggal Peminjaman</dt>
                                    <dd class="col-7">: {{ $pengembalian->tanggal_peminjaman }}</dd>
                                    <dt class="col-5">Batas Pengembalian</dt>
                                    <dd class="col-7">: {{ $pengembalian->batas_pengembalian }}</dd>
                                    <dt class="col-5">Tanggal Pengembalian</dt>
                                    <dd class="col-7">: {{ $pengembalian->tanggal_kembali }}</dd>
                                    <dt class="col-5">Denda</dt>
                                    <dd class="col-7">: {{ $pengembalian->denda }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-module.mahasiswa>
