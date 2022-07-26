@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        @foreach ($subkategori as $item)
                        <form action="{{ route('subcat.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name"><span class="ml-2">Nama Kategori</span></label>
                                <input type="text" value="{{ $item->name }}" name="name" class="form-control input-rounded" placeholder="Masukkan Nama Kategori" required>
                            </div>
                            <div class="form-group">
                                <label for="id"><span class="ml-2">Kategori Induk</span></label>
                                <select name="id" id="id" class="form-control">
                                    <option value="{{ $item->children->id }}" name="id" disabled selected required>{{ $item->children->name }}</option>
                                    @if (request()->is('admin/subcategory/' . $item->id . '/edit'))
                                    @foreach ($sub as $s)
                                            <option value="{{ $s->id }}" name="id">{{ $s->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mt-1">
                                <label for="foto" class="ml-2">Foto Kategori</label>
                                <input class="form-control input-rounded d-flex" type="file" id="foto" name="foto" accept=".jpg,.png,.jpeg">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card-footer">
                    <a href="{{ url('admin/subcategory/')}}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection