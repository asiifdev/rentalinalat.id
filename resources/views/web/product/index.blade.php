@extends('layouts.web.app')
@section('content')
    <script>
        function row() {
            $('#row').css('display', '');
            $('#grid').css('display', 'none');
            $('#btn-row').removeClass('btn-outline-danger').addClass('btn-danger active');
            $('#btn-grid').removeClass('btn-danger active').addClass('btn-outline-danger');
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $("#row #data").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }

        function grid() {
            $('#grid').css('display', '');
            $('#row').css('display', 'none');
            $('#btn-grid').removeClass('btn-outline-danger').addClass('btn-danger active');
            $('#btn-row').removeClass('btn-danger active').addClass('btn-outline-danger');
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $("#grid #data").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }
    </script>
    <script>
        $(document).ready(function() {
           grid(); 
        });
    </script>
    <style>
        .productFromDate .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
            top: 35px;
        }

        .productFromDate .ui-datepicker-header a.ui-datepicker-prev {
            right: 0;
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
            top: 35px;
        }

        .productToDate .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
            top: 400px;
        }

        .productToDate .ui-datepicker-header a.ui-datepicker-prev {
            right: 0;
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
            top: 400px;
        }

        .btn-nav-accordion[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        .btn-nav-accordion[aria-expanded="true"] .title {
            color: #CC1522;
            font-weight: 800;
        }

        .kategori[aria-expanded="true"] .fa-chevron-right {
            transform: rotate(-90deg);
        }

        .kategori[aria-expanded="true"] .title {
            color: #CC1522;
            font-weight: 800;
        }

        .card-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            background-color: transparent;
            border: none;
            /* border-bottom: 1px solid #CC1522 !important; */
        }

        .collapse_1 {
            border: 1px solid #CC1522 !important;
        }

        .tanggal {
            /* border: 1px solid #CC1522 !important; */
            margin-bottom: 20px;
        }

        .card {
            border: none;
        }

        .filter-content {
            margin-top: 0px;
        }
    </style>
    <div class="container-fluid p-lg-5 p-0 mt-5 mt-md-0 mt-lg-0">
        <div class="row p-lg-5 p-4">
            <aside class="col-md-5 col-xxl-3 col-lg-4 mt-lg-5 mt-md-5">
                <div class="card mt-lg-5 mt-md-5">
                    <div class="tanggal d-inline-block">
                        <article class="filter-group">
                            <header class="card-header" id="collapse_tanggal">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
                                    class="btn-nav-accordion">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title"><i class="bi bi-calendar-date me-2 filter"></i> Dari Tanggal</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse_2">
                                <div class="card-body m-auto">
                                    <div class="productFromDate">

                                    </div>
                                </div>
                            </div>
                        </article> <!-- filter-group  .// -->

                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false"
                                    class="btn-nav-accordion" onclick="">
                                    <i class="icon-control fa fa-chevron-down" style="rotate"></i>
                                    <h6 class="title"><i class="bi bi-calendar-date-fill me-2 filter"></i> Sampai Tanggal
                                    </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse_3">
                                <div class="card-body">
                                    <div class="productToDate">

                                    </div>
                                </div>
                            </div>
                        </article> <!-- filter-group  .// -->
                        <div class="m-auto p-2 text-center">
                            <button class="btn btn-custom" style="width: 100%;">
                                FILTER
                            </button>
                        </div>
                    </div>
                    <article class="filter-group collapse_1">
                        <header class="card-header text-center m-auto">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                class="btn-nav-accordion">
                                {{-- <i class="icon-control fa fa-chevron-down mb-2"></i> --}}
                                <h6 class="title mt-2"><b>Kategori</b></h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                <ul class="list-menu ms-3">
                                    @foreach ($kategori as $item)
                                        <li>
                                            <article class="filter-group">
                                                <header class="">
                                                    <a href="#" data-toggle="collapse"
                                                        data-target="#{{ Str::slug($item->name) }}" aria-expanded="false"
                                                        class="kategori">
                                                        <i class="icon-control fa fa-chevron-right"></i>
                                                        <h6 class="title">{{ $item->name }}</h6>
                                                    </a>
                                                </header>
                                                <div class="filter-content collapse mt-0" id="{{ Str::slug($item->name) }}"
                                                    style="">
                                                    <div class="card-body">
                                                        <ul class="list-menu">
                                                            @foreach ($item->parent->sortBy('name') as $s)
                                                                <li><a href="#">{{ ucwords($s->name) }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div> <!-- card-body.// -->
                                                </div>
                                            </article> <!-- filter-group  .// -->
                                        </li>
                                    @endforeach
                                </ul>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                </div> <!-- card.// -->

            </aside>
            <main class="col-md-7 col-lg-8">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <div class="row mt-lg-0 mt-3">
                            <div class="col-lg-8 col-md-5 col-sm-3 col-xs-4 mt-md-2 mt-2">
                                <div class="btn-group">
                                    <button class="btn btn-outline-danger" onclick="row();" id="btn-row">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <button href="#" class="btn  btn-danger active" onclick="grid();" id="btn-grid">
                                        <i class="fa fa-th"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-4">
                                <form class="pb-3">
                                    <div class="input-group rounded">
                                        <span class="input-group-text border-0 mt-2" id="search-addon">
                                            <i style="" class="bi bi-search"></i>
                                        </span>
                                        <input type="search" class="form-control rounded border-0 boxSearch" placeholder="Cari Produk"
                                            aria-label="Search" aria-describedby="search-addon" id="search" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </header><!-- sect-heading -->
                <div class="row text-center" id="grid">
                    @foreach ($produk as $item)
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-4" id="data">
                            <figure class="card card-product-grid">
                                <div class="img-wrap" style="height: 216px">
                                    <img src="{{ asset('images/produk/' . $item->foto) }}" class="img-fluid img-produk">
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height listSearch">
                                        <a href="{{ url('product/' . $item->slug) }}" class="title" id="nama-produk"><b>{{ $item->name }}</b></a>
                                        <div class="price-wrap mt-4">
                                            <span class="textProduct">Harga Sewa</span><br>
                                            <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                                    class="textDay">/Day</span></span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div> <!-- row end.// -->
                <div class="row text-center" id="row">
                    @foreach ($produk as $item)
                        <div class="col-lg-12 card card-product-grid m-2" id="data">
                            <div class="row row_item">
                                <div class="col-sm-4">
                                    <figure>
                                        {{-- <span class="ribbon off">-30%</span> --}}
                                        <a href="{{ url('product/' . $item->slug) }}">
                                            <img class="img-fluid lazy img-produk" src="{{ asset('images/produk/' . $item->foto) }}" data-src="{{ $item->name }}" alt="" style="height: 100%;width: 100%">
                                        </a>
                                        {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                                    </figure>
                                </div>
                                <div class="col-sm-8 text-start m-auto listSearch">
                                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star"></i></div>
                                    <a href="{{ url('product/' . $item->slug) }}" class="title">
                                        <b>{{ $item->name }}</b>
                                    </a>
                                    <p class="textProduct">{{ $item->description }}</p>
                                    <div class="price-wrap mt-4">
                                        <span class="textProduct">Harga Sewa</span><br>
                                        <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                                class="textDay">/Day</span></span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- row end.// -->
            </main>
        </div>
    </div>
    <section style="height: 130px;"></section>
@endsection
