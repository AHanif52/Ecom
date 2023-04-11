<div class="main-content">
	<section class="section">
		<div class="section-header">
			<div class="section-header-back">
				<a href="<?php echo site_url('toko/main/'.$namaToko->idToko); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
			</div>
			<h1>Menu Utama Dashboard Toko "<?php echo $namaToko->namaToko; ?>"</h1>
		</div>
		<div class="section-body">
			<div id="output-status"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<h4>Menu Toko</h4>
						</div>
						<div class="card-body">
							<ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="<?php echo site_url('toko/main/'.$namaToko->idToko); ?>" class="nav-link">Beranda</a></li>
								<li class="nav-item"><a href="<?php echo site_url('toko/produk/'.$namaToko->idToko); ?>" class="nav-link">Produk</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/ubah_profil" class="nav-link">Pesanan</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/logout" class="nav-link">Laporan</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<div class="row">
						<div class="col-12">
							<div class="card mb-0">
								<div class="card-body">
									<ul class="nav nav-pills">
										<li class="nav-item">
											<a class="nav-link active"
												href="<?php echo site_url('toko/create_produk/'.$namaToko->idToko); ?>">Silakan
												Tambahkan Produk Baru</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4>Data Produk</h4>
									<div class="card-header-action">

									</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive table-invoice">
										<table class="table table-striped">
											<tr>
												<th>Nama Produk</th>
												<th>Harga</th>
												<th>Stok</th>
												<th>Action</th>
											</tr>
											<?php foreach ($produk as $p) : ?>
											<tr>
												<td><?php echo $p->namaProduk; ?></td>
												<td><?php echo $p->harga; ?></td>
												<td><?php echo $p->stok; ?></td>
								
												<td>
													<a href="#"
														class="btn btn-primary">Detail</a>
												</td>
											</tr>
											<?php endforeach; ?>

										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
