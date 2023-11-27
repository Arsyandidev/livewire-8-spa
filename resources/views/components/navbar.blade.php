<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4 animate__animated animate__fadeInDown">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                        Helpdesk Pengawasan (V2)
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="/">
                                    <i class="fa fa-home opacity-6 text-dark me-1"></i>
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="../pages/profile.html">
                                    <i class="fa fa-book opacity-6 text-dark me-1"></i>
                                    Arsip
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="../pages/sign-up.html">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Petunjuk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="../pages/sign-in.html">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Pusat Informasi
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            @if (Auth::user())
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/product/argon-dashboard"
                                        class="btn btn-sm mb-0 me-1 btn-primary">{{ Auth::user()->name }}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="/login" class="btn btn-sm mb-0 me-1 btn-primary">Login</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
