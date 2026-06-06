<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url("assets/images/bg_3.jpg") ?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
		<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Mobil <i class="ion-ios-arrow-forward"></i></span></p>
		<h1 class="mb-3 bread">Pilih Mobil anda</h1>
		</div>
	</div>
	</div>
</section> -->


<?= view('partials/page-header', [
    'page' => 'Mobil',
    'titlePage' => 'Pilih Mobil Anda'
]) ?>


<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			
			<?php foreach ($mobil as $m): ?>
				<div class="col-md-4">
				    <?= view('partials/car-card', ['m' => $m]) ?>
					</div>
			<?php endforeach; ?>
			
		</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>

							<?php if ($currentPage > 1): ?>
								<li>
									<a href="?page=<?= $currentPage - 1 ?>">
										&lt;
									</a>
								</li>
							<?php endif; ?>

							<?php for ($i = 1; $i <= $totalPages; $i++): ?>

								<li class="<?= ($i == $currentPage) ? 'active' : '' ?>">

									<?php if ($i == $currentPage): ?>
										<span><?= $i ?></span>
									<?php else: ?>
										<a href="?page=<?= $i ?>">
											<?= $i ?>
										</a>
									<?php endif; ?>

								</li>

							<?php endfor; ?>

							<?php if ($currentPage < $totalPages): ?>
								<li>
									<a href="?page=<?= $currentPage + 1 ?>">
										&gt;
									</a>
								</li>
							<?php endif; ?>

						</ul>
					</div>
				</div>
			</div>
	</div>
</section>
<?= $this->endSection(); ?>

