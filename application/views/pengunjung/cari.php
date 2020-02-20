<?php
$connection = mysqli_connect('localhost', 'root', '');

$db = mysqli_select_db($connection,'nkominfo');

$term = strip_tags(substr($_GET['NIP'],0, 100));

$term = mysqli_escape_string($connection,$term); // Attack Prevention
if($term=="")
echo "<p class=\"text-error\">Masukan NIP";
else{

$query = mysqli_query($connection,"select * from pegawai where nip like '%$term%'") or die(mysqli_error());
$hasil = '';

if (mysqli_num_rows($query)){
while($rows = mysqli_fetch_array($query)){

$hasil=$hasil." <div class=\"row\">
	<div class=\"span8\">
		<div class=\"row\">
			<div class=\"span8\">
				<h4>$rows[NIP]</h4>
			</div>
		</div>
		<div class=\"row\">
			<div class=\"span2\">
				 <img src=\"image/$rows[NAMA]\" >
			</div>
		</div>
</div>
</div>";

}
} else{
$hasil = " <h4 style='color:red'>NIP TIDAK DITEMUKAN!'>";
}

echo $hasil;
}
?>
