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
						<a href="<?php echo site_url('pegawai/listpegawai') ?>"><i class="fa fa-arrow-left"></i> Back</a>
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
<!--
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
							</div> -->

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
                <label for="name">TAMATAN JABATAN*</label>
                <input class="form-control <?php echo form_error('TAMATANJABATAN') ? 'is-invalid':'' ?>"
                 type="date" name="TAMATANJABATAN" placeholder="TAMATAN JABATAN" />
                <div class="invalid-feedback">
                  <?php echo form_error('TAMATANJABATAN') ?>
                </div>
              </div>
							<div class="form-group">
                <label for="name">Centang Jika Tamatan Jabatan Kosong</label>
								<input type="checkbox" placeholder="Kosong" name="TAMATANJABATAN" value="-">
              </div>

							<div class="form-group">
								<label for="name">PANGKAT*</label>
								<?php echo form_error('IDPANGKAT') ? 'is-invalid':''?>

								 <select name="IDPANGKAT">
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
									<?php echo form_error('IDPANGKAT') ?>
								</div>
							</div>

							<div class="form-group">
                <label for="name">GOLONGAN PANGKAT*</label>
                <input class="form-control <?php echo form_error('GOLONGANPANGKAT') ? 'is-invalid':'' ?>"
                 type="text" name="GOLPANGKAT" placeholder="GOLONGAN PANGKAT" />
                <div class="invalid-feedback">
                  <?php echo form_error('GOLONGANPANGKAT') ?>
                </div>
              </div>

							<div class="form-group">
								<label for="name">TAMATAN PANGKAT*</label>
								<input class="form-control <?php echo form_error('TAMATANPENDIDIKAN') ? 'is-invalid':'' ?>"
								 type="date" name="TAMATANPANGKAT" placeholder="TAMATAN PENDIDIKAN" />
								<div class="invalid-feedback">
									<?php echo form_error('TAMATANPENDIDIKAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">KENAIKAN BERKALA TERAHIR*</label>
								<input class="form-control <?php echo form_error('KENAIKANTERAHIR') ? 'is-invalid':'' ?>"
								 type="date" name="KENAIKANTERAHIR"/>
								<div class="invalid-feedback">
									<?php echo form_error('KENAIKANTERAHIR') ?>
								</div>
							</div>

              <div class="form-group">
                <label for="name">JENJANG PENDIDIKAN*</label>
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
                 type="text" name="MSKRJA_GOLONGAN" placeholder="00 Tahun 00 Bulan" />
                <div class="invalid-feedback">
                  <?php echo form_error('MSKRJA_GOLONGAN') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">MASA KERJA KESELURUHAN*</label>
                <input class="form-control <?php echo form_error('MSKRJA_KESELURUHAN') ? 'is-invalid':'' ?>"
                 type="text" name="MSKRJA_KESELURUHAN" placeholder=" KERJA KESELURUUHAN" />
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
								<label for="TMPT_LAHIR">STATUS*</label>
								<select class="" name="STATUS">
								<optgroup label="Pilih Status">
									<option value="Sukses">Sukses</option>
									<option value="Menunggu Hari">Menunggu Hari</option>
									<option value="Gagal">Gagal</option>
									<option value="Lain Lain nya">Lain Lain nya</option>
								</optgroup>
								<div class="invalid-feedback">
									<?php echo form_error('STATUS') ?>
								</div>
							</select>
								</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('IMG') ? 'is-invalid':'' ?>"
								 type="file" name="IMG" />
								<div class="invalid-feedback">
									<?php echo form_error('IMG') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="name">MASUKAN KODE*</label>
								<input class="form-control"
								 type="text" name="MASUKANKODE" placeholder="MASUKANKODE" />
								<div class="invalid-feedback">
									<?php echo form_error('CUTI_DIPAKAI') ?>
								</div>
							</div>-->

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>
				</div>

				</div>
				<!-- /.container-fluid -->

				</div>
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
