
{{-- Modal Sub Kategori --}}
<div class="modal fade" id="addsub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background-color: #0B0C21;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kategori</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('subcat.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="name"><span class="ml-2">Nama Kategori</span></label>
                                            <input type="text" name="name" class="form-control input-rounded" placeholder="Masukkan Nama Kategori" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="id"><span class="ml-2">Kategori Induk</span></label>
                                            <select name="id" id="id" class="form-control">
                                                @if (request()->is('admin/subcategory'))
                                                    @foreach ($sub as $item)
                                                        <option value="{{ $item->id }}" name="id">{{ $item->name }}</option>
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
