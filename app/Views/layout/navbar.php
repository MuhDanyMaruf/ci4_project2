<nav class="navbar">
    <div id="main">
        <?php if (isset($showButton) && $showButton) : ?>
            <button class="open-btn" onclick="openNav()">☰ </button>
        <?php endif; ?>
    </div>

    <div class="logo">
        <i class="fa-solid fa-font-owesome"></i>
        <a href="#">SHOJU</a>
    </div>
    <!-- searchbar -->
    <!-- <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search....">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div> -->
    <div class="menu">
        <div class="menu-links">
            <a href="<?= base_url('dashboard') ?>">Home <i class="i-home fi fi-rr-home"></i></a>
            <a href="katalog">Belanja <i class=" i-belanja fi fi-rr-shopping-bag "></i></a>
            <a href=" #" id="aboutLink">About <i class="i-about fi fi-rr-interrogation"></i></a>
            <a href="#">Contact <i class="i-contact fi fi-rr-phone-call"></i></a>
            <a href="#">Keranjang <i class="i-keranjang fi fi-rr-shopping-cart"></i> </a>
        </div>
        <div class="profil">
            <div class="profil-u">
                <a href="#"><?= user()->username; ?></a>

            </div>
        </div>
        <div class="menu">
            <a href="logout"><button class="log-in">Logout</button></a>
        </div>


    </div>
    <div class="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
</nav>