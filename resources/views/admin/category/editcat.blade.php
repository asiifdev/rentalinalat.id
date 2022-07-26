@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        @foreach ($subkategori as $item)
                        <form action="{{ route('category.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name"><span class="ml-2">Nama Kategori</span></label>
                                <input type="text" value="{{ $item->name }}" name="name" class="form-control input-rounded" placeholder="Masukkan Nama Kategori" required>
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
                    <a href="{{ url('admin/category/')}}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection