
<!-- Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background-color: #0B0C21;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('category.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="name"><span class="ml-2">Nama Kategori</span></label>
                                            <input type="text" name="name" class="form-control input-rounded" placeholder="Masukkan Nama Kategori" required>
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
