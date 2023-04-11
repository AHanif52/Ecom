<div class="main-content">
	<section class="section">
		<div class="section-header">
			<div class="section-header-back">
				<a href="<?php echo site_url('member'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
			</div>
			<h1>Menu Utama Dashboard Member</h1>
		</div>
		<div class="section-body">
			<div id="output-status"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<h4>Menu Member</h4>
						</div>
						<div class="card-body">
							<ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="<?php echo site_url('member'); ?>" class="nav-link">Beranda</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/transaksi" class="nav-link">Transaksi</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/riwayat_transaksi" class="nav-link">Riwayat Transaksi</a></li>
								<li class="nav-item"><a href="<?php echo site_url('member/toko'); ?>" class="nav-link">Toko</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/ubah_profil" class="nav-link">Ubah Profil</a></li>
								<li class="nav-item"><a href="http://localhost/tokokita/index.php/member/logout" class="nav-link">Logout</a></li>
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
												href="<?php echo site_url('member/create_toko'); ?>">Silakan
												Membuat Toko</a>
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
									<h4>Data Toko</h4>
									<div class="card-header-action">

									</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive table-invoice">
										<table class="table table-striped">
											<tr>
												<th>Nama Toko</th>
												<th>Deskripsi</th>
												<th>Logo</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											<?php foreach ($toko as $t) : ?>
											<tr>
												<td><?php echo $t->namaToko; ?></td>
												<td class="font-weight-600"><?php echo $t->deskripsi; ?></td>
												<td><?php echo $t->logo; ?></td>
												<td><?php if($t->statusAktif=='Y'){ ?> <div class="badge badge-success">Aktif</div>
													<?php } else { ?>
														<div class="badge badge-danger">Tidak Aktif</div>
													<?php } ?>
												</td>
      							
												<td>
													<a href="<?php echo site_url('toko/main/'.$t->idToko); ?>"
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
