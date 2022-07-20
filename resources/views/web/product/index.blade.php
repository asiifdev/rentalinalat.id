@extends('layouts.web.app')
@section('content')
<style>
    .ui-datepicker-header a.ui-datepicker-next {
        right: 0;
        background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
        background-repeat: no-repeat;
        background-size: 10px;
        background-position: 50%;
        top: 35px;
    }
    .ui-datepicker-header a.ui-datepicker-prev {
        right: 0;
        background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==);
        background-repeat: no-repeat;
        background-size: 10px;
        background-position: 50%;
        top: 35px;
    }
</style>
    <div class="container mt-5">
        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true"
                                class="" onclick="tampilkan();">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Dari Tanggal</h6>
                            </a>
                        </header>
                        <div class="datepickerr" id="collapse_2"></div>
                    </article> <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Product type</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                <ul class="list-menu">
                                    <li><a href="#">People </a></li>
                                    <li><a href="#">Watches </a></li>
                                    <li><a href="#">Cinema </a></li>
                                    <li><a href="#">Clothes </a></li>
                                    <li><a href="#">Home items </a></li>
                                    <li><a href="#">Animals</a></li>
                                    <li><a href="#">People </a></li>
                                </ul>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">More filter </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse in" id="collapse_5" style="">
                            <div class="card-body">
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" checked=""
                                        class="custom-control-input">
                                    <div class="custom-control-label">Any condition</div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Brand new </div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Used items</div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Very old</div>
                                </label>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                </div> <!-- card.// -->

            </aside>
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <div class="row mt-lg-0 mt-3">
                            <div class="col-lg-9">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-outline-danger" data-toggle="tooltip" title=""
                                        data-original-title="List view">
                                        <i class="fa fa-bars"></i></a>
                                    <a href="#" class="btn  btn-danger active" data-toggle="tooltip"
                                        title="" data-original-title="Grid view">
                                        <i class="fa fa-th"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <form class="pb-3">
                                    <div class="input-group rounded">
                                        <span class="input-group-text border-0 mt-2" id="search-addon">
                                          <i style="" class="bi bi-search"></i>
                                        </span>
                                        <input type="search" class="form-control rounded border-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </header><!-- sect-heading -->

                <div class="row">
                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk1.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Great item name goes here</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                        <del class="price-old">$1980</del>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk2.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk3.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk4.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk5.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk6.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk7.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="{{ asset('web/images/produk/produk8.png') }}"
                                    class="img-fluid">
                                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Product name goes here just for demo item</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-danger">Add to cart </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                </div> <!-- row end.// -->
            </main>
        </div>
    </div>
@endsection
