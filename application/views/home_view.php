<?= $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Free Food Photography</h2>
				<h6 class="text-center">MADE BY <a href="www.freshlysqzd.com">FRESHLY SQUEEZED DESIGNS</a></h6>
				<p class="text-center"><b>Free (<a href="<?= base_url() . "public/" ?>license" class="gray"> do whatever you want </a>) high-resolution food photos.</b> I take a lot of food photos and never really do anything with them, so here you go.</p>
				<center><a href="#" class="btn btn-primary btn-upload" role="button">Upload Photo <i class="icon icon-upload-cloud-1"></i></a></center>
			</div>
		</div>
		<div class="container">
			<div class="row">
			   	<?php foreach ($photos as $photo):?>
					<div class="col-lg-6 col-md-6 col-xs-12 thumb">
						<a href="<?= base_url(). "download?img=" . $photo['id']; ?>"><img src="<?= base_url() . "public/img/preview/" . $photo['path'] . ".jpg"; ?>" alt="<?= $photo['description']; ?>"></a>
					</div>
	          	<?php endforeach;?>
			</div>
		</div>
<?= $this->load->view('layout/footer'); ?>