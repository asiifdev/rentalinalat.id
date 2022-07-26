@extends('layouts.admin.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function tambahfoto() {
        $(".foto-produk").trigger('click');
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () { 
            $('#categoryy').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
                if(data != 0) {
                    console.log(data);
                    //success data
                    var subcat =  $('#subcategoryy').empty();
                    $.each(data,function(create,subcatObj){
                        var option = $('<option/>', {id:create, value:subcatObj});
                        subcat.append('<option value ="'+subcatObj.id+'" required>'+subcatObj.name+'</option>');
                    });
                }
                else{
                    
                    var subcat =  $('#subcategoryy').empty();
                    $.confirm({
                        animation: 'zoom',
                        closeAnimation: 'scale',
                        title: 'Data Kategori Belum ada',
                        content: 'Silahkan Buat Terlebih Dahulu',
                        buttons: {
                            Baik: function () {
                                // $.alert('Confirmed!');
                                window.location="subcategory";
                            },
                            'Nanti Saja': function () {
                                // $.alert('Canceled!');
                            }
                        }
                    });
                }
            });
        });
    });
</script>
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        @foreach ($produk as $item)
                        <form action="{{ url('admin/product/' . $item->id . '/update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="kode"><span class="ml-2">Kode Produk</span></label>
                                    <input type="number" name="kode" value="{{ $item->kode }}"
                                        class="form-control input-rounded" placeholder="Masukkan Kode Produk" required>
                                </div>
                                <div class="form-group">
                                    <label for="stock"><span class="ml-2">Stock</span></label>
                                    <input type="number" name="stock" value="{{ $item->stock }}"
                                        class="form-control input-rounded" placeholder="Masukkan Stock Produk" required>
                                </div>
                                <div class="form-group">
                                    <label for="name"><span class="ml-2">Nama Produk</span></label>
                                    <input type="text" name="name" value="{{ $item->name }}"
                                        class="form-control input-rounded" placeholder="Masukkan Nama Produk" required>
                                </div>
                                <div class="form-group">
                                    <label for="description"><span class="ml-2">Deskripsi Produk</span></label>
                                    <textarea name="description" id="description" class="form-control" style="height: 200px;"
                                        placeholder="Masukkan Deskripsi">{{ $item->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="dayrate"><span class="ml-2">Harga Produk / hari</span></label>
                                    <input type="number" name="dayrate" value="{{ $item->dayRate }}"
                                        class="form-control input-rounded" placeholder="Masukkan Harga Produk" required>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category', 'Kategori Induk :') !!}
                                    <select name="categoryy" id="categoryy" class="form-control input-rounded">
                                        @if (request()->is('admin/product/' . $item->id . '/edit'))
                                            @foreach ($kategori as $b)
                                                <option value="{{ $b->children->id }}" disabled selected>
                                                    {{ $b->children->name }} </option>
                                            @endforeach
                                            @foreach ($s as $k)
                                                <option value="{{ $k['id'] }}">{{ $k['name'] }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('subcategory', 'Kategori:') !!}
                                    <select name="category_id" id="subcategoryy" class="form-control input-rounded " required>
                                        <option value="{{ $item->category->id }}"selected>{{ $item->category->name }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status"><span class="ml-2">Status Produk</span></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="{{ $item->status }}"selected>{{ $item->status }}</option>
                                        @if (request()->is('admin/product/' . $item->id . '/edit'))
                                            @foreach ($enum as $status)
                                                <option value="{{ $status }}">{{ $status }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group mt-1">
                                    <label for="foto" class="ml-2">Foto Produk</label>
                                    <div>
                                        <img src="{{ asset('images/produk/' . $item->foto) }}" height="100"
                                            alt="" class="ml-2 mr-2">
                                        <a class="btn btn-primary" onclick="tambahfoto()">Ganti Foto Produk</a>
                                        <p class="ml-2 mt-2">{{ $item->foto }}</p>
                                    </div>
                                    <input class="form-control input-rounded d-flex foto-produk" type="file"
                                        id="foto" name="foto" accept=".jpg,.png,.jpeg" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ url('admin/product') }}" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Product Details">Back To Overview</a>
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </div>
                    </form>
                    @endforeach
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
@endsection
