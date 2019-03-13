<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('pegawai/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">
						<?php echo validation_errors(); ?>

						<form action="<?php echo base_url('pegawai/edit/'.$pegawai->NIP) ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="NIP" value="<?php echo $pegawai->NIP?>" />
							<input type="hidden" name="CUTI" value="<?php echo $pegawai->CUTI?>" />

							<div class="form-group">
								<label for="name">NAMA*</label>
								<input class="form-control <?php echo form_error('NAMA') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA" placeholder="NAMA PEGAWAI" value="<?php echo $pegawai->NAMA ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TMPT_LAHIR*</label>
								<input class="form-control <?php echo form_error('TMPT_LAHIR') ? 'is-invalid':'' ?>"
								 type="text" name="TMPT_LAHIR" placeholder="TEMPAT LAHIR" value="<?php echo $pegawai->TMPT_LAHIR ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TMPT_LAHIR') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TGL_LAHIR*</label>
								<input class="form-control <?php echo form_error('TGL_LAHIR') ? 'is-invalid':'' ?>"
								 type="date" name="TGL_LAHIR" placeholder="TANGGAL LAHIR" value="<?php echo $pegawai->TGL_LAHIR ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TGL_LAHIR') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">UMUR*</label>
								<input class="form-control <?php echo form_error('UMUR') ? 'is-invalid':'' ?>"
								 type="number" name="UMUR" placeholder="UMUR" value="<?php echo $pegawai->UMUR ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('UMUR') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ESELON*</label>
								<input class="form-control <?php echo form_error('ESELON') ? 'is-invalid':'' ?>"
								 type="text" name="ESELON" placeholder="ESELON" value="<?php echo $pegawai->ESELON ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ESELON') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JABATAN*</label>
								<input class="form-control <?php echo form_error('JABATAN') ? 'is-invalid':'' ?>"
								 type="text" name="JABATAN" placeholder="JABATAN" value="<?php echo $pegawai->JABATAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JABATAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JENJANG PENDIDIKAN*</label>
								<input class="form-control <?php echo form_error('JENJANG_PENDIDIKAN') ? 'is-invalid':'' ?>"
								 type="text" name="JENJANG_PENDIDIKAN" placeholder="JENJANG PENDIDIKAN" value="<?php echo $pegawai->JENJANG_PENDIDIKAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JENJANG_PENDIDIKAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TAHUN PENDIDIKAN*</label>
								<input class="form-control <?php echo form_error('TAHUN_PENDIDIKAN') ? 'is-invalid':'' ?>"
								 type="text" name="TAHUN_PENDIDIKAN" placeholder="TAHUN PENDIDIKAN" value="<?php echo $pegawai->TAHUN_PENDIDIKAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TAHUN_PENDIDIKAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">MASA KERJA GOLONGAN*</label>
								<input class="form-control <?php echo form_error('MSKRJA_GOLONGAN') ? 'is-invalid':'' ?>"
								 type="text" name="MSKRJA_GOLONGAN" placeholder="MASA KERJA GOLONGAN" value="<?php echo $pegawai->MSKRJA_GOLONGAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('MSKRJA_GOLONGAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">MASA KERJA KESELURUHAN*</label>
								<input class="form-control <?php echo form_error('MSKRJA_KESELURUHAN') ? 'is-invalid':'' ?>"
								 type="text" name="MSKRJA_KESELURUHAN" placeholder="MASA KERJA KESELURUHAN" value="<?php echo $pegawai->MSKRJA_KESELURUHAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('MSKRJA_KESELURUHAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JENIS KELAMIN*</label>
								<input class="form-control <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>"
								 type="text" name="JENIS_KELAMIN" placeholder="JENIS KELAMIN" value="<?php echo $pegawai->JENIS_KELAMIN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JENIS_KELAMIN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">CUTI DIPAKAI</label>
								<input class="form-control <?php echo form_error('CUTI_DIPAKAI') ? 'is-invalid':'' ?>"
								 type="number" name="CUTI_DIPAKAI" min="0" placeholder="CUTI DI PAKAI" value="<?php echo $pegawai->CUTI_DIPAKAI ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_DIPAKAI') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">CUTI SISA</label>
								<input class="form-control <?php echo form_error('CUTI_SISA') ? 'is-invalid':'' ?>"
								 type="number" name="CUTI_SISA" min="0" placeholder="SISA CUTI" value="<?php echo $pegawai->CUTI_SISA ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_SISA') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('IMG') ? 'is-invalid':'' ?>"
								 type="file" name="IMG" />
								<input type="hidden" name="old_image" value="<?php echo $pegawai->IMG ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('IMG') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("_partials/scrolltop.php") ?>

		<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
