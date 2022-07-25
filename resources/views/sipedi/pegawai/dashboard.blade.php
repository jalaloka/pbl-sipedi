<x-module.pegawai>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/mahasiswa') }}">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $jumlah_mahasiswa }}</h3>
                        <p>Jumlah Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/jumlah-buku') }}">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$jumlah_fiksi + $jumlah_nonfiksi + $jumlah_tugasakhir }}</h3>
                        <p>Jumlah Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/pengunjung') }}">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $jumlah_pengunjung }}</h3>
                        <p>Jumlah Pengunjung</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-person-booth"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/peminjaman') }}">
                <div class="small-box bg-gray">
                    <div class="inner">
                        <h3>{{ $jumlah_peminjaman }}</h3>
                        <p>jumlah Peminjaman</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="row">
            <section class="col-lg connectedSortable ui-sortable">
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            List Harian
                        </h3>
                        <div>
                            <button type="button" class="btn btn-dark float-right" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add list</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                            @foreach ($list_dashboard as $dashboard)
                                <li>
                                    <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <label for="todoCheck1"></label>
                                    </div>
                                    <span class="text">{{ $dashboard->nama }}</span>
                                    <div class="tools">
                                        {{-- <i class="fas fa-trash"></i> --}}
                                        {{-- <a href="{{ url('pegawai/dashboard', $dashboard) }}" ><i class="fas fa-trash"></i> </a> --}}
                                        <x-template.button.hapus-button url='pegawai/dashboard' id="{{ $dashboard->id }}"/>
                                        {{-- <i class="fas fa-trash-o"></i> --}}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah List Harian</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('pegawai/dashboard') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="" class="control-label">Tugas</label>
                                            {{-- @include('utils.errors', ['item' => 'nama']); --}}
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-dark " placeholder="Masukkan nama">simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col md-12">
                    {{-- <div class="card-tools">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a href="#" class="page-link">«</a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">»</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            </section>
        </div>
    </div>
</x-module.pegawai>
