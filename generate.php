<!DOCTYPE html>
<html>
<head>
<title>Hasil Generate Untuk Text: "<?php $text = $_POST['text']; echo $text; ?>" | muhrizki1996.github.io</title> </head>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<body>
<div class="md5-generator">
   <h2 class="judul">MD5 Generator <br> muhrizki1996.github.io</h2>
   <!-- <a class="brand" href="https://muhrizki1996.github.io">muhrizki1996.github.io</a> -->
<div class="result">
   MD5 dari text yang anda masukkan adalah<br>
<?php
$text = $_POST['text'];
if($text == ""){
    header("location:index.php?text=kosong"); }
else{
    echo md5($text);
}
?>
</div>
<br>
<center>
<form>
<input type="button" value="Generate Yang Lainnya" onclick="history.back()" class="tombol">
</form>
<center>
</div>
</body>
</html>