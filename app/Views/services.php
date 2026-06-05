<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>

<?= view('partials/page-header', [
    'page' => 'Layanan',
    'titlePage' => 'Layanan Kami'
]) ?>

<?= view('partials/services-card') ?>
<?= view('partials/driver-card') ?>
<?= $this->endSection(); ?>