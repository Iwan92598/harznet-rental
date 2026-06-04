<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="hero-wrap ftco-degree-bg" style="background-image: url('<?= base_url("assets/images/bg_1.jpg") ?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	<div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
		<div class="col-lg-8 ftco-animate">
		<div class="text w-100 text-center mb-md-5 pb-md-5">
			<!-- <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1> -->
			<h1 class="mb-4">Harznet Rental </h1>
			<p style="font-size: 18px;">Solusi Tepat untuk Perjalanan Nyaman, Aman, dan Terpercaya.</p>
			<a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
				<div class="icon d-flex align-items-center justify-content-center">
					<span class="ion-ios-play"></span>
				</div>
				<div class="heading-title ml-5">
					<span>Langkah mudah untuk rental mobil</span>
				</div>
			</a>
		</div>
		</div>
	</div>
	</div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-12	featured-top">

				<div class="row no-gutters">
					<div class="col-md-4 d-flex align-items-center">
						<form action="#" class="request-form ftco-animate bg-primary">
							<h2>Pesan Kendaraan Anda</h2>

							<div class="form-group">
								<label for="" class="label">Lokasi Pengambilan</label>
								<input type="text" class="form-control" value="Kantor HARZNET - Perumahan Green Simangu 3, Jl. Simangu, Blok B No 19, Kasugengan Lor, Kec. Depok, Kabupaten Cirebon, Jawa Barat 45155" readonly>
							</div>

							<div class="form-group">
								<label for="" class="label">Lokasi Pengembalian</label>
								<input type="text" class="form-control" value="Kantor HARZNET - Perumahan Green Simangu 3, Jl. Simangu, Blok B No 19, Kasugengan Lor, Kec. Depok, Kabupaten Cirebon, Jawa Barat 45155" readonly>
							</div>

							<div class="d-flex">
								<div class="form-group mr-2">
									<label class="label">Tgl Pengambilan</label>
									<input type="text" class="form-control" id="book_pick_date" placeholder="Pilih Tanggal">
								</div>

								<div class="form-group ml-2">
									<label class="label">Tgl Pengembalian</label>
									<input type="text" class="form-control" id="book_off_date" placeholder="Pilih Tanggal">
								</div>
							</div>

							<div class="d-flex">
								<div class="form-group mr-2">
									<label class="label">Jam Pengambilan</label>
									<input type="text" class="form-control" id="time_pick" placeholder="Pilih Jam">
								</div>

								<div class="form-group ml-2">
									<label class="label">Jam Pengembalian</label>
									<input type="text" class="form-control" id="time_off" placeholder="Pilih Jam">
								</div>
							</div>


							<div class="form-group">
								<input type="submit" value="Sewa Mobil Sekarang" class="btn btn-secondary py-3 px-4">
							</div>
						</form>
					</div>

					<div class="col-md-8 d-flex align-items-center">
						<div class="services-wrap rounded-right w-100">
							<h3 class="heading-section mb-4">Cara Mudah Menyewa Mobil Impian Anda</h3>

							<div class="row d-flex mb-4">
								<div class="col-md-4 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-route"></span>
										</div>
										<div class="text w-100">
											<h3 class="heading mb-2">Datang ke Kantor Kami</h3>
										</div>
									</div>
								</div>

								<div class="col-md-4 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-handshake"></span>
										</div>
										<div class="text w-100">
											<h3 class="heading mb-2">Pilih Paket Terbaik</h3>
										</div>
									</div>
								</div>

								<div class="col-md-4 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-rent"></span>
										</div>
										<div class="text w-100">
											<h3 class="heading mb-2">Nikmati Perjalanan Anda</h3>
										</div>
									</div>
								</div>
							</div>

							<p>
								<a href="#" class="btn btn-primary py-3 px-4">
									Pesan Mobil Sekarang
								</a>
							</p>
						</div>
					</div>
				</div>


			</div>
	</div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-12 heading-section text-center ftco-animate mb-5">
		<span class="subheading">Penawaran Kami</span>
		<h2 class="mb-2">Kendaraan Unggulan</h2>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel-car owl-carousel">
					
					<?php foreach ($mobil as $m): ?>
						<div class="item">
					    <?= view('partials/car-card', ['m' => $m]) ?>
						</div>
					<?php endforeach; ?>
					
				</div>
			</div>
		</div>
	</div>
</section>



<?= view('partials/about-card') ?>
<?= view('partials/services-card') ?>
<?= view('partials/driver-card') ?>
<?= $this->endSection(); ?>