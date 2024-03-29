<link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">
<script src="{{ asset('web/js/navbar.js') }}"></script>
<script>
    // const ukuran = $(window).width();
    $(window).ready(function() {
        if ($(window).width() < 676) {
            $('#logo-mobile').attr('hidden', false);
            $('#logo-header').attr('hidden', true);
        }
        else {
            $('#logo-header').attr('hidden', false);
            $('#logo-mobile').attr('hidden', true);
        }
    });
</script>
<style>
    .btn-checkout{
        background: #CC1522;
        color: white;
        width: 100%;
        border-radius: 0 0 20px 20px;
        position: absolute;
        bottom: 0px;
    }
    .btn-checkout:hover{
        background: white;
        color: #CC1522;
        /* font-weight: bold; */
        border: 0.4px solid #CC1522;
    }
</style>
    <?php
        use App\Models\Cart;
    ?>
    <!-- Navbar - start
    ================================================== -->
    @auth
        <input type="text" disabled hidden value="{{ auth()->user()->id }}" id="id_user" name="id_user">
    @endauth
    <nav class="navbar sticky-top navbar-expand-lg mt-1 navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('web/images/logo.png') }}" alt="" width="216" height="45" id="logo-header">
                <img src="{{ asset('images/logo.png') }}" alt="" width="45" height="45" id="logo-mobile" hidden>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="tombol_navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-auto ms-auto">
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('product*') ? ' active' : '' }}" href="{{ route('produk') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                @guest
                    <div class="align-items-center ms-2 me-3 mb-1" style="position: relative;">
                        <a href="" style="color: #CC1522;font-size: 27px;text-decoration: none;" class="m-1 search-navbar" role="button" data-toggle="collapse" data-target="#searchnavbar" aria-expanded="false">
                            <i class="bi bi-search"></i>
                        </a>
                        <a href="" style="color: #CC1522;font-size: 28px;" class="m-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cart3"></i><span id="cart-total" class="badge rounded-pill badge-notification bg-danger count-cart" style="">0</span>
                        </a>
                        <ul class="dropdown-menu cart-menu" aria-labelledby="dropdownMenuLink" style="border: 1px solid #CC1522;border-radius: 20px;">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    Login Terlebih Dahulu
                                </a>
                            </li>
                        </ul>
                    </div>
                @endguest
                @auth
                    @if (auth()->user()->hasRole('user'))
                        <div class="align-items-center ms-2 me-3 mb-1" style="position: relative;">
                            <a href="" style="color: #CC1522;font-size: 27px;text-decoration: none;" class="m-1 search-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#carinavbar" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-search"></i>
                            </a>
                            <input type="text" class="collapse form-control" placeholder="cari" id="carinavbar" style="position: fixed !important;top: 20px;left: 0;right: 0px;width: 45%;margin: auto;">
                            <a href="" style="color: #CC1522;font-size: 28px;" class="m-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-cart3"></i><span id="cart-total" class="badge rounded-pill badge-notification bg-danger count-cart" style="">0</span>
                            </a>
                            <ul class="dropdown-menu cart-menu" aria-labelledby="dropdownMenuLink" style="border: 1px solid #CC1522;border-radius: 20px;">
                                <?php
                                    $cart = Cart::where('user_id', auth()->user()->id)->with('product')->get();
                                ?>
                                <li class="empty_cart">
                                    <a href="{{ url('product') }}">
                                        <span class="dropdown-item">
                                            Belum ada produk di keranjang
                                        </span>
                                    </a>
                                </li>
                                @foreach ($cart as $item)
                                    <li class="m-2">
                                        <a class="dropdown-item" href="{{ url('product/' . $item->product->slug) }}">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <img src="{{ asset('web/images/produk/' . $item->product->foto ) }}" alt="{{ $item->product->name }}" class="img-fluid" />
                                                </div>
                                                <div class="col-7">
                                                    <span id="cart-name">{{ $item->product->name }}</span><br>
                                                    <span id="cart-prize">{{ moneyFormat($item->product->dayRate) }}</span>
                                                </div>
                                                <div class="col-1">
                                                    <form method="POST" action="{{route('cart.destroy', [$item->id])}}" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-sm btn-danger btn-outline-light" type="submit">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                <div class="mt-5" id="tombol_checkout">
                                    <button class="btn btn-checkout mt-2" style="">
                                        <span class="">
                                            Check Out (<span id="total_price">Rp 0</span>)
                                        </span>
                                    </button>
                                </div>
                            </ul>
                        </div>
                    @endif
                @endauth
            </div>
            <div class="d-flex collapse" id="navbarSupportedContent">
                <div class="btn-group flex-collumn" role="group" aria-label="Basic example" id="profil_akun">
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" style="color: #0D0D0D;text-decoration: none;">
                                <button style="border: none; background-color: transparent;" class="me-2 mt-2">
                                    Login
                                </button>
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style=";text-decoration: none;" class="">
                                <button type="button" class="btn" style="background-color: #CC1522;border-radius: 10px;box-shadow: 4px 32px 13px rgba(204, 21, 34, 0.01), 2px 18px 11px rgba(204, 21, 34, 0.05), 1px 8px 8px rgba(204, 21, 34, 0.09), 0px 2px 4px rgba(204, 21, 34, 0.1), 0px 0px 0px rgba(204, 21, 34, 0.1);">
                                    <span style="font-weight: bold;" class="text-white">Sign Up</span>
                                </button>
                            </a>
                        @endif
                        @else
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="me-1" style="position: relative;bottom: 5px;">{{ Auth::user()->name }}</span>
                                        <i class="bi bi-person-circle" style="color: #CC1522;font-size: 29px;text-decoration: none;"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="position: absolute;" id="isi-list">
                                        <a class="dropdown-item" href="{{ Auth::user()->hasRole('admin') ? '/admin/dashboard' : '/dashboard' }}">
                                            <i class="bi bi-speedometer me-2"></i>Dashboard
                                        </a>
                                        <a class="dropdown-item" href="">
                                            <i class="bi bi-cart me-2"></i> Keranjang
                                        </a>
                                        <a class="dropdown-item dropdown-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-in-right me-2"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar - end
    ================================================== -->
