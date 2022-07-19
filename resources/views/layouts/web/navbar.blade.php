    <!-- Navbar - start
    ================================================== -->
    <nav class="navbar sticky-top navbar-expand-lg mt-1 navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                <img src="{{ asset('web/images/logo.png') }}" alt="" width="216" height="45" class="logo-header">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-auto ms-auto">
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('product') ? ' active' : '' }}" href="{{ route('produk') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="align-items-center ms-2 me-3 mb-1" style="position: relative;">
                    <a href="" style="color: #CC1522;font-size: 27px;text-decoration: none;" class="m-1">
                        <i class="bi bi-search"></i>
                    </a>
                    <a href="" style="color: #CC1522;font-size: 26px;" class="m-1">
                        <i class="bi bi-cart3"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex align-items-center me-4 collapse" id="navbarSupportedContent">
                <div class="btn-group flex-collumn" role="group" aria-label="Basic example">
                    <a href="" style="color: #0D0D0D;text-decoration: none;">
                        <button style="border: none; background-color: transparent;" class="me-2 mt-2">
                            Login
                        </button>
                    </a>
                    <a href="" style=";text-decoration: none;" class="">
                        <button type="button" class="btn" style="background-color: #CC1522;border-radius: 10px;box-shadow: 4px 32px 13px rgba(204, 21, 34, 0.01), 2px 18px 11px rgba(204, 21, 34, 0.05), 1px 8px 8px rgba(204, 21, 34, 0.09), 0px 2px 4px rgba(204, 21, 34, 0.1), 0px 0px 0px rgba(204, 21, 34, 0.1);">
                            <span style="font-weight: bold;" class="text-white">Sign Up</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar - end
    ================================================== -->