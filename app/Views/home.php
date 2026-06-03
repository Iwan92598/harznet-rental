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
					<div class="item">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url('<?= base_url("assets/images/car-1.png") ?>');">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="#">Honda Brio merah </a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Honda</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Booking Sekarang</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url('<?= base_url("assets/images/car-2.jpg") ?>');">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="#">Honda BR-V Hitam 2024 </a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Honda</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Booking Sekarang</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url('<?= base_url("assets/images/car-3.png") ?>');">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="#">Toyota Innova Reborn Putih </a></h2>
								<div class="d-flex mb-3">
									<span class="cat">Toyota</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Booking Sekarang</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section ftco-about">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= base_url("assets/images/about.jpg") ?>');">
			</div>
			<div class="col-md-6 wrap-about ftco-animate">
		<div class="heading-section heading-section-white pl-md-5">
		<span class="subheading">Tentang Kami</span>
		<h2 class="mb-4">Selamat Datang di Harznet Rental</h2>

		<p>HARZNET Rental hadir sebagai solusi transportasi yang mengutamakan kenyamanan, keamanan, dan kepuasan pelanggan. Kami menyediakan layanan rental mobil yang profesional dengan berbagai pilihan kendaraan yang terawat dan siap menemani setiap perjalanan Anda, baik untuk keperluan bisnis, wisata, keluarga, maupun perjalanan dinas</p>
		<p>Dengan komitmen memberikan pelayanan terbaik, kami memastikan setiap pelanggan mendapatkan pengalaman berkendara yang mudah, aman, dan menyenangkan. Didukung oleh tim yang berpengalaman serta armada yang selalu dalam kondisi prima, HARZNET siap menjadi mitra perjalanan terpercaya Anda.</p>
		<p>Kami percaya bahwa setiap perjalanan memiliki cerita dan tujuan yang berharga. Oleh karena itu, kami terus berupaya menghadirkan layanan yang fleksibel, harga yang kompetitif, serta proses pemesanan yang cepat dan praktis.</p>
		<p>Bersama HARZNET, Anda dapat menjelajahi berbagai destinasi dengan lebih leluasa, menikmati perjalanan tanpa khawatir, dan menciptakan momen-momen berkesan di setiap kilometer perjalanan.</p>
		<p><a href="#" class="btn btn-primary py-3 px-4">Cari Kendaraan</a></p>
		</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
		<div class="col-md-7 text-center heading-section ftco-animate">
		<span class="subheading">Layanan</span>
		<h2 class="mb-3">Layanan Terbaik Kami</h2>
		</div>
	</div>
			<div class="row">
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
			<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
			<div class="text w-100">
			<h3 class="heading mb-2">Acara Pernikahan</h3>
			<p>Biarkan kami mengantar Anda menuju hari paling istimewa. Armada berkualitas dan pelayanan terbaik siap menemani momen sakral pernikahan Anda.</p>
			</div>
		</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
			<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
			<div class="text w-100">
			<h3 class="heading mb-2">Antar Jemput Kota</h3>
			<p>Perjalanan jauh terasa lebih nyaman dengan layanan transportasi terpercaya yang siap mengantar Anda ke berbagai tujuan.</p>
			</div>
		</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
			<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
			<div class="text w-100">
			<h3 class="heading mb-2">Antar Jemput Bandara</h3>
			<p>Perjalanan ke dan dari bandara menjadi lebih mudah dengan layanan antar jemput yang profesional dan nyaman.</p>
			</div>
		</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
			<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
			<div class="text w-100">
			<h3 class="heading mb-2">Wisata Kota</h3>
			<p>Eksplorasi destinasi wisata, pusat perbelanjaan, tempat bersejarah, hingga kuliner terbaik dengan layanan perjalanan yang nyaman, aman, dan fleksibel.</p>
			</div>
		</div>
				</div>
			</div>
		</div>
</section>
		
<section class="ftco-section ftco-intro" style="background-image: url('<?= base_url("assets/images/bg_3.jpg") ?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6 heading-section heading-section-white ftco-animate">
	<h2 class="mb-3">Ingin Mendapatkan Penghasilan Bersama Kami? Jangan Tunda Lagi.</h2>
	<a href="#" class="btn btn-primary btn-lg">Jadilah Sopir Kami</a>
	</div>
		</div>
	</div>
</section>


<section class="ftco-section testimony-section bg-light">
	<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-7 text-center heading-section ftco-animate">
		<span class="subheading">Testimoni</span>
		<h2 class="mb-3">Klien Kami</h2>
		</div>
	</div>
	<div class="row ftco-animate">
		<div class="col-md-12">
		<!-- <div class="carousel-testimony owl-carousel ftco-owl">
			<div class="item">
			<div class="testimony-wrap rounded text-center py-4 pb-5">
				<div class="user-img mb-2" style="background-image: url('<?= base_url("assets/images/person_1.jpg") ?>')">
				</div>
				<div class="text pt-4">
				<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<p class="name">Roger Scott</p>
				<span class="position">Marketing Manager</span>
				</div>
			</div>
			</div>
			<div class="item">
			<div class="testimony-wrap rounded text-center py-4 pb-5">
				<div class="user-img mb-2" style="background-image: url('<?= base_url("assets/images/person_2.jpg") ?>')">
				</div>
				<div class="text pt-4">
				<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<p class="name">Roger Scott</p>
				<span class="position">Interface Designer</span>
				</div>
			</div>
			</div>
			<div class="item">
			<div class="testimony-wrap rounded text-center py-4 pb-5">
				<div class="user-img mb-2" style="background-image: url('<?= base_url("assets/images/person_3.jpg") ?>')">
				</div>
				<div class="text pt-4">
				<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<p class="name">Roger Scott</p>
				<span class="position">UI Designer</span>
				</div>
			</div>
			</div>
			<div class="item">
			<div class="testimony-wrap rounded text-center py-4 pb-5">
				<div class="user-img mb-2" style="background-image: url('<?= base_url("assets/images/person_1.jpg") ?>')">
				</div>
				<div class="text pt-4">
				<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<p class="name">Roger Scott</p>
				<span class="position">Web Developer</span>
				</div>
			</div>
			</div>
			<div class="item">
			<div class="testimony-wrap rounded text-center py-4 pb-5">
				<div class="user-img mb-2" style="background-image: url('<?= base_url("assets/images/person_1.jpg") ?>')">
				</div>
				<div class="text pt-4">
				<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<p class="name">Roger Scott</p>
				<span class="position">System Analyst</span>
				</div>
			</div>
			</div>
		</div> -->
		</div>
	</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-7 heading-section text-center ftco-animate">
		<span class="subheading">Blog</span>
		<h2>Recent Blog</h2>
		</div>
	</div>
	<div class="row d-flex">
		<div class="col-md-4 d-flex ftco-animate">
		<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url("assets/images/image_1.jpg") ?>');">
			</a>
			<div class="text pt-4">
			<div class="meta mb-3">
				<div><a href="#">Oct. 29, 2019</a></div>
				<div><a href="#">Admin</a></div>
				<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
			</div>
			<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			<p><a href="#" class="btn btn-primary">Read more</a></p>
			</div>
		</div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
		<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url("assets/images/image_2.jpg") ?>');">
			</a>
			<div class="text pt-4">
			<div class="meta mb-3">
				<div><a href="#">Oct. 29, 2019</a></div>
				<div><a href="#">Admin</a></div>
				<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
			</div>
			<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			<p><a href="#" class="btn btn-primary">Read more</a></p>
			</div>
		</div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
		<div class="blog-entry">
			<a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url("assets/images/image_3.jpg") ?>');">
			</a>
			<div class="text pt-4">
			<div class="meta mb-3">
				<div><a href="#">Oct. 29, 2019</a></div>
				<div><a href="#">Admin</a></div>
				<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
			</div>
			<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			<p><a href="#" class="btn btn-primary">Read more</a></p>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>	

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
		<div class="overlay"></div>
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18">
			<div class="text text-border d-flex align-items-center">
			<strong class="number" data-number="60">0</strong>
			<span>Year <br>Experienced</span>
			</div>
		</div>
		</div>
		<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18">
			<div class="text text-border d-flex align-items-center">
			<strong class="number" data-number="1090">0</strong>
			<span>Total <br>Cars</span>
			</div>
		</div>
		</div>
		<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18">
			<div class="text text-border d-flex align-items-center">
			<strong class="number" data-number="2590">0</strong>
			<span>Happy <br>Customers</span>
			</div>
		</div>
		</div>
		<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
		<div class="block-18">
			<div class="text d-flex align-items-center">
			<strong class="number" data-number="67">0</strong>
			<span>Total <br>Branches</span>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>	

<?= $this->endSection(); ?>