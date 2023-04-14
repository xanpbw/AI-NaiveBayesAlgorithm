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
<h1><center><b>Penerima Modal dengan Algoritma Naive Bayes</b></center></h1>
<table border=1 align="center">
				<thead align="center">
					<tr>
						<th>Nama UKM</th>
						<th>Lama Usaha</th>
						<th>Jumlah Pekerja</th>
						<th>Omset</th>
						<th>Jumlah Aset</th>
						<th>Hasil Keputusan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<?php
						$query = mysql_query ("SELECT * FROM modal");
						if($query == false){
							die ("Terdapat Kesalahan : ". mysql_error());
						}
						while($que = mysql_fetch_array($query,MYSQL_ASSOC)){
							echo "
								<tr>
									<td>$que[nm_ukm]</td>
									<td>$que[lu] Tahun</td>
									<td>$que[jp] Orang</td>
									<td>$que[om] Juta</td>
									<td>$que[ja] Buah</td>";
								if ($que['hk'] == 1){
									echo"<td bgcolor='#00ff00'>Ya</td>";
								}elseif($que['hk'] == 2){
									echo"<td bgcolor='#ff0000'>Tidak</td>";
								}else{
									echo"<td bgcolor='#ffff00'>Tunda</td>";
								}
								echo"<td><a href='delete.php?id=$que[id]'>Hapus</a></td>";
							echo"</tr>";
						}
					?>
				</tbody>
</table><br>
<center>
	<a href="add_manual.php"><button type="submit">
	Tambah Manual
	</button></a><br><font size=2>*Menambah data dengan hasil keputusan secara Manual</font><br><br>
	<a href="add.php"><button type="submit">
	Tambah Menggunakan Algoritma
	</button></a><br><font size=2>*Menambah data dengan hasil keputusan Menggunakan Algoritma Naive Bayes</font><br><br>
</center>
<?php
/*
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