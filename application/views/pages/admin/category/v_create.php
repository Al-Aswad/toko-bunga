<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Category</h3>
        </div>

        <form method="POST" action="<?= base_url('') . 'admin/category-store' ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input value="" name="name" type="text" class="form-control" id="name" placeholder="Masukkan category">
                    <small class="text-danger">

                    </small>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>