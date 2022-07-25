<x-module.pegawai>
    <div class="container">
        <a href="{{ url('pegawai/kondisibuku') }}" class="btn btn-xs btn-primary"><i class="fa fa-arrow-left"></i>
            Kembali</a>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Show Data Kondisi Buku</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-5">Isbn</dt>
                                    <dd class="col-7">{{ $kondisibuku->isbn }}</dd>
                                    <dt class="col-5">Judul Buku</dt>
                                    <dd class="col-7">{{ $kondisibuku->judul }}</dd>
                                    <dt class="col-5">Penerbit</dt>
                                    <dd class="col-7">{{ $kondisibuku->penerbit }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-5">Total Buku</dt>
                                    <dd class="col-7">{{ $kondisibuku->Total_buku }}</dd>
                                    <dt class="col-5">Jumlah Buku Bagus</dt>
                                    <dd class="col-7">{{ $kondisibuku->buku_bagus }}</dd>
                                    <dt class="col-5">Jumlah Buku Rusak</dt>
                                    <dd class="col-7">{{ $kondisibuku->buku_rusak }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-module.pegawai>
