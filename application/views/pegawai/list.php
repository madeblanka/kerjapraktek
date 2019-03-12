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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('pegawai/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NIP</th>
										<th>NAMA</th>
										<th>TEMPAT LAHIR</th>
										<th>TANGGAL LAHIR</th>
										<th>UMUR</th>
										<th>ESELON</th>
										<th>JABATAN</th>
										<th>JENJANG PENDIDIKAN</th>
										<th>TAHUN PENDIDIKAN</th>
										<th>MASA KERJA GOLONGAN</th>
										<th>MASA KERJA KESELURUHAN</th>
										<th>JENIS KELAMIN</th>
										<th>CUTI</th>
										<th>CUTI DIPAKAI</th>
										<th>SISA CUTI</th>
										<th>PHOTO</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pegawai as $pegawai): ?>
									<tr>
										<td width="150">
											<?php echo $pegawai->NIP ?>
										</td>
										<td>
											<?php echo $pegawai->NAMA ?>
										</td>
										<td>
											<?php echo $pegawai->TMPT_LAHIR ?>
										</td>
										<td>
											<?php echo $pegawai->TGL_LAHIR ?>
										</td>
										<td>
											<?php echo $pegawai->UMUR ?>
										</td>
										<td>
											<?php echo $pegawai->ESELON ?>
										</td>
										<td>
											<?php echo $pegawai->JABATAN ?>
										</td>
										<td>
											<?php echo $pegawai->JENJANG_PENDIDIKAN ?>
										</td>
										<td>
											<?php echo $pegawai->TAHUN_PENDIDIKAN ?>
										</td>
										<td>
											<?php echo $pegawai->MSKRJA_GOLONGAN ?>
										</td>
										<td>
											<?php echo $pegawai->MSKRJA_KESELURUHAN ?>
										</td>
										<td>
											<?php echo $pegawai->JENIS_KELAMIN ?>
										</td>
										<td>
											<?php echo $pegawai->CUTI ?>
										</td>
										<td>
											<?php echo $pegawai->CUTI_DIPAKAI ?>
										</td>
										<td>
											<?php echo $pegawai->CUTI_SISA ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/pegawai/'.$pegawai->IMG) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('pegawai/edit/'.$pegawai->NIP) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('pegawai/delete/'.$pegawai->NIP) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("_partials/modal.php") ?>

	<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
