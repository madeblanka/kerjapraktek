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

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
<span id="clock"></span>

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
										<th>KENAIKAN BERKALA TERAHIR</th>
										<th>KENAIKAN BERKALA BERIKUTNYA</th>
										<th>COUNT DOWN</th>
										<th>STATUS</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; ?>
									<?php foreach ($pegawai as $pegawai): ?>
										<?php $i++; ?>
									<tr>
										<td width="150">
											<?php echo $pegawai->NIP ?>
										</td>
										<td>
												<?php echo $pegawai->NAMA ?>
											</td>
											<td>
												<?php echo date('d-m-Y', strtotime($pegawai->KENAIKANTERAHIR)) ?>
  										</td>
											<td>
												<?php echo date('d-m-Y',strtotime($pegawai->KENAIKANBERIKUTNYA )) ?>
											</td>
											<td>
                        <?php $KGB = date('Y-m-d H:i:s', strtotime($pegawai->KENAIKANBERIKUTNYA)) ?>
                        <div class="container">
                            <p id="timer<?php echo $i; ?>">
                                <span id="timer-days<?php echo $i; ?>"></span>
                                <span id="timer-hours<?php echo $i; ?>"></span>
                                <span id="timer-mins<?php echo $i; ?>"></span>
                                <span id="timer-secs<?php echo $i; ?>"></span>
                            </p>
                        </div>
                        <script>
											      var endDate<?php echo $i; ?> = new Date("<?php echo $KGB; ?>").getTime(),
                            timer = setInterval(function() {
                                let e = (new Date).getTime(),
                                    n = endDate<?php echo $i; ?> - e;
                                if (n >= 0) {
                                    let e = Math.floor(n / 864e5),
                                        t = Math.floor(n % 864e5 / 36e5),
                                        l = Math.floor(n % 36e5 / 6e4),
                                        a = Math.floor(n % 6e4 / 1e3);
																				//console.log(e)
                                    document.getElementById("timer-days<?php echo $i; ?>").innerHTML = e + "<span class='label'>DAY(S)</span>", document.getElementById("timer-hours<?php echo $i; ?>").innerHTML = ("0" + t).slice(-2) + "<span class='label'>HR(S)</span>", document.getElementById("timer-mins<?php echo $i; ?>").innerHTML = ("0" + l).slice(-2) + "<span class='label'>MIN(S)</span>", document.getElementById("timer-secs<?php echo $i; ?>").innerHTML = ("0" + a).slice(-2) + "<span class='label'>SEC(S)</span>"
                                } else document.getElementById("timer<?php echo $i; ?>").innerHTML = "Mohon Hubungi Bagian Kepegawaian Untuk Tindak Lanjut Berikutnya !"
                            }, 1e3);
                        </script>
											</td>
									  	<td>
												<?php echo $pegawai->STATUS ?>
											</td>
											<td width="250">
											 <a href="<?php echo site_url('pegawai/list_detail/'.$pegawai->NIP) ?>"
												 class="btn btn-small"><i class="fa fa-print"></i> Print</a>
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
