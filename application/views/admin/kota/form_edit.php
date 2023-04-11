<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Manajemen Kota</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo site_url('Adminpanel/dashboard')?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="<?php echo site_url('kota')?>">Kota</a></div>
				<div class="breadcrumb-item">Form Edit</div>
			</div>
		</div>
		<div class="section-body">
			<h2 class="section-title">Forms</h2>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6">
					<form method="POST" action="<?php echo site_url('kota/edit'); ?>" class="needs-validation" novalidate>
                    <input type="hidden" name="id" value="<?php echo $kota->idKota; ?>">
						<div class="card">
							<div class="card-header">
								<h4>Form Edit Data Kota</h4>
							</div>
							<div class="card-body">	
							<div class="form-group row">
                                <label class="col-form-label col-12 col-md-3 col-lg-3">Nama Kota</label>
								<div class="col-sm-9">
									<input type="text" name="namakota" class="form-control" id="inputEmail3"
										placeholder="Nama Kota" value="<?php echo $kota->namaKota; ?>" required>
									<div class="invalid-feedback">
									Isi Nama Kota
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
