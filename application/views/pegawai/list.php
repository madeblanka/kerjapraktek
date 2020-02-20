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
						<!-- <a href="<?php echo site_url('pegawai/add') ?>"><i class="fas fa-plus"></i> Add New</a> -->
						<!-- <a href="<?php echo site_url('pegawai/printlist') ?>"><i class="fas fa-plus"></i> Print Data</a> -->
						<script type="text/javascript">
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    var waktu = new Date();            //membuat object date berdasarkan waktu saat
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<!-- /*Menampilkan Waktu*/ -->
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
<span id="clock"></span>
<!-- /*Selesai Menampilkan Waktu*/
/*Menampilakan Hari*/ -->
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jumat";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,
<!-- /*Selesai Menampilkan Hari*/

/*Menampilkan Tanggal*/ -->
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;

/*Selesai Menampilkan Tanggal*/?>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NIP</th>
										<th>NAMA</th>
										<!-- <th>TEMPAT LAHIR</th>
										<th>TANGGAL LAHIR</th>-->
										<th>UMUR</th>
										<th>ESELON</th>
										<th>JABATAN</th>
										<th>TAMATAN JABATAN</th>
										<th>KENAIKAN PANGKAT TERAHIR</th>
										<th>KENAIKAN PANGKAT BERIKUTNYA</th>
										<th>KENAIKAN BERKALA TERAHIR</th>
										<th>KENAIKAN BERKALA BERIKUTNYA</th>
										<th>JENJANG PENDIDIKAN</th>
										<th>TAHUN PENDIDIKAN</th>
										<th>MASA KERJA GOLONGAN</th>
										<th>MASA KERJA KESELURUHAN</th>
										<!-- <th>JENIS KELAMIN</th> -->
										<th>CUTI</th>
										<th>CUTI DIPAKAI</th>
										<th>SISA CUTI</th>
										<th>STATUS</th>
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
											<!-- <td>
												<?php echo $pegawai->TMPT_LAHIR ?>
											</td>
											<td>
												<?php echo $pegawai->TGL_LAHIR ?>
											</td>-->
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
												<?php $tamatanjabatan = $pegawai->TAMATANJABATAN;
												$kosong = '-';
												if ($tamatanjabatan == $kosong)
												{
													echo $kosong;
												}
												else {
													echo date('d-m-Y', strtotime($pegawai->TAMATANJABATAN));
												}
												?>
											</td>
											<td>
												<?php echo date('d-m-Y', strtotime($pegawai->TAMATANPANGKAT)) ?>
											</td>
											<td>
												<?php
												$pangkatberikutnya = $pegawai->PANGKATBERIKUTNYA;
												$isi = "-";
												if ($pangkatberikutnya == $isi) {
														echo $pangkatberikutnya;
												}
												else {
														echo date('d-m-Y', strtotime($pegawai->PANGKATBERIKUTNYA));
												}?>
											</td>
											<td>
												<?php echo date('d-m-Y', strtotime($pegawai->KENAIKANTERAHIR)) ?>
											</td>
											<td>
												<?php echo date('d-m-Y', strtotime($pegawai->KENAIKANBERIKUTNYA))	 ?>
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
											<!-- <td>
												<?php echo $pegawai->JENIS_KELAMIN ?>
											</td> -->
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
												<?php echo $pegawai->STATUS ?>
											</td>

										<td>
											<img src="<?php echo base_url('upload/pegawai/'.$pegawai->IMG) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('pegawai/edit/'.$pegawai->NIP) ?>"
											 class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>

											 <a href="<?php echo site_url('pegawai/list_detail/'.$pegawai->NIP) ?>"
												 class="btn btn-small"><i class="fa fa-print"></i> Print</a>

											<a onclick="deleteConfirm('<?php echo site_url('pegawai/delete/'.$pegawai->NIP) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
