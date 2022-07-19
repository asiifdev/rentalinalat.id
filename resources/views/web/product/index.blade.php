@extends('layouts.web.app')
@section('content')
    <div class="container-fluid mt-5">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-7 text-start">
                    <i class="filter-produk bi bi-grid"></i>
                    <i class="filter-produk bi bi-list-ul"></i>
                </div>
                <div class="col-lg-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Alat Sewaan" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12" style="border-right: 6px solid #CC1522;">
                <div class="d-flex flex-column flex-shrink-0 p-5">
                    <span>Date</span>
                    <div class="mt-2">
                        <i class="bi bi-calendar-date me-2" style="font-size: 20px;"></i>
                        <span style="font-weight: 400;font-size: 16px;">Dari Tanggal</span>
                        <img src="{{ asset('web/icon/arrow.svg') }}" alt="" class="btn p-2" style="margin-top: 5px;" align="right" onclick="pilihtanggal()">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 p-5">
                <div class="p-5">
                    <h1>DAFTAR PRODUK</h1>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
