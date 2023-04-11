<!-- Main Content -->
<div class="main-content">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<div class="card">

				<div class="card-body">
					<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100"
									src="<?php echo base_url('/assets/admin/assets/img/news/slide1.jpg');?>"
									alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Heading</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100"
									src="<?php echo base_url('assets/admin/assets/img/news/slide2.jpg');?>"
									alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Heading</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100"
									src="<?php echo base_url('assets/admin/assets/img/news/slide3.jpg');?>"
									alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>Heading</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
							data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
							data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<section class="section">
		<div class="section-body">
			<h2 class="section-title">Produk Terbaru</h2>
			<p class="section-lead">This article component is based on card and flexbox</p>

			<div class="row">
				<?php foreach ($produk_terbaru as $key => $val) { ?>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<article class="article">
						<div class="article-header">
							<div class="article-image"
								data-background="<?php echo base_url('upload_gambar_produk/'.$val->foto) ?>">
							</div>
							<div class="article-title">
								<center>
									<h2><a href="#"><?php echo $val->namaProduk; ?></a></h2>
								</center>
							</div>
						</div>
						<div class="article-details">
							<center>
								<p> <?php echo $val->deskripsiProduk; ?> </p>
							</center>
							<div class="article-cta">
								<a href="<?php echo site_url('home/detail_produk/'.$val->idProduk)?>"
									class="btn btn-primary">Detail Produk</a>
								<a href="<?php echo site_url('wishlist/add_to_wishlist/'.$val->idProduk)?>"
									class="btn btn-outline-danger trigger--fire-modal-1" id="modal-1"><i class="fas fa-heart"></i></a>
								<a href="<?php echo base_url('member/cart_tambah/'.$val->idProduk) ?>"
									class="btn btn-success"><i class="fas fa-shopping-cart"></i></a>
							</div>
						</div>
				</div>
				<?php } ?>
	</section>
</div>
