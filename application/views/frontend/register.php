	       <!-- Main Content -->
	       <div class="main-content">
	       	<section class="section">
	       		<div class="row">
	       			<div
	       				class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
	       				<div class="card card-primary">
	       					<div class="card-header">
	       						<h4>Register</h4>
	       					</div>

	       					<div class="card-body">
	       						<form method="POST" action="<?php echo site_url('home/insert_reg')?>" class="needs-validation" novalidate>
	       							<div class="row">
	       								<div class="form-group col-6">
	       									<label for="first_name">Nama Lengkap</label>
	       									<input id="first_name" type="text" class="form-control" name="nama"
	       										autofocus>
	       								</div>
	       								<div class="form-group col-6">
	       									<label for="last_name">Email</label>
	       									<input id="last_name" type="email" class="form-control" name="email">
	       								</div>
	       							</div>

	       							<div class="form-group">
	       								<label for="email">Username</label>
	       								<input id="email" type="text" class="form-control" name="username">
	       								<div class="invalid-feedback">
	       								</div>
	       							</div>

	       							<div class="row">
	       								<div class="form-group col-6">
	       									<label for="password" class="d-block">Password</label>
	       									<input id="password" type="password" class="form-control pwstrength"
	       										data-indicator="pwindicator" name="password">
	       									<div id="pwindicator" class="pwindicator">
	       										<div class="bar"></div>
	       										<div class="label"></div>
	       									</div>
	       								</div>
	       								<div class="form-group col-6">
	       									<label for="password2" class="d-block">Password Confirmation</label>
	       									<input id="password2" type="password" class="form-control"
	       										name="password_confirm">
	       								</div>
	       							</div>

	       							<div class="form-divider">
	       								Your Home
	       							</div>
	       							<div class="row">
	       								<div class="form-group col-12">
	       									<label for="email">Alamat</label>
	       									<input id="email" type="text" class="form-control" name="alamat">
	       									<div class="invalid-feedback">
	       									</div>
	       								</div>
	       								<div class="form-group col-6">
	       									<label>Kota</label>
	       									<select class="form-control selectric" name="kota">
											   <option value="#">Kota Asal</option>
											 	<?php foreach ($kota as $item){ ?>
												<option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota;?></option>
												<?php } ?>
	       									</select>
	       								</div>
	       								<div class="form-group col-6">
	       									<label>No Telpon</label>
	       									<input type="tel" pattern="[0-9]{12}" class="form-control" placeholder="081122223333" name="no_telpon" required>
	       								</div>
	       							</div>

	       							<div class="form-group">
	       								<button type="submit" class="btn btn-primary btn-lg btn-block">
	       									Register
	       								</button>
	       							</div>
	       						</form>
	       					</div>
	       				</div>

	       			</div>
	       		</div>
	       	</section>
	       </div>
