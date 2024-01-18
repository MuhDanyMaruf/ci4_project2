<?php foreach ($namapakaian as $p) : ?>
    <div class="modal fade" id="edit<?= $p['idpakaian']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Items</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
                </div>

                <!-- Modal body -->
                <form action="<?= base_url('/inventory/update/' . $p['idpakaian']) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $p['idpakaian']; ?>" class="form-control" required>
                        <br>
                        <input type="text" name="namapakaian" value="<?= $p['namapakaian']; ?>" class="form-control" required>
                        <br>
                        <input type="text" name="kode_pakaian" value="<?= $p['kode_pakaian']; ?>" class="form-control" required>
                        <br>
                        <input type="text" name="deskripsi" value="<?= $p['deskripsi']; ?>" class="form-control" required>
                        <br>
                        <input type="file" name="gambar" id="gambar">
                        <button type="submit" class="btn btn-primary" name="updatebarang">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>