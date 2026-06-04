 <?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>  
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url("assets/images/bg_3.jpg") ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Car Details</h1>
          </div>
        </div>
      </div>
    </section>
		

	<?= view('partials/car-detail') ?>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Pilih Mobil</span>
            <h2 class="mb-2">Mobil Terkait</h2>
          </div>
        </div>
        <div class="row">          

			<?php foreach ($mobils as $m): ?>
        <div class="col-md-4">
				<?php if ($m['id'] == $mobil['id']) continue; ?>        
				<?= view('partials/car-card', ['m' => $m]) ?>
        </div>					
			<?php endforeach; ?>	      		

        </div>		
    	</div>
    </section>
    <?= $this->endSection(); ?>
