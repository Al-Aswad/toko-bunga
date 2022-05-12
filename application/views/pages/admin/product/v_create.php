<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Product</h3>
        </div>

        <form method="POST" action="{{ route('products-store') }}">

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input value="" name="name" type="text" class="form-control" id="name" placeholder="Masukkan nama barang">

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input value="" name="qty" type="number" class="form-control" id="qty" placeholder="Masukkan nama barang">

                    <small class="text-danger">
                        test
                    </small>

                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input value="" name="price" type="number" class="form-control" id="price" placeholder="Masukkan nama barang">

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input name="status" type="text" class="form-control" id="status" value="{{ old('status') ? old('status'):"" }}" placeholder="Masukkan Status(PO,Stok Ready)">

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control">
                        <option class="text-muted">Pilih Kategori</option>
                    </select>

                    <small class="text-danger">

                    </small>

                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <textarea name="detail" value="{{ old('detail')? old('detail') :'' }}" class="ckeditor form-control" rows="3" placeholder="Enter ..."></textarea>

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