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
						        <th class="bg-black heading">Sewa</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(<?= base_url("assets/images/car-1.png") ?>);"></div></td>
						        <td class="product-name">
						        	<h3>Honda Brio Merah</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Brio%20Merah%20Beberapa%20Jam" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span> 
							        		<span class="per">/per Jam</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
						        	</div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Brio%20Merah%20Beberapa%20Hari" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per Hari</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
						        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Brio%20Merah%20Beberapa%20Bulan" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per Bulan</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(<?= base_url("assets/images/car-2.jpg") ?>);"></div></td>
						        <td class="product-name">
						        	<h3>Honda BR-V Hitam 2024</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20BR-V%20Beberapa%20Jam" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per Jam</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20BR-V%20Beberapa%20Hari" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per Hari</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20BR-V%20Beberapa%20Bulan" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per Bulan</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(<?= base_url("assets/images/car-3.png") ?>);"></div></td>
						        <td class="product-name">
						        	<h3>Toyota Innova Reborn Putih</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Innova%20Reborn%20Beberapa%20Jam" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per Jam</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Innova%20Reborn%20Beberapa%20Hari" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per Hari</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="https://wa.me/6281378888410?text=Saya%20rental%20mobil%20Innova%20Reborn%20Beberapa%20Bulan" target="_blank">Rental</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per Bulan</span>
							        	</h3>
							        	<!-- <span class="subheading">$3/hour fuel surcharges</span> -->
							        </div>
						        </td>
						      </tr><!-- END TR-->



						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
</section>
<?= $this->endSection(); ?>

