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

						<form action="<?php echo base_url('pegawai/list_detail/'.$pegawai->NIP) ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="NIP" value="<?php echo $pegawai->NIP?>" />
							<input type="hidden" name="CUTI" value="<?php echo $pegawai->CUTI?>" />

							<div class="form-group">
								<label for="name">NAMA*</label>
								<input class="form-control <?php echo form_error('NAMA') ? 'is-invalid':'' ?>"
								 type="text" disabled name="NAMA" placeholder="NAMA PEGAWAI" value="<?php echo $pegawai->NAMA ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">UMUR*</label>
								<input class="form-control <?php echo form_error('UMUR') ? 'is-invalid':'' ?>"
								 type="number" disabled name="UMUR" placeholder="UMUR" value="<?php echo $pegawai->UMUR ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('UMUR') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ESELON*</label>
								<input class="form-control <?php echo form_error('ESELON') ? 'is-invalid':'' ?>"
								 type="text" disabled name="ESELON" placeholder="ESELON" value="<?php echo $pegawai->ESELON ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ESELON') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JABATAN*</label>
								<input class="form-control <?php echo form_error('JABATAN') ? 'is-invalid':'' ?>"
								 type="text" disabled name="JABATAN" placeholder="JABATAN" value="<?php echo $pegawai->JABATAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JABATAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TAMATAN JABATAN*</label>
								<input class="form-control <?php echo form_error('TAMATANJABATAN') ? 'is-invalid':'' ?>"
								 type="date" disabled name="TAMATANJABATAN" placeholder="TAMATAN JABATAN" value="<?php echo $pegawai->TAMATANJABATAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TAMATANJABATAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">PANGKAT*</label>
								<!-- <input class="form-control <?php //echo form_error('PANGKAT') ? 'is-invalid':'' ?>"
								 type="text" name="PANGKAT" placeholder="PANGKAT" value="<?php //echo $pegawai->IDPANGKAT ?>" /> -->
								 <select disabled class="form-control" name="IDPANGKAT">
									 <optgroup label="TOP">
									 		<option value="18">TOP</option>
									 </optgroup>
								  <optgroup label="GOLONGAN IV ( PEMBINA )">
										<option value="17">PEMBINA UTAMA</option>
								    <option value="16">PEMBINA UTAMA MADYA</option>
								    <option value="15">PEMBINA UTAMA MUDA</option>
										<option value="14">PEMBINA TINGKAT 1</option>
										<option value="13">PEMBINA</option>
								  </optgroup>
								  <optgroup label="GOLONGAN III ( PENATA )">
								    <option value="12">PENATA TINGKAT 1</option>
								    <option value="11">PENATA</option>
										<option value="10">PENATA MUDA TINGKAT 1</option>
										<option value="9">PENATA MUDA</option>
								  </optgroup>
									<optgroup label="GOLONGAN II ( PENGATUR )">
										<option value="8">PENGATUR TINGKAT 1</option>
										<option value="7">PENGATUR</option>
										<option value="6">PENGATUR MUDA TINGKAT 1</option>
										<option value="5">PENGATUR MUDA</option>
									</optgroup>
									<optgroup label="GOLONGAN I ( JURU )">
										<option value="4">JURU TINGKAT 1</option>
										<option value="3">JURU</option>
										<option value="2">JURU MUDA TINGKAT 1</option>
										<option value="1">JURU MUDA</option>
									</optgroup>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('PANGKAT') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TAMATAN PANGKAT*</label>
								<input class="form-control <?php echo form_error('TAMATANJABATAN') ? 'is-invalid':'' ?>"
								 type="date" disabled name="TAMATANPANGKAT" placeholder="TAMATAN JABATAN" value="<?php echo $pegawai->TAMATANPANGKAT ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TAMATANJABATAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JENJANG PENDIDIKAN*</label>
								<input class="form-control <?php echo form_error('JENJANG_PENDIDIKAN') ? 'is-invalid':'' ?>"
								 type="text" disabled  name="JENJANG_PENDIDIKAN" placeholder="JENJANG PENDIDIKAN" value="<?php echo $pegawai->JENJANG_PENDIDIKAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JENJANG_PENDIDIKAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">TAHUN PENDIDIKAN*</label>
								<input class="form-control <?php echo form_error('TAHUN_PENDIDIKAN') ? 'is-invalid':'' ?>"
								 type="text" disabled name="TAHUN_PENDIDIKAN" placeholder="TAHUN PENDIDIKAN" value="<?php echo $pegawai->TAHUN_PENDIDIKAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TAHUN_PENDIDIKAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">MASA KERJA GOLONGAN*</label>
								<input class="form-control <?php echo form_error('MSKRJA_GOLONGAN') ? 'is-invalid':'' ?>"
								 type="text" disabled name="MSKRJA_GOLONGAN" placeholder="MASA KERJA GOLONGAN" value="<?php echo $pegawai->MSKRJA_GOLONGAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('MSKRJA_GOLONGAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">MASA KERJA KESELURUHAN*</label>
								<input class="form-control <?php echo form_error('MSKRJA_KESELURUHAN') ? 'is-invalid':'' ?>"
								 type="text" disabled name="MSKRJA_KESELURUHAN" placeholder="MASA KERJA KESELURUHAN" value="<?php echo $pegawai->MSKRJA_KESELURUHAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('MSKRJA_KESELURUHAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">JENIS KELAMIN*</label>
								<input class="form-control <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>"
								 type="text" disabled name="JENIS_KELAMIN" placeholder="JENIS KELAMIN" value="<?php echo $pegawai->JENIS_KELAMIN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('JENIS_KELAMIN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">CUTI AWAL</label>
								<input class="form-control <?php echo form_error('CUTI_DIPAKAI') ? 'is-invalid':'' ?>"
								 type="number" disabled name="CUTI" min="0" placeholder="CUTI DI PAKAI" value="<?php echo $pegawai->CUTI ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_DIPAKAI') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">CUTI DIPAKAI</label>
								<input class="form-control <?php echo form_error('CUTI_DIPAKAI') ? 'is-invalid':'' ?>"
								 type="number" disabled name="CUTI_DIPAKAI" min="0" placeholder="CUTI DI PAKAI" value="<?php echo $pegawai->CUTI_DIPAKAI ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_DIPAKAI') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">CUTI SISA</label>
								<input class="form-control <?php echo form_error('CUTI_SISA') ? 'is-invalid':'' ?>"
								 type="number" disabled name="CUTI_SISA" min="0" placeholder="SISA CUTI" value="<?php echo $pegawai->CUTI_SISA ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_SISA') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="TMPT_LAHIR">STATUS*</label>
								<select class="form-control" name="STATUS">
								<optgroup label="Pilih Status">
									<option value="Sukses">Sukses</option>
									<option value="Menunggu Hari">Menunggu Hari</option>
									<option value="Gagal">Gagal</option>
									<option value="Lain Lain nya">Lain Lain nya</option>
								</optgroup>		<?php echo form_error('TMPT_LAHIR') ?>
							</select>
								</div>
							</div>
						</form>
						<script>
							window.print();
						</script>
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
