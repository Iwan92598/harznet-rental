<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
	<a class="navbar-brand" href="#">Harznet<span> Rental</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="oi oi-menu"></span> Menu
	</button>

	<div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav ml-auto">
    <li class="nav-item <?= uri_string() == '/' ? 'active' : '' ?>">
        <a href="<?= base_url('/') ?>" class="nav-link">Beranda</a>
    </li>

    <li class="nav-item <?= uri_string() == 'about' ? 'active' : '' ?>">
        <a href="<?= base_url('about') ?>" class="nav-link">Tentang</a>
    </li>

    <li class="nav-item <?= uri_string() == 'services' ? 'active' : '' ?>">
        <a href="<?= base_url('services') ?>" class="nav-link">Layanan</a>
    </li>

    <li class="nav-item <?= uri_string() == 'pricing' ? 'active' : '' ?>">
        <a href="<?= base_url('pricing') ?>" class="nav-link">Harga</a>
    </li>

    <li class="nav-item <?= uri_string() == 'cars' ? 'active' : '' ?>">
        <a href="<?= base_url('cars') ?>" class="nav-link">Mobil</a>
    </li>

    <!-- <li class="nav-item <?= uri_string() == 'blog' ? 'active' : '' ?>">
        <a href="<?= base_url('blog') ?>" class="nav-link">Blog</a>
    </li> -->

    <li class="nav-item <?= uri_string() == 'contact' ? 'active' : '' ?>">
        <a href="<?= base_url('contact') ?>" class="nav-link">Kontak</a>
    </li>
</ul>
	</div>
</div>
</nav>
    <!-- END nav -->

    <!-- car -->
    <!-- about -->
    <!-- blog-single -->
    <!-- blog -->
    <!-- car-single -->
     <!-- contact -->
     <!-- pricing -->
    <!-- services -->