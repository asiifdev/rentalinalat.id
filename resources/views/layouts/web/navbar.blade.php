<link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            count();
            cart();
        });
        function count(){
            var id = $('#id_user').val();
            console.log(id);
            $.ajax({
                type:'GET',
                url:'/ajax/cart-count?user_id=' + id,
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                    $("#cart-total").text(data);
                    console.log($("#status").text());
                }
            });
        }
        function cart(){
            var id = $('#id_user').val();
            // console.log(id);
            $.get('/ajax/cart-navbar?user_id=' + id,function(data) {
                    // $("#cart-total").text(data);
                    $.each(data,function(){
                        $.each(this,function(index, value){
                            $('li a div .col-8 #cart-name').each(function(){
                                console.log(value.name);
                                $( this ).text(value.name);
                            });
                        });
                    });
                }
            );
        }
    </script>
    
    <!-- Navbar - start
    ================================================== -->
    @auth
        <input type="text" disabled hidden value="{{ auth()->user()->id }}" id="id_user" name="id_user">
    @endauth
    <nav class="navbar sticky-top navbar-expand-lg mt-1 navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="{{ url('/') }}">
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
                        <a class="nav-link{{ request()->is('product*') ? ' active' : '' }}" href="{{ route('produk') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="#">Contact Us</a>
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
                        <ul class="dropdown-menu cart-menu" aria-labelledby="dropdownMenuLink">
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
                            <a href="" style="color: #CC1522;font-size: 27px;text-decoration: none;" class="m-1 search-navbar" role="button" data-toggle="collapse" data-target="#searchnavbar" aria-expanded="false">
                                <i class="bi bi-search"></i>
                            </a>

                            <a href="" style="color: #CC1522;font-size: 28px;" class="m-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-cart3"></i><span id="cart-total" class="badge rounded-pill badge-notification bg-danger count-cart" style="">0</span>
                            </a>
                            <ul class="dropdown-menu cart-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">  
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="{{ asset('web/images/logo.png') }}" alt="" />
                                            </div>
                                            <div class="col-8">
                                                <span id="cart-name">Nama Item</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                @endauth
            </div>
            <div class="d-flex align-items-center me-4 collapse" id="navbarSupportedContent">
                <div class="btn-group flex-collumn" role="group" aria-label="Basic example">
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
                                    <a class="nav-link dropdown-toggle mb-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="me-1" style="position: relative;bottom: 5px;">{{ Auth::user()->name }}</span>
                                        <i class="bi bi-person-circle" style="color: #CC1522;font-size: 29px;text-decoration: none;"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ Auth::user()->hasRole('admin') ? '/admin/dashboard' : '/dashboard' }}">
                                            <i class="bi bi-speedometer me-2"></i>Dashboard
                                        </a>
                                        <a class="dropdown-item" href="">
                                            <i class="bi bi-cart me-2"></i> Keranjang
                                        </a>
                                        <a class="dropdown-item dropdown-logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
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
    <div class="ms-5 me-5 collapse ps-5 pe-5" id="searchnavbar">
        <input type="text" class="p-1 form-control" placeholder="cari">
    </div>

    <!-- Navbar - end
    ================================================== -->