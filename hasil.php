<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil</title>
</head>
<body>	
<?php
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];

	$total = $jumlah * $harga;

	// Proses
	switch ($total) {
		case ($total < 200000) :
			echo "Nama : " . $nama;
			echo "<br> Jumlah barang : " . $jumlah;
			echo "<br> Total harga : " . $total;
			echo "<br> Anda tidak mendapatkan diskon.";
			echo "<br> Total bayar  : " . $total;
			break;
		case ($total >= 200000 && $total < 400000) :
			echo "Nama : " . $nama;
			echo "<br> Jumlah barang : " . $jumlah;
			echo "<br> Total harga : " . $total;
			$diskon = 10/100 * $total;
			echo "<br> Diskon : " . $diskon;
			echo "<br> Anda mendapatkan diskon 10% senilai " . $diskon . " karena total belanja : " . $total;
			$total_bayar = $total - $diskon;
			echo "<br> Total bayar : " . $total_bayar;
			break;
		case ($total >= 400000 && $total < 1000000) :
			echo "Nama : " . $nama;
			echo "<br> Jumlah barang : " . $jumlah;
			echo "<br> Total harga : " . $total;
			$diskon = 20/100 * $total;
			echo "<br> Diskon : " . $diskon;
			echo "<br> Anda mendapatkan diskon 20% senilai " . $diskon . " karena total belanja : " . $total;
			$total_bayar = $total - $diskon;
			echo "<br> Total bayar : " . $total_bayar;
			break;
		default:
			echo "Nama : " . $nama;
			echo "<br> Jumlah barang : " . $jumlah;
			echo "<br> Total harga : " . $total;
			echo "<br> Belanja anda melebihi batas ketentuan";
			echo "<br> Total bayar  : " . $total;
			break;
	}

?>
</body>
</html>