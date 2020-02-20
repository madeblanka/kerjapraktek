<html><head><title>Popup Window Sekali 1 User browser</title>
<script>function adPop()
{ var poppy = localStorage.getItem(‘open’);
  if(!poppy){ window.open(‘http://safelinku.net/8HlP’,’_blank’) localStorage.setItem(‘open’,’true’); }}
</script>
<head>
  <body onclick="adPop();"><?php 
  for($i=0;$i<100;$i++)
  { echo "ini contoh halaman<br/>";}?>
</body>
<html>
