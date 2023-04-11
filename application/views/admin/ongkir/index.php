      <!-- Main Content -->
      <div class="main-content">
      	<section class="section">
      		<div class="section-header">
      			<h1>Manajemen Ongkir</h1>
      			<div class="section-header-breadcrumb">
      				<div class="breadcrumb-item active"><a href="<?php echo site_url('Adminpanel/dashboard')?>">Dashboard</a></div>
      				<div class="breadcrumb-item"><a href="<?php echo site_url('ongkir')?>">Biaya Kirim</a></div>
      				<div class="breadcrumb-item">Main</div>
      			</div>
      		</div>
      		<div class="section-body">
      			<h2 class="section-title">Data Biaya Kirim</h2>
      			<div class="row">
      				<div class="col-12 col-lg-8">
      					<div class="card">
      						<div class="card-header">
      							<h4>Data Biaya Kirim</h4> <a href="<?php echo site_url('ongkir/add') ?>" class="btn btn-primary">Tambah Biaya Kirim</a>
      						</div>
      						<div class="card-body">
      							<div class="table-responsive">
      								<table class="table table-bordered table-md">
      									<tr>
      										<th>Id Ongkir</th>
      										<th>Id Kurir</th>
											<th>Id Kota Asal</th>
											<th>Id Kota Tujuan</th>
											<th>Biaya</th>    
      										<th>Action</th>
      									</tr>
										<?php foreach ($ongkir as $item) { ?>
      									<tr>
      										<td><?php echo $item->idBiayaKirim; ?></td>
											<td><?php echo $item->namaKurir; ?> </td>
      										<td><?php echo $item->asal; ?> </td>
											<td><?php echo $item->tujuan; ?> </td>
											<td><?php echo $item->biaya; ?> </td>
      										<td><a href="<?php echo site_url('ongkir/getid/'.$item->idBiayaKirim); ?>" class="btn btn-warning">Edit</a>   <a href="<?php echo site_url('ongkir/delete/'.$item->idBiayaKirim); ?>" class="btn btn-danger">Hapus</a></td>
      									</tr>
      									<?php } ?>
      								</table>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</section>
      </div>
