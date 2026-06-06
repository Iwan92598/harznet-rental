<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url("assets/images/bg_3.jpg") ?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
		<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Harga <i class="ion-ios-arrow-forward"></i></span></p>
		<h1 class="mb-3 bread">Harga</h1>
		</div>
	</div>
	</div>
</section> -->

<?= view('partials/page-header', [
    'page' => 'Harga',
    'titlePage' => 'Harga'
]) ?>


<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Per jam</th>
						        <th class="bg-dark heading">Per Hari</th>
						        <th class="bg-black heading">Per Minggu</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php foreach ($mobil as $m): ?>
									<tr>

										<td class="car-image">
											<div class="img"
												style="background-image:url('<?= base_url('assets/images/' . $m['gambar']) ?>');">
											</div>
										</td>

										<td class="product-name">
											<h3><?= esc($m['nama']) ?></h3>

											<p class="mb-0 rated">
												<span>rated:</span>
												<span class="ion-ios-star"></span>
												<span class="ion-ios-star"></span>
												<span class="ion-ios-star"></span>
												<span class="ion-ios-star"></span>
												<span class="ion-ios-star"></span>
											</p>
										</td>

										<!-- PER JAM -->
										<td class="price">
											<p class="btn-custom">
												<a href="https://wa.me/6285168822220?text=Saya%20ingin%20rental%20<?= urlencode($m['nama']) ?>%20Beberapa%20jam"
												target="_blank">
													Rental
												</a>
											</p>

											<div class="price-rate">
												<h3>
													<span class="num">
														<span class="currency">Rp </span>
														<?= number_format($m['harga_per_jam'], 0, ',', '.') ?>
													</span>
													<span class="per">/per Jam</span>
												</h3>
											</div>
										</td>

										<!-- PER HARI -->
										<td class="price">
											<p class="btn-custom">
												<a href="https://wa.me/6285168822220?text=Saya%20ingin%20rental%20<?= urlencode($m['nama']) ?>%20Beberapa%20Hari"
												target="_blank">
													Rental
												</a>
											</p>

											<div class="price-rate">
												<h3>
													<span class="num">
														<span class="currency">Rp </span>
														<?= number_format($m['harga_per_hari'], 0, ',', '.') ?>
													</span>
													<span class="per">/per Hari</span>
												</h3>
											</div>
										</td>

										<!-- PER MINGGU -->
										<td class="price">
											<p class="btn-custom">
												<a href="https://wa.me/6285168822220?text=Saya%20ingin%20rental%20<?= urlencode($m['nama']) ?>%20Beberapa%20Minggu"
												target="_blank">
													Rental
												</a>
											</p>

											<div class="price-rate">
												<h3>
													<span class="num">
														<?php if ($m['harga_per_minggu'] > 0): ?>
															<span class="currency">Rp </span>
															<?= number_format($m['harga_per_minggu'], 0, ',', '.') ?>
														<?php else: ?>
															Coming Soon
														<?php endif; ?>
													</span>
													<span class="per">/per Minggu</span>
												</h3>
											</div>
										</td>

									</tr>

							  <?php endforeach; ?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
</section>
<?= $this->endSection(); ?>

