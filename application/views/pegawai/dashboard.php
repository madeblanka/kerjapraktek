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
          <?php if($this->session->userdata('role')=='admin'): ?>
					<div class="card-body">
						<canvas id="myBarChart" width="100%" height="50"></canvas>
					</div>
        <?php endif ?>
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

<script type="text/javascript">
	// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["I A", "I B", "I C", "I D", "II A", "II B","II C","II D","III A","III B","III C","III D","IV A","IV B","IV C","IV D","IV E"],
    datasets: [{
      label: "Jumlah Pegawai",
      backgroundColor: ['#007bff','#007bff','#007bff','#007bff','#dc3545','#dc3545','#dc3545','#dc3545','#ffc107','#ffc107','#ffc107','#ffc107','#28a745','#28a745','#28a745','#28a745','#28a745'],
      borderColor: "rgba(2,117,216,1)",
      data: [
      <?= $this->Pegawai_model->countAselon('I.A');?>,
      <?= $this->Pegawai_model->countAselon('I.B');?>,
      <?= $this->Pegawai_model->countAselon('I.C');?>,
      <?= $this->Pegawai_model->countAselon('I.D');?>,
      <?= $this->Pegawai_model->countAselon('II.A');?>,
      <?= $this->Pegawai_model->countAselon('II.B');?>,
      <?= $this->Pegawai_model->countAselon('II.C');?>,
      <?= $this->Pegawai_model->countAselon('II.D');?>,
      <?= $this->Pegawai_model->countAselon('III.A');?>,
      <?= $this->Pegawai_model->countAselon('III.B');?>,
      <?= $this->Pegawai_model->countAselon('III.C');?>,
      <?= $this->Pegawai_model->countAselon('III.D');?>,
      <?= $this->Pegawai_model->countAselon('IV.A');?>,
      <?= $this->Pegawai_model->countAselon('IV.B');?>,
      <?= $this->Pegawai_model->countAselon('IV.C');?>,
      <?= $this->Pegawai_model->countAselon('IV.D');?>,
      <?= $this->Pegawai_model->countAselon('IV.E');?>,
      ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 30
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: <?= $this->Pegawai_model->total(); ?>,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>

</body>

</html>
