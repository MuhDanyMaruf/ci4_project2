<?= $this->extend('layout/template'); ?>
<?= $this->section('menu'); ?>



<div class="body">
    <div class="sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <h2>Categories</h2>
        <a href="#" onclick="filterItems('baju')">Baju</a>
        <a href="#" onclick="filterItems('celana')">Celana</a>
        <a href="#" onclick="filterItems('dress')">Dress</a>
        <h2>Ukuran</h2>
        <label><input type="checkbox" onclick="filterItemsBySize('s')"> S</label>
        <label><input type="checkbox" onclick="filterItemsBySize('m')"> M</label>
        <label><input type="checkbox" onclick="filterItemsBySize('l')"> L</label>
        <label><input type="checkbox" onclick="filterItemsBySize('xl')"> XL</label>
    </div>

    <div class="background" id="main">
        <div class="centering">

            <div class="articles">
                <div class="card-katalog">
                    <div class="image-container">
                        <img class="gambar" src="image/p1.jpg" alt="Profile Photo">
                    </div>
                    <div class="content-katalog">
                        <h2 class="nama-produk">stok</h2>
                        <p class="harga">1.000</p>
                        <p class=" deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo consequatur ratione
                            distinctio et nihil impedit consectetur vitae quo odio?</p>
                    </div>
                    <div class="button-beli">
                        <a class="beli" href="#">
                            <i>beli</i>
                        </a>
                    </div>
                </div>

                <article class="card-katalog">
                    <div class="image-container">
                        <img class="gambar-katalog" src="image/p2.jpeg" alt="Profile Photo">
                    </div>
                    <div class="content-katalog">
                        <h2 class="nama-produk">stok</h2>
                        <p class="harga">1.000</p>
                        <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo consequatur ratione
                            distinctio et nihil impedit consectetur vitae quo odio?</p>
                    </div>
                    <div class="button-beli">
                        <a class="beli" href="#">
                            <i>beli</i>
                        </a>
                    </div>
                </article>

                <article class="card-katalog">
                    <div class="image-container">
                        <img src="image/p3.jpeg" alt="Profile Photo">
                    </div>
                    <div class="content-katalog">
                        <h2 class="nama-produk">Jane Doe</h2>
                        <p class="harga">1.000</p>
                        <p class="deskripsi">Lorem ipsum dolo1.000etur adipisicing elit. Ea nemo consequatur ratione
                            distinctio et nihil impedit consectetur vitae quo odio?</p>
                    </div>
                    <div class="button-beli">
                        <a class="beli" href="#">
                            <i>beli</i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </div>
</div>
</div>

<div class="background-modal" onclick="toggleModal()"></div>

<div class="modal">
    <div class="modal-content">
        <h2><?php  ?></h2>
        <p>
            You have opened the modal, they are great for confirming actions or
            displaying critical information.
        </p>
    </div>
</div>

<?= $this->endSection(); ?>