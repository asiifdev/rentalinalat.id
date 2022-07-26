@extends('layouts.admin.app')

@section('content')
    @foreach ($show as $item)
        <div class="card" style="background-color: #0B0C21;">
            <div class="card-header">
                <h5 class="card-title ml-2" id="exampleModalLabel">Produk {{ $item->name }}</h5>
                <p class="card-title ml-2" id="exampleModalLabel">Kode Produk {{ $item->kode }}</p>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-md-3"><img src="{{ asset('images/produk/' . $item->foto) }}"
                                alt="{{ $item->name }}" class="rounded" style="height: 130px"></div>
                        <div class="col-md-8 ms-auto text-left mt-3">
                            <h4> {{ $item->name }} </h4>
                            <p>{{ $item->description }}</p>
                            <h6 style="font-weight: bolder;">Day Rate: {{ moneyFormat($item->dayRate) }} /Hari</h6>
                        </div>
                    </div>
                    <div class="" style="width: 100%;
                    border: 1px solid rgb(233, 233, 233);
                    padding: 30px;">
                        <div class="row">
                            <div class="col">
                                Kategori
                            </div>
                            <div class="col">
                                =
                            </div>
                            <div class="col">
                                {{ $item->category->name }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Stock Produk
                            </div>
                            <div class="col">
                                =
                            </div>
                            <div class="col">
                                {{ $item->stock }} Buah
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Status
                            </div>
                            <div class="col">
                                =
                            </div>
                            <div class="col">
                                {{ $item->status }}
                            </div>
                        </div>
                        <hr style="color: white; background-color: white;">
                        <div class="row">
                            <div class="col">
                                Dibuat:
                                {{ $item->created_at }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('admin/product') }}">
            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Product Details">Back To Overview</button>
        </a>
    @endforeach
@endsection
