<?php
include 'include/phpqrcode/qrlib.php';

$tmp = "asset/gambar_kode/";
$isi = $_POST['isi'];
$kualitas = "H";
$ukuran = 10;
$padding = 2;
$nama = "nama_gambar".".png";
QRCode::png($isi, $tmp.$nama, $kualitas, $ukuran, $padding);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar Membuat QR Code</title>
	<link rel="stylesheet" type="text/css" href="asset/css/css.css">
</head>
<body >
	<div class="content">
		QRCode dari <h3><?php echo $isi?></h3>
		<br>
		<img src="<?php echo $tmp.$nama?>">
		
	</div>



</body>
</html>