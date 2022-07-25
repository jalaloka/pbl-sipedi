<x-module.mahasiswa>
    <div class="container">
        <x-template.button.back-button url="mahasiswa/peminjaman" />
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Show Data Peminjaman</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-5">Kode Buku</dt>
                                <dd class="col-7">: {{ $peminjaman->kode_buku }}</dd>
                                <dt class="col-5">Id Anggota</dt>
                                <dd class="col-7">: {{ $peminjaman->id_anggota }}</dd>
                                <dt class="col-5">Jumlah Peminjaman</dt>
                                <dd class="col-7">: {{ $peminjaman->jumlah }}</dd>
                                <dt class="col-5">Judul Buku</dt>
                                <dd class="col-7">: {{ $peminjaman->judul }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-5">Nama</dt>
                                <dd class="col-7">: {{ $peminjaman->nama }}</dd>
                                <dt class="col-5">Tanggal Peminjaman</dt>
                                <dd class="col-7">: {{ $peminjaman->tanggal_peminjaman }}</dd>
                                <dt class="col-5">Batas Pengembalian</dt>
                                <dd class="col-7">: {{ $peminjaman->batas_pengembalian }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</x-module.mahasiswa>
