      <!-- Main Content -->
      <div class="main-content">
      	<section class="section">
      		<div class="section-header">
      			<h1>Manajemen Ongkir</h1>
      			<div class="section-header-breadcrumb">
      				<div class="breadcrumb-item active"><a href="<?php echo site_url('Adminpanel/dashboard')?>">Dashboard</a></div>
      				<div class="breadcrumb-item"><a href="<?php echo site_url('kota')?>">Kota</a></div>
      				<div class="breadcrumb-item">Main</div>
      			</div>
      		</div>
      		<div class="section-body">
      			<h2 class="section-title">Data Kota</h2>
      			<div class="row">
      				<div class="col-12 col-lg-8">
      					<div class="card">
      						<div class="card-header">
      							<h4>Data Kota</h4> <a href="<?php echo site_url('kota/add') ?>" class="btn btn-primary">Tambah Kota</a>
      						</div>
      						<div class="card-body">
      							<div class="table-responsive">
      								<table class="table table-bordered table-md">
      									<tr>
      										<th>Id Kota</th>
      										<th>Nama Kota</th>   
      										<th>Action</th>
      									</tr>
										<?php foreach ($kota as $item) { ?>
      									<tr>
      										<td><?php echo $item->idKota; ?></td>
											<td><?php echo $item->namaKota; ?> </td>
      										<td><a href="<?php echo site_url('kota/getid/'.$item->idKota); ?>" class="btn btn-warning">Edit</a>   <a href="<?php echo site_url('kota/delete/'.$item->idKota); ?>" class="btn btn-danger">Hapus</a></td>
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
