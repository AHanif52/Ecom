<div class="main-content">
	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div class="w-100">
					<div class="card card-primary">
						<div class="card-header">
							<h4>Wishlist</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive table-invoice">
								<table class="table table-striped">
									<tr>
										<th>Nama</th>
										<th>Gambar</th>
										<th>Harga</th>
										<th>Deskripsi</th>
										<th>Action</th>
									</tr>
									<?php foreach ($wishlist as $wishlist) { ?>
									<tr>
										<td><a href="<?php echo site_url('home/detail_produk/'.$wishlist->idProduk); ?>"><?php echo $wishlist->namaProduk ?></a></td>
										<td><img src="<?php echo base_url('upload_gambar_produk/'.$wishlist->foto) ?>"
												style="object-fit: contain" width="60"></td>
										<td><?php echo $wishlist->harga ?></td>
										<td><?php echo $wishlist->deskripsiProduk ?></td>
										<td>
											<a href="<?php echo site_url('wishlist/delete/'.$wishlist->idProduk); ?>"
												class="btn btn-danger">Hapus dari Wishlist</a>
										</td>
									</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
