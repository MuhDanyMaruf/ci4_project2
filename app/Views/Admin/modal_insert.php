<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post" action="<?= base_url('/inventory/insert') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" name="namapakaian" placeholder="Name of Goods" class="form-control" required>
                    <br>
                    <input type="text" name="deskripsi" placeholder="Description" class="form-control" required>
                    <br>
                    <input type="text" name="ukuran" placeholder="Size" class="form-control" required>
                    <br>
                    <input type="text" name="warna" placeholder="Color" class="form-control" required>
                    <br>
                    <input type="text" name="kode_pakaian" placeholder="Code Goods" class="form-control" required>
                    <br>
                    <input type="number" name="stok" class="form-control" placeholder="Stock" required>
                    <br>
                    <input type="number" name="hargapakaian" class="form-control" placeholder="Price" required>
                    <br>
                    <input type="file" name="gambar" class="form-control" placeholder="Gambar Pakaian" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>