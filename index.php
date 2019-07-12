<!DOCTYPE html>
<html>
<head>
<title>MD5 Generator | muhrizki1996.github.io</title> </head>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<body>
<div class="md5-generator">
   <h2 class="judul">MD5 Generator <br> muhrizki1996.github.io</h2>
<!-- <a class="brand" href="https://muhrizki1996.github.io">muhrizki1996.github.io</a> -->
<?php
   if(isset($_GET['text'])){
if($_GET['text'] == "kosong"){
echo "<center><h4 style='color:red'>Text Belum Di Masukkan !</h4><center>";
} }
?>
<form action="generate.php" method="post">
<input type="text" class="text-input" name="text" placeholder="Masukkan Text">
<center>
<input type="submit" value="Generate" class="tombol">
</center>
</form>
</body>
</html>