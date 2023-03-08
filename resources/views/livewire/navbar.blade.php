<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{ asset('/storage/icons/icon.png') }}" width="130" height="65" alt="icon">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                @if (auth()->check())
                    <li class="nav-item dropdown-center">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-md-end">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li>
                                <a class="dropdown-item fw-bold" href="{{ route('logout') }}">
                                    Logout <i class="bi bi-box-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-success nav-btn" href="{{ route('login') }}">
                            Login <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
