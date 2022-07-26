@extends('layouts.admin.app')

@section('content')
<style>
    .dataTables_filter input {
        color: darkgray;
    }
    tbody tr td:last-child {
        text-align: center;
    }
</style>
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Produk <b>Tidak Aktif</b></h4>
                    {{-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> --}}
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Day Rate</th>
                                    <th>Foto Produk</th>
                                    {{-- <th>Barcode</th> --}}
                                    {{-- <th>Status</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Day Rate</th>
                                    <th>Foto Produk</th>
                                    {{-- <th>Barcode</th> --}}
                                    {{-- <th>Status</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($produk as $item)
                                    <tr>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ moneyFormat($item->dayRate) }}</td>
                                        <td>
                                            @if (isset($item->foto))
                                                <img src="{{ asset('images/produk/' . $item->foto) }}" alt="{{ $item->name }}" class="" style="height: 80px">
                                                {{-- @else ()
                                                --}}
                                            @endif    
                                        </td>
                                        {{-- <td>{!! $item->barcode !!}</td> --}}
                                        {{-- <td>
                                            @if ($item->status == 'Active')
                                                <span class="badge badge-primary">{{ $item->status }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ $item->status }}</span>
                                            @endif
                                        </td> --}}
                                        <td class="text-left">
                                            <a href="{{ url('/admin/product/' . $item->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{ url('/admin/product/' . $item->id . '/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <form method="POST" action="{{route('product.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Yakin Hapus Produk {{ $item->name }} ?')">
                                                @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
@endsection
