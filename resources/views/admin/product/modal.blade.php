
<!-- Modal -->
@if(request()->is('admin/product'))
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
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
@endif
<div class="modal fade" id="addModalProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content mt-3" style="background-color: #0B0C21;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="kode"><span class="ml-2">Kode Produk</span></label>
                                            <input type="number" name="kode" class="form-control input-rounded" placeholder="Masukkan Kode Produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"><span class="ml-2">Nama Produk</span></label>
                                            <input type="text" name="name" class="form-control input-rounded" placeholder="Masukkan Nama Produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"><span class="ml-2">Deskripsi Produk</span></label>
                                            <textarea name="description" id="description" class="form-control" style="height: 200px;" placeholder="Masukkan Deskripsi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="dayrate"><span class="ml-2">Harga Produk / hari</span></label>
                                            <input type="number" name="dayrate" class="form-control input-rounded" placeholder="Masukkan Harga Produk" required>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('category','Kategori Induk :') !!}
                                            <select name="categoryy" id="categoryy" class="form-control input-rounded">
                                                @if(request()->is('admin/product'))
                                                <option value="" disabled selected> --- </option>
                                                    @foreach($s as $k)
                                                        <option value="{{ $k['id'] }}">{{ $k['name'] }}</option>
                                                    @endforeach  
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('subcategory','Kategori:') !!}
                                            <select name="category_id" id="subcategoryy" class="form-control input-rounded " required>
                                                <option value="" disabled selected> <span style="color: #453;">-- Pilih Kategori Induk Terlebih Dahulu --</span> </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status"><span class="ml-2">Status Produk</span></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="" disabled selected> ---</option>
                                                @if (request()->is('admin/product'))
                                                    @foreach($enum as $status)
                                                        <option value="{{ $status }}">{{ $status }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group mt-1">
                                            <label for="foto" class="ml-2">Foto Produk</label>
                                            <input class="form-control input-rounded d-flex" type="file" id="foto" name="foto" accept=".jpg,.png,.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>