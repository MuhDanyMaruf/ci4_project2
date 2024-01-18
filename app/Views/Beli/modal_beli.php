<?php foreach ($namapakaian as $p) : ?>
    <div class="modal fade" id="beli<?= $p['idpakaian']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Beli Pakaian</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="<?= base_url('/beli_katalog/orderPakaian') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Bayar dengan scan QR dibawah dengan DANA untuk membeli <?= $p['namapakaian']; ?>
                        <p id="totalHargaModal">Total Harga = Rp. 0 </p><br>
                        <img src="<?= base_url('QRS/QRS_DANA.png') ?>" width="300">
                        <input type="hidden" name="id_user" value="<?= user()->id; ?>" class="form-control" required>
                        <input type="hidden" name="id_pakaian" value="<?= $p['idpakaian']; ?>" class="form-control" required>
                        <br>
                        <input type="file" name="gambar" class="form-control" placeholder="Bukti Pembayaran" required>
                        <br>
                        <label for="jumlahBeli">Jumlah Beli:</label>
                        <input type="number" name="jumlah_beli" id="jumlahBeliInput" class="form-control" required>
                        <br>
                        <input type="hidden" name="harga_pakaian" value="<?= $p['hargapakaian']; ?>" id="hargaPakaian">
                        <input type="hidden" name="total_harga" id="totalHargaInput" value="0">
                        <button type="submit" class="btn btn-primary" name="addnewtransaksi">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        // Hitung total harga secara dinamis berdasarkan jumlah beli
        document.getElementById('jumlahBeli').addEventListener('input', function() {
            var jumlahBeli = this.value;
            var hargaPakaian = <?= $p['hargapakaian']; ?>;
            var totalHarga = jumlahBeli * hargaPakaian;
            document.getElementById('totalHargaModal').innerText = 'Total Harga = Rp. ' + totalHarga;
            document.getElementById('totalHarga').value = value + totalHarga;
        });
    </script>
<?php endforeach; ?>
