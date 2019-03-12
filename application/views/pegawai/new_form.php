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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('pegawai') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('pegawai/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="NIP">NIP*</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								type="number" name="NIP" min="0" placeholder="PEGAWAI NIP" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="NAMA">NAMA*</label>
								<input class="form-control <?php echo form_error('NAMA') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA" placeholder="NAMA" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="TMPT_LAHIR">TMPT LAHIR*</label>
								<input class="form-control <?php echo form_error('TMPT_LAHIR') ? 'is-invalid':'' ?>"
								 type="text" name="TMPT_LAHIR"  placeholder="TEMPAT LAHIR" />
								<div class="invalid-feedback">
									<?php echo form_error('TMPT_LAHIR') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="price">TGL LAHIR*</label>
								<input class="form-control <?php echo form_error('TGL_LAHIR') ? 'is-invalid':'' ?>"
								 type="date" name="TGL_LAHIR" placeholder="TANGGAL LAHIR" />
								<div class="invalid-feedback">
									<?php echo form_error('TGL_LAHIR') ?>
								</div>
							</div>

              <div class="form-group">
                <label for="UMUR">UMUR*</label>
                <input class="form-control <?php echo form_error('UMUR') ? 'is-invalid':'' ?>"
                 type="number" name="UMUR" placeholder="UMUR" />
                <div class="invalid-feedback">
                  <?php echo form_error('UMUR') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="ESELON">ESELON*</label>
                <input class="form-control <?php echo form_error('ESELON') ? 'is-invalid':'' ?>"
                 type="text" name="ESELON" placeholder="ESELON" />
                <div class="invalid-feedback">
                  <?php echo form_error('ESELON') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="JABATAN">JABATAN*</label>
                <input class="form-control <?php echo form_error('JABATAN') ? 'is-invalid':'' ?>"
                 type="text" name="JABATAN" placeholder="JABATAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('JABATAN') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="JENJANG_PENDIDIKAN">JENJANG PENDIDIKAN*</label>
                <input class="form-control <?php echo form_error('JENJANG_PENDIDIKAN') ? 'is-invalid':'' ?>"
                 type="text" name="JENJANG_PENDIDIKAN" placeholder="JENJANG PENDIDIKAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('JENJANG_PENDIDIKAN') ?>
                </div>

              </div>
              <div class="form-group">
                <label for="name">TAHUN PENDIDIKAN*</label>
                <input class="form-control <?php echo form_error('TAHUN_PENDIDIKAN') ? 'is-invalid':'' ?>"
                 type="number" name="TAHUN_PENDIDIKAN" placeholder="TAHUN PENDIDIKAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('TAHUN_PENDIDIKAN') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">MASA KERJA GOLONGAN*</label>
                <input class="form-control <?php echo form_error('MSKRJA_GOLONGAN') ? 'is-invalid':'' ?>"
                 type="text" name="MSKRJA_GOLONGAN" placeholder="MASA KERJA GOLONGAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('MSKRJA_GOLONGAN') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">MASA KERJA KESELURUHAN*</label>
                <input class="form-control <?php echo form_error('MSKRJA_KESELURUHAN') ? 'is-invalid':'' ?>"
                 type="text" name="MSKRJA_KESELURUHAN" placeholder="MASA KERJA KESELURUUHAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('MSKRJA_KESELURUHAN') ?>
                </div>
              </div>

							<div class="form-group">
                <label for="name">JENIS KELAMIN*</label><br>
                <input class="radio <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>"
                 type="radio" name="JENIS_KELAMIN" value="Laki-Laki" /> Laki - laki<br>
								 <input class="radio <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>"
									type="radio" name="JENIS_KELAMIN" value="Perempuan" /> Perempuan
                <div class="invalid-feedback">
                  <?php echo form_error('JENIS_KELAMIN') ?>
                </div>
              </div>

							<div class="form-group">
								<label for="name">CUTI AWAL*</label>
								<input class="form-control <?php echo form_error('CUTI') ? 'is-invalid':'' ?>"
								 type="text" name="CUTI" placeholder="CUTI" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">CUTI DIPAKAI*</label>
								<input class="form-control <?php echo form_error('$CUTI_DIPAKAI') ? 'is-invalid':'' ?>"
								 type="text" name="CUTI_DIPAKAI" placeholder="CUTI DIPAKAI" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_DIPAKAI') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">SISA CUTI*</label>
								<input class="form-control <?php echo form_error('CUTI_SISA') ? 'is-invalid':'' ?>"
								 type="text" name="CUTI_SISA" placeholder="SISA CUTI" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_SISA') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('IMG') ? 'is-invalid':'' ?>"
								 type="file" name="IMG" />
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
