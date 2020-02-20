<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ini buat title halaman -->
	<title>Bootstrap Modal Dinamis</title>

	<!-- ini buat memasukkan CSS Bootstrap sob -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>

	<div class="container">

		<h1>Data Siswa</h1>

		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NAMA LENGKAP</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// memasukkan koneksi ke database
				require_once("koneksi.php");

				// query ke database, query standart ya dengan mysqli
				$query = $koneksi->query("SELECT * FROM siswa ORDER BY nama ASC");
				//jika ada datanya
				if($query->num_rows){
					$no = 1;	// membuat variabel $no untu nomor urut
					//melakukan perulangan while, membuat variabel $row untuk menyimpan datanya
					while($row = $query->fetch_assoc()){
						//menampilkan isi table nomor, nama dan aksi untuk tombol lihat data
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nama'].'</td>
							<td>
								<!-- perhatikan pada atribut class dan id, ini atribut yang berisi data yang akan dipanggil ketika tombol di klik -->
								<button type="button" class="view_data btn btn-primary btn-xs" data-toggle="modal" id="'.$row['id'].'" data-target="#myModal">Lihat data</button>
							</td>
						</tr>
						';
						// increase nomor
						$no++;
					}
				}
				?>
			</tbody>
		</table>
		<p>This tutorial made with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> by <a href="http://tutorialweb.net" target="_blank">tutorialweb.net</a></p>
	</div>

	<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Data siswa</h4>
				</div>
				<!-- memulai untuk konten dinamis -->
				<!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
				<div class="modal-body" id="data_siswa">
				</div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- ini buat memasukkan library jquery, kalau gak ada ini nanti gak jalan modalnya -->
	<script src="js/jquery.min.js"></script>
	<!-- ini buat memasukkan javascript Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- nah, ini buat menampilkan data modal dengan ajax, pantengin ya :) -->
	<script>
	// ini menyiapkan dokumen agar siap grak :)
	$(document).ready(function(){
		// yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
		$('.view_data').click(function(){
			// membuat variabel id, nilainya dari attribut id pada button
			// id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
			var id = $(this).attr("id");

			// memulai ajax
			$.ajax({
				url: 'view.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
				method: 'post',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
				data: {id:id},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
				success:function(data){		// kode dibawah ini jalan kalau sukses
					$('#data_siswa').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
					$('#myModal').modal("show");	// menampilkan dialog modal nya
				}
			});
		});
	});
	</script>
</body>
</html>
