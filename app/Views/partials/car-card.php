<div class="car-wrap rounded ftco-animate">
    <div class="img rounded d-flex align-items-end" style="background-image: url('<?= base_url('assets/images/'.$m['gambar']) ?>');">
    </div>
    <div class="text">
        <h2 class="mb-0">
                <a href="<?= base_url('car/detail/'.$m['id']) ?>"><?= $m['nama'] ?></a>
        </h2>
        <div class="d-flex mb-3">
            <span class="cat"><?= $m['merek'] ?></span>
            <p class="price ml-auto">
                $<?= $m['harga'] ?>
                <span>/day</span>
            </p>
        </div>
            <p class="d-flex mb-0 d-block">
            <a href="<?= base_url('pricing') ?>" class="btn btn-primary py-2 mr-1">
                Booking
            </a>

            <a href="<?= base_url('cars/detail/'.$m['id']) ?>"
            class="btn btn-secondary py-2 ml-1">
                Details
            </a>
        </p>
    </div>
</div>
