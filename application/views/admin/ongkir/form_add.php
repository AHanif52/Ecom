<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Manajemen Biaya Kirim</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a
						href="<?php echo site_url('Adminpanel/dashboard')?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="<?php echo site_url('ongkir')?>">Kategori</a></div>
				<div class="breadcrumb-item">Form Add</div>
			</div>
		</div>
		<div class="section-body">
			<h2 class="section-title">Forms</h2>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6">
					<form method="POST" action="<?php echo site_url('ongkir/save') ?>" class="needs-validation" novalidate>
						<div class="card">
							<div class="card-header">
								<h4>Form Tambah Kategori</h4>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-form-label col-12 col-md-3 col-lg-3">Nama Kurir</label>
									<div class="col-sm-9">
										<select class="form-control" name="idkurir">
											<option value="">-- Pilih Kurir --</option>
											<?php foreach ($bayar as $item){ ?>
											<option value="<?php echo $item->idKurir; ?>"><?php echo $item->namaKurir;?></option>
											<?php } ?>
											<div class="invalid-feedback">
												Isi Nama Kurir
											</div>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-form-label col-12 col-md-3 col-lg-3">Nama Kota
										Asal</label>
									<div class="col-sm-9">
										<select class="form-control" name="idkotaasal">
											<option value="">-- Pilih Kota Asal --</option>
											<?php foreach ($kota as $item){ ?>
											<option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota;?></option>
											<?php } ?>
											<div class="invalid-feedback">
												Isi Nama Kota Asal
											</div>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-form-label col-12 col-md-3 col-lg-3">Nama Kota
										Tujuan</label>
									<div class="col-sm-9">
									<select class="form-control" name="idkotatujuan">
											<option value="">-- Pilih Kota Tujuan --</option>
											<?php foreach ($kota as $item){ ?>
											<option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota;?></option>
											<?php } ?>
											<div class="invalid-feedback">
												Isi Nama Kota Tujuan
											</div>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-form-label col-12 col-md-3 col-lg-3">Biaya</label>
									<div class="col-sm-9">
										<input type="number" name="biaya" class="form-control" id="inputEmail3"
											placeholder="Ongkos Kirim" required>
										<div class="invalid-feedback">
											Isi Biaya
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary"> Simpan </button>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
</div>
