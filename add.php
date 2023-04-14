<?php
include "koneksi.php";
?>
<html>
<head>
<title>
Penerima Modal dengan Algoritma Naive Bayes
</title>
</head>
<body>
<center>
<form action="simpan_naive.php" name="add_m" enctype="multipart/form-data" method="post">
<h2>Tambah Data Menggunakan Naive Bayes</h2>
Nama UKM &nbsp &nbsp &nbsp <input type="text" name="nm_ukm"><br>
Lama Usaha &nbsp &nbsp &nbsp <input type="text" name="lu"><br>
Jumlah Pekerja &nbsp <input type="text" name="jp"><br>
Omset &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="om"><br>
Jumlah Asset &nbsp &nbsp <input type="text" name="ja"><br>
<br>
<button type="submit">
Simpan
</button>
</form>
<a href="index.php"><button type="submit">
	Kembali
</button></a>
</center>

<?php
/*
<center>
	<a href="#"><button type="submit">
	Tambah Manual
	</button></a><br><font size=2>*Menambah data dengan hasil keputusan secara Manual</font><br><br>
	<a href="#"><button type="submit">
	Tambah Menggunakan Algoritma
	</button></a><br><font size=2>*Menambah data dengan hasil keputusan Menggunakan Algoritma Naive Bayes</font><br><br>
</center>
<h3>kelompok :</h3>
<ul>
	<li><h3>Surya Balhaqqi</h3></li>
	<li><h3>Prabowo Adi Perwira</h3></li>
	<li><h3>Ricky Agung</h3></li>
</ul>

									<td>
									<a href='#' class='open_modal' id='$kelompok[kd_kelompok]'>Edit</a> |
									<a href='#' onClick='confirm_delete(\"kelompok_delete.php?kd_kelompok=$kelompok[kd_kelompok]\")'>Ganti Status</a>
									</td>
*/
?>

</body>
</html>