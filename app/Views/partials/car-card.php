<div class="car-wrap rounded ftco-animate">
    <div class="img rounded d-flex align-items-end" style="background-image: url('<?= base_url('assets/images/'.$m['gambar']) ?>');">
    </div>

    <div class="text">
        <h2 class="mb-0">
            <a href="<?= base_url('cars/detail/'.$m['id']) ?>"><?= esc($m['nama']) ?></a>
        </h2>

        <div class="d-flex mb-3">
            <span class="cat"><?= esc($m['merek']) ?></span>

            <p class="price ml-auto">
                Rp <?= number_format($m['harga_per_hari'], 0, ',', '.') ?>
                <span>/hari</span>
            </p>
        </div>

        <small class="text-muted d-block mb-3">
            Jam: Rp <?= number_format($m['harga_per_jam'], 0, ',', '.') ?>
            |
            Minggu:
            <?= $m['harga_per_minggu'] > 0
                ? 'Rp '.number_format($m['harga_per_minggu'], 0, ',', '.')
                : 'Coming Soon' ?>
        </small>

        <p class="d-flex mb-0">
            <a href="<?= base_url('pricing') ?>"
               class="btn btn-primary py-2 mr-1">
                Booking
            </a>

            <a href="<?= base_url('cars/detail/'.$m['id']) ?>"
               class="btn btn-secondary py-2 ml-1">
                Details
            </a>
        </p>
    </div>
</div>
