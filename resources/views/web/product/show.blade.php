@extends('layouts.web.app')
@section('content')
<style>
     .img-produk-show{
        max-width: 609px;
        max-height: 499px;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .title{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        color: #0D0D0D;
    }
    .description{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        color: #0D0D0D;
    }
</style>
@foreach ($produk as $item)
    <div class="container-fluid p-5 mt-3">
        <div class="row g-3">
            <div class="col-lg-4 text-center">
                <img src="{{ asset('images/produk/' . $item->foto) }}" alt="{{ $item->name }}" class="img-fluid bg-secondary img-produk-show p-2">
            </div>
            <div class="col-lg-8 text-start">
                <figcaption class="ms-3">
                    <div class="fix-height listSearch">
                        <a href="{{ url('product/' . $item->slug) }}">
                            <span class="title">{{ $item->name }}</span>
                        </a>
                        <div class="mt-3 p-2">
                            <span class="description">{{ $item->description }}</span><br><br>
                            <span class="description">Harga Sewa</span><br>
                            <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                    class="textDay">/Day</span></span>
                        </div> <!-- price-wrap.// -->
                        <div class="row mt-3 p-2">
                            <div class="col-lg-6 col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                <div class="" id="collapse_tanggal">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
                                        class="btn-nav-accordion">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6><i class="bi bi-calendar-date me-2 filter"></i> Dari Tanggal</h6>
                                    </a>
                                </div>
                                <div class="filter-content collapse" id="collapse_2">
                                    <div class="card-body m-auto">
                                        <div class="productFromDate">
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                <header class="">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false"
                                        class="btn-nav-accordion" onclick="">
                                        <i class="icon-control fa fa-chevron-down" style="rotate"></i>
                                        <h6><i class="bi bi-calendar-date-fill me-2 filter"></i> Sampai Tanggal
                                        </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse" id="collapse_3">
                                    <div class="card-body">
                                        <div class="productToDate">
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </div>
        </div>
    </div>
@endforeach
@endsection