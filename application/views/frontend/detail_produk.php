<div class="main-content">
	<div class="row">
    <section class="section">
		<!-- DataTales Example -->
		<div class="container-fluid">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<div class="bd-highlight mb-3">
						<div class="section-header">
							<div class="section-header-back">
								<a href="<?php echo site_url('home');?>" class="btn btn-icon"><i
										class="fas fa-arrow-left"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="container mt-2 mb-5">
						<div class="row">
							<div class="col-md-4 mt-4">
								<img src="<?php echo base_url('upload_gambar_produk/'.$produk->foto) ?>" class="w-100">
							</div>
							<div class="col-md-8 mt-4">
								<table class="table table-striped mb-4">
									<tbody>
										<tr>
											<td>Nama Produk</td>
											<td>:</td>
											<td><?php echo $produk->namaProduk?></td>
										</tr>
										<tr>
											<td>Harga</td>
											<td>:</td>
											<td>Rp <?php echo $produk->harga?></td>
										</tr>
										<tr>
											<td>Berat</td>
											<td>:</td>
											<td><?php echo $produk->berat?> kg</td>
										</tr>
										<tr>
											<td>Kategori Produk</td>
											<td>:</td>
											<td><?php echo $get_kategori->namakat ?></td>
										</tr>
										<tr>
											<td>Stok</td>
											<td>:</td>
											<td><?php echo $produk->stok?></td>
										</tr>
										<tr>
											<td>Deskripsi Produk</td>
											<td>:</td>
											<td><?php echo $produk->deskripsiProduk?></td>
										</tr>
									</tbody>
								</table>
								<a href="<?php echo site_url('cart/add_to_cart/'.$produk->idProduk) ?>"
									class="btn btn-success mt-4 float-right"><i class="fas fa-shopping-cart"></i>      Tambah ke Keranjang
								</a>
								<a href="<?php echo site_url('wishlist/add_to_wishlist/'.$produk->idProduk) ?>"
									class="btn btn-outline-danger mt-4 mr-4 float-right">
									<i class="fas fa-heart"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	</div>
</div>
