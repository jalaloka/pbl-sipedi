<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="" class="dropdown-item">
                    @if (auth()->guard('mahasiswa')->check())
                    <a href="{{ url('profile/mahasiswa') }}" class="dropdown-item"><span
                            class="pull-left">Profile</span><span class="pull-left"><i
                                class="fas fa-user float-right mt-1"></i></span></a>
                @elseif (auth()->check())
                    <a href="{{ url('profile/pegawai') }}" class="dropdown-item"><span
                            class="pull-left">Profile</span><span class="pull-left"><i
                                class="fas fa-user float-right mt-1"></i></span></a>
                @endif
                    {{-- <i class="fa fa-user"></i> Profile --}}
                </a>
                <a href="{{ url('/') }}" class="dropdown-item">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </div>
        </li>
        @if (!auth()->guard('mahasiswa')->check())
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    @endif
    </ul>
</nav>
