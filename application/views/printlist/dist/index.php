<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>DUK PNS</title>



      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>


</head>

<body>

  <div class="caption">Data Pegawai Negeri Sipil</div>
<div id="table">
	<div class="header-row row">
    <span class="cell primary">NIP</span>
    <span class="cell">Nama</span>
    <span class="cell">Umur</span>
    <span class="cell">Eselon</span>
    <span class="cell">Jabatan</span>
    <span class="cell">TMT Jabatan</span>
    <span class="cell">Kenaikan Terahir</span>
    <span class="cell">Kenaikan Berikutnya</span>
    <span class="cell">Kenaikan Berkala Terahir</span>
    <span class="cell">Kenaikan Berkala Berikutnya</span>
    <span class="cell">Jenjang Pnedidikan</span>
    <span class="cell">Tahun Pendidikan</span>
    <span class="cell">Masa Kerja Golongan</span>
    <span class="cell">Masa Kerja Keseluruhan</span>
  </div>
	<?php foreach ($pegawai as $pegawai): ?>
  <div class="row">
	<input type="radio" name="expand">
    <span class="cell primary" data-label="NIP"><?php echo $pegawai->NIP ?></span>
    <span class="cell" data-label="Nama"><?php echo $pegawai->NAMA ?></span>
    <span class="cell" data-label="Umur"><?php echo $pegawai->UMUR ?></span>
    <span class="cell" data-label="Eselon"><?php echo $pegawai->ESELON ?></span>
    <span class="cell" data-label="Jabatan"><?php echo $pegawai->JABATAN ?></span>
    <span class="cell" data-label="TMT Jabatan"><?php echo $pegawai->TAMATANJABATAN ?></a></span>
    <span class="cell" data-label="Kenaikan Terahir"><?php echo $pegawai->TAMATANPANGKAT ?></span>
    <span class="cell" data-label="Kenaikan Berikutnya"><?php echo $pegawai->PANGKATBERIKUTNYA ?></span>
    <span class="cell" data-label="Kenaikan Berkala Terahir"><?php echo $pegawai->KENAIKANTERAHIR ?></span>
    <span class="cell" data-label="Kenaikan Berkala Berikutnya"><?php echo $pegawai->KENAIKANBERIKUTNYA	 ?></a></span>
    <span class="cell" data-label="Jenjang Pendidikan"><?php echo $pegawai->JENJANG_PENDIDIKAN ?></span>
    <span class="cell" data-label="Tahun Pendidikan"><?php echo $pegawai->TAHUN_PENDIDIKAN ?></span>
    <span class="cell" data-label="Masa Kerja Golongan"><?php echo $pegawai->MSKRJA_GOLONGAN ?></span>
    <span class="cell" data-label="Masa Kerja Keseluruhan"><?php echo $pegawai->MSKRJA_KESELURUHAN ?></a></span>
  </div>
  <?php endforeach; ?>
</div>
<script>
  window.print();
</script>

</body>

</html>
