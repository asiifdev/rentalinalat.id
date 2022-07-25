@extends('layouts.admin.app')

@section('content')
<div>
    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#addModal" title="Tambah Kategori"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</button>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4 class="card-title text-center">Kategori <b>{{ strtoupper($judul[0]->name) }}</b></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Dibuat</th>
                                <th>Foto Kategori</th>
                                <th class="text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                            ?>
                            @foreach ($kategori as $item)                            
                            <tr>
                                <th scope="row" class="text-center">{{$no++}}</th>
                                {{-- <td class="text-primary">{{ $item->name }}</td> --}}
                                <td class="text-primary"><a href="{{ url('/admin/subcategory/' . $item->id) }}">{{ $item->name }}</a></td>
                                <td><span class="badge badge-primary">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span></td>
                                <td>
                                    @if (isset($item->foto))
                                        <img src="{{ asset('images/kategori/' . $item->foto) }}" alt="{{ $item->name }}" class="" style="height: 80px">
                                        {{-- @else ()
                                         --}}
                                    @endif
                                </td>
                                <td class="text-left">
                                    <a href="{{ url('/admin/subcategory/' . $item->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
                                    <a href="{{ url('/admin/subcategory/' . $item->id . '/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="POST" action="{{ route('subcat.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Yakin Hapus Kategori {{ $item->name }} ?')">
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
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
@endsection