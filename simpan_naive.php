<?php

include "koneksi.php";

$nm_ukm	= $_POST["nm_ukm"];
$lu		= $_POST["lu"];
$jp		= $_POST["jp"];
$om		= $_POST["om"];
$ja		= $_POST["ja"];
//========================================================================
//Menghitung banyak data
$query = mysqli_query($connection, "Select count(id) from modal");
if ($query == false) {
	die("Terdapat Kesalahan : ");
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$banyak_data = $que['count(id)'];
}
//========================================================================
//Menghitung banyak data dengan hesil ketentuannya "ya"
$query = mysqli_query($connection, "Select count(hk) from modal where hk='1'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$banyak_ya = $que['count(hk)'];
}
//========================================================================
//Menghitung banyak data dengan hesil ketentuannya "tidak"
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$banyak_tidak = $que['count(hk)'];
}
//========================================================================
//Menghitung banyak data dengan hesil ketentuannya "tunda"
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$banyak_tunda = $que['count(hk)'];
}
//========================================================================
//Langkah 1: Menghitung Jumlah Class
$data_ya	= $banyak_ya / $banyak_data;		//P(CI) ketentuan ya
$data_tidak	= $banyak_tidak / $banyak_data;	//P(CI) ketentuan tidak
$data_tunda	= $banyak_tunda / $banyak_data;	//P(CI) ketentuan tunda
//========================================================================
//Langkah 2: Menghitung Jumlah kasus yang sama dengan class yang sama
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and lu<'3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_1_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and lu<'3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_1_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and lu<'3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_1_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and lu>='3' and lu<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_2_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and lu>='3' and lu<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_2_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and lu>='3' and lu<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_2_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and lu>'7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_3_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and lu>'7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_3_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and lu>'7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$lu_3_3 = $que['count(hk)'];
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and jp<'10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_1_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and jp<'10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_1_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and jp<'10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_1_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and jp>='10' and jp<='20'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_2_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and jp>='10' and jp<='20'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_2_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and jp>='10' and jp<='20'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_2_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and jp>'20' and jp<='30'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_3_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and jp>'20' and jp<='30'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_3_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and jp>'20' and jp<='30'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$jp_3_3 = $que['count(hk)'];
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and om<'1'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_1_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and om<'1'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_1_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and om<'1'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_1_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and om>='1' and om<='3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_2_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and om>='1' and om<='3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_2_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and om>='1' and om<='3'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_2_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and om>'3' and om<='5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_3_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and om>'3' and om<='5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_3_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and om>'3' and om<='5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$om_3_3 = $que['count(hk)'];
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and ja<'5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_1_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and ja<'5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_1_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and ja<'5'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_1_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and ja>='5' and ja<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_2_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and ja>='5' and ja<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_2_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and ja>='5' and ja<='7'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_2_3 = $que['count(hk)'];
}

$query = mysqli_query($connection, "Select count(hk) from modal where hk='1' and ja>'7' and ja<='10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_3_1 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='2' and ja>'7' and ja<='10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_3_2 = $que['count(hk)'];
}
$query = mysqli_query($connection, "Select count(hk) from modal where hk='3' and ja>'7' and ja<='10'");
if ($query == false) {
	die("Terdapat Kesalahan : " . mysqli_error($query));
}
while ($que = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$ja_3_3 = $que['count(hk)'];
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//menentukan klasifikasi nilai dari data yg dimasukan user
if ($lu < 3) {
	$lu_1 = $lu_1_1 / $banyak_ya;
	$lu_2 = $lu_1_2 / $banyak_tidak;
	$lu_3 = $lu_1_3 / $banyak_tunda;
} else {
	if ($lu >= 3 and $lu <= 7) {
		$lu_1 = $lu_2_1 / $banyak_ya;
		$lu_2 = $lu_2_2 / $banyak_tidak;
		$lu_3 = $lu_2_3 / $banyak_tunda;
	} else {
		$lu_1 = $lu_3_1 / $banyak_ya;
		$lu_2 = $lu_3_2 / $banyak_tidak;
		$lu_3 = $lu_3_3 / $banyak_tunda;
	}
}
//-----------------------------------
if ($jp < 10) {
	$jp_1 = $jp_1_1 / $banyak_ya;
	$jp_2 = $jp_1_2 / $banyak_tidak;
	$jp_3 = $jp_1_3 / $banyak_tunda;
} else {
	if ($jp >= 10 and $jp <= 20) {
		$jp_1 = $jp_2_1 / $banyak_ya;
		$jp_2 = $jp_2_2 / $banyak_tidak;
		$jp_3 = $jp_2_3 / $banyak_tunda;
	} else {
		$jp_1 = $jp_3_1 / $banyak_ya;
		$jp_2 = $jp_3_2 / $banyak_tidak;
		$jp_3 = $jp_3_3 / $banyak_tunda;
	}
}
//-----------------------------------
if ($om < 1) {
	$om_1 = $om_1_1 / $banyak_ya;
	$om_2 = $om_1_2 / $banyak_tidak;
	$om_3 = $om_1_3 / $banyak_tunda;
} else {
	if ($om >= 1 and $om <= 3) {
		$om_1 = $om_2_1 / $banyak_ya;
		$om_2 = $om_2_2 / $banyak_tidak;
		$om_3 = $om_2_3 / $banyak_tunda;
	} else {
		$om_1 = $om_3_1 / $banyak_ya;
		$om_2 = $om_3_2 / $banyak_tidak;
		$om_3 = $om_3_3 / $banyak_tunda;
	}
}
//-----------------------------------
if ($ja < 5) {
	$ja_1 = $ja_1_1 / $banyak_ya;
	$ja_2 = $ja_1_2 / $banyak_tidak;
	$ja_3 = $ja_1_3 / $banyak_tunda;
} else {
	if ($ja >= 5 and $ja <= 7) {
		$ja_1 = $ja_2_1 / $banyak_ya;
		$ja_2 = $ja_2_2 / $banyak_tidak;
		$ja_3 = $ja_2_3 / $banyak_tunda;
	} else {
		$ja_1 = $ja_3_1 / $banyak_ya;
		$ja_2 = $ja_3_2 / $banyak_tidak;
		$ja_3 = $ja_3_3 / $banyak_tunda;
	}
}
//=============================================================
//Langkah 3: Kalikan semua hasil variable YA,TIDAK DAN TUNDA 
//keputusan ya
$hitung_ya = $lu_1 * $jp_1 * $om_1 * $ja_1;
$hitung_tidak = $lu_2 * $jp_2 * $om_2 * $ja_2;
$hitung_tunda = $lu_3 * $jp_3 * $om_3 * $ja_3;
//=============================================================
//langkah 4 mengkalikan P(CI) dan menentukan ya,tidak,dan tunda
$hasil_ya = $hitung_ya * $data_ya;
$hasil_tidak = $hitung_tidak * $data_tidak;
$hasil_tunda = $hitung_tunda * $data_tunda;
//-------------------------------------------------------------
//penentuan ya, tidak, dan tunda
if ($hasil_ya > $hasil_tidak) {
	if ($hasil_ya > $hasil_tunda) {
		$hk = 1;
	} else {
		$hk = 3;
	}
} else {
	if ($hasil_tidak > $hasil_tunda) {
		$hk = 2;
	} else {
		$hk = 3;
	}
}
//-------------------------------------------------------------
//insert data
if ($add = mysqli_query($connection, "INSERT INTO modal (nm_ukm, lu, jp, om, ja, hk) VALUES ('$nm_ukm', '$lu', '$jp', '$om', '$ja' , '$hk')")) {
echo "
<b>Langkah 1 Penentuan Class / P(Ci)</b><br>
P( HASIL KEPUTUSAN = “YA”) = $banyak_ya/$banyak_data = $data_ya <br>
P( HASIL KEPUTUSAN = “TIDAK”)   $banyak_tidak/$banyak_data = $data_tidak<br>
P( HASIL KEPUTUSAN = “TUNDA”)   $banyak_tunda/$banyak_data = $data_tunda <br>
<br>
<b>Langkah 2: Menghitung Jumlah kasus yang sama dengan class yang sama<br>
P(X|Ci)</b><br>
P( LAMA USAHA <   3 | HASIL KEPUTUSAN = “YA”) = $lu_1_1/$banyak_ya<br>
P( LAMA USAHA <   3 | HASIL KEPUTUSAN = “TIDAK”) = $lu_1_2/$banyak_tidak<br>
P( LAMA USAHA <   3 | HASIL KEPUTUSAN = “TUNDA”) = $lu_1_3/$banyak_tunda<br>
<br>
P( LAMA USAHA >= 3 & <=7 | HASIL KEPUTUSAN = “YA”) = $lu_2_1/$banyak_ya<br>
P( LAMA USAHA >= 3 & <=7 | HASIL KEPUTUSAN = “TIDAK”) = $lu_2_2/$banyak_tidak<br>
P( LAMA USAHA >= 3 & <=7 | HASIL KEPUTUSAN = “TUNDA”) = $lu_2_3/$banyak_tunda<br>
<br>
P( LAMA USAHA  >  7 | HASIL KEPUTUSAN = “YA”) = $lu_3_1/$banyak_ya<br>
P( LAMA USAHA  >  7 | HASIL KEPUTUSAN = “TIDAK”) = $lu_3_2/$banyak_tidak<br>
P( LAMA USAHA  >  7 | HASIL KEPUTUSAN = “TUNDA”) = $lu_3_3/$banyak_tunda<br>
<br>
===============================================================<br>
P( JUMLAH PEKERJA  <   10| HASIL KEPUTUSAN = “YA”) = $jp_1_1/$banyak_ya<br>
P( JUMLAH PEKERJA  <   10| HASIL KEPUTUSAN = “TIDAK”) = $jp_1_2/$banyak_tidak<br>
P( JUMLAH PEKERJA  <   10| HASIL KEPUTUSAN = “TUNDA”) = $jp_1_3/$banyak_tunda<br>
<br>
P( JUMLAH PEKERJA  >= 10 & <= 20 | HASIL KEPUTUSAN = “YA”) = $jp_2_1/$banyak_ya<br>
P( JUMLAH PEKERJA  >= 10 & <= 20 | HASIL KEPUTUSAN = “TIDAK”) = $jp_2_2/$banyak_tidak<br>
P( JUMLAH PEKERJA  >= 10 & <= 20 | HASIL KEPUTUSAN = “TUNDA”) = $jp_2_3/$banyak_tunda<br>
<br>
P( JUMLAH PEKERJA  > 20 & <= 30 | HASIL KEPUTUSAN = “YA”) = $jp_3_1/$banyak_ya<br>
P( JUMLAH PEKERJA  > 20 & <= 30 | HASIL KEPUTUSAN = “TIDAK”) = $jp_3_2/$banyak_tidak<br>
P( JUMLAH PEKERJA  > 20 & <= 30 | HASIL KEPUTUSAN = “TUNDA”) = $jp_3_3/$banyak_tunda<br>
<br>
===============================================================<br>
P( OMSET  < 1| HASIL KEPUTUSAN = “YA”) = $om_1_1/$banyak_ya<br>
P( OMSET  < 1| HASIL KEPUTUSAN = “TIDAK”) = $om_1_2/$banyak_tidak<br>
P( OMSET  < 1| HASIL KEPUTUSAN = “TUNDA”) = $om_1_3/$banyak_tunda<br>
<br>
P( OMSET  >= 1 & <= 3 | HASIL KEPUTUSAN = “YA”) = $om_2_1/$banyak_ya<br>
P( OMSET  >= 1 & <= 3 | HASIL KEPUTUSAN = “TIDAK”) = $om_2_2/$banyak_tidak<br>
P( OMSET  >= 1 & <= 3 | HASIL KEPUTUSAN = “TUNDA”) = $om_2_3/$banyak_tunda<br>
<br>
P( OMSET  >   3 & <= 5 | HASIL KEPUTUSAN = “YA”) = $om_3_1/$banyak_ya<br>
P( OMSET  >   3 & <= 5 | HASIL KEPUTUSAN = “TIDAK”) = $om_3_2/$banyak_tidak<br>
P( OMSET  >   3 & <= 5 | HASIL KEPUTUSAN = “TUNDA”) = $om_3_3/$banyak_tunda<br>
<br>
===============================================================<br>
P( JUMLAH ASET <   5| HASIL KEPUTUSAN = “YA”) = $ja_1_1/$banyak_ya<br>
P( JUMLAH ASET <   5| HASIL KEPUTUSAN = “TIDAK”) = $ja_1_2/$banyak_tidak<br>
P( JUMLAH ASET <   5| HASIL KEPUTUSAN = “TUNDA”) = $ja_1_3/$banyak_tunda<br>
<br>
P( JUMLAH ASET >= 5 & <= 7 | HASIL KEPUTUSAN = “YA”) = $ja_2_1/$banyak_ya<br>
P( JUMLAH ASET >= 5 & <= 7 | HASIL KEPUTUSAN = “TIDAK”) = $ja_2_2/$banyak_tidak<br>
P( JUMLAH ASET >= 5 & <= 7 | HASIL KEPUTUSAN = “TUNDA”) = $ja_2_3/$banyak_tunda<br>
<br>
P( JUMLAH ASET >   7 & <= 10 | HASIL KEPUTUSAN = “YA”) = $ja_3_1/$banyak_ya<br>
P( JUMLAH ASET >   7 & <= 10 | HASIL KEPUTUSAN = “TIDAK”) = $ja_3_2/$banyak_tidak<br>
P( JUMLAH ASET >   7 & <= 10 | HASIL KEPUTUSAN = “TUNDA”) = $ja_3_3/$banyak_tunda<br>
<br>
==================================================================<br>
<br>
<b>Langkah 3: Kalikan semua hasil variable YA,TIDAK DAN TUNDA</b><br>
<br>
P(X|HASIL KEPUTUSAN = “YA”) = P(LAMA USAHA = $lu, JUMLAH PEKERJA = $jp, OMSET = $om, JUMLAH ASSET = $ja | HASIL KEPUTUSAN = “YA”)<br>
= ";
if ($lu < 3){
	echo "$lu_1_1/$banyak_ya";
}else{
	if($lu >= 3 and $lu <= 7){
	echo "$lu_2_1/$banyak_ya";
}else{
	echo "$lu_3_1/$banyak_ya";

}}
echo " * ";
if ($jp < 10){
	echo "$jp_1_1/$banyak_ya";
}else{
	if($jp >= 10 and $jp <= 20){
	echo "$jp_2_1/$banyak_ya";
}else{
	echo "$jp_3_1/$banyak_ya";
}}
echo " * ";
if ($om < 1){
	echo "$om_1_1/$banyak_ya";
}else{
	if($om >= 1 and $om <= 3){
	echo "$om_2_1/$banyak_ya";
}else{
	echo "$om_3_1/$banyak_ya";
}}
echo " * ";
if ($ja < 5){
	echo "$ja_1_1/$banyak_ya";
}else{
	if($ja>= 5 and $ja <= 7){
	echo "$ja_2_1/$banyak_ya";
}else{
	echo "$ja_3_1/$banyak_ya";
}}
echo "<br>
= $lu_1 * $jp_1 * $om_1 * $ja_1 = $hitung_ya<br>
<br>
P(X|HASIL KEPUTUSAN = “TIDAK”) = P(LAMA USAHA = $lu, JUMLAH PEKERJA = $jp, OMSET = $om, JUMLAH ASSET = $ja | HASIL KEPUTUSAN = “TIDAK”)<br>
= ";
if ($lu < 3){
	echo "$lu_1_2/$banyak_tidak";
}else{
	if($lu >= 3 and $lu <= 7){
	echo "$lu_2_2/$banyak_tidak";
}else{
	echo "$lu_3_2/$banyak_tidak";

}}
echo " * ";
if ($jp < 10){
	echo "$jp_1_2/$banyak_tidak";
}else{
	if($jp >= 10 and $jp <= 20){
	echo "$jp_2_2/$banyak_tidak";
}else{
	echo "$jp_3_2/$banyak_tidak";
}}
echo " * ";
if ($om < 1){
	echo "$om_1_2/$banyak_tidak";
}else{
	if($om >= 1 and $om <= 3){
	echo "$om_2_2/$banyak_tidak";
}else{
	echo "$om_3_2/$banyak_tidak";
}}
echo " * ";
if ($ja < 5){
	echo "$ja_1_2/$banyak_tidak";
}else{
	if($ja>= 5 and $ja <= 7){
	echo "$ja_2_2/$banyak_tidak";
}else{
	echo "$ja_3_2/$banyak_tidak";
}}
echo "<br>
= $lu_2 * $jp_2 * $om_2 * $ja_2 = $hitung_tidak<br>
<br>
P(X|HASIL KEPUTUSAN = “TUNDA”) = P(LAMA USAHA = $lu, JUMLAH PEKERJA = $jp, OMSET = $om, JUMLAH ASSET = $ja | HASIL KEPUTUSAN = “TUNDA”)<br>
= ";
if ($lu < 3){
	echo "$lu_1_3/$banyak_tunda";
}else{
	if($lu >= 3 and $lu <= 7){
	echo "$lu_2_3/$banyak_tunda";
}else{
	echo "$lu_3_3/$banyak_tunda";

}}
echo " * ";
if ($jp < 10){
	echo "$jp_1_3/$banyak_tunda";
}else{
	if($jp >= 10 and $jp <= 20){
	echo "$jp_2_3/$banyak_tunda";
}else{
	echo "$jp_3_3/$banyak_tunda";
}}
echo " * ";
if ($om < 1){
	echo "$om_1_3/$banyak_tunda";
}else{
	if($om >= 1 and $om <= 3){
	echo "$om_2_3/$banyak_tidak";
}else{
	echo "$om_3_3/$banyak_tunda";
}}
echo " * ";
if ($ja < 5){
	echo "$ja_1_3/$banyak_tunda";
}else{
	if($ja>= 5 and $ja <= 7){
	echo "$ja_2_3/$banyak_tunda";
}else{
	echo "$ja_3_3/$banyak_tunda";
}}
echo "<br>
= $lu_3 * $jp_3 * $om_3 * $ja_3 = $hitung_tunda<br>
<br>
<b>Langkah 4 : Membandingkan hasil antar Kelas<br>
P( X | Ci ) * P(Ci)</b><br><br>
P(X|HASIL KEPUTUSAN = “YA”) * P(HASIL KEPUTUSAN = “YA”)<br> 
= $hitung_ya * $data_ya <br>
= $hasil_ya <br>
<br>
P(X|HASIL KEPUTUSAN = “TIDAK”) * P(HASIL KEPUTUSAN = “TIDAK”)<br> 
= $hitung_tidak * $data_tidak <br>
= $hasil_tidak <br>
<br>
P(X|HASIL KEPUTUSAN = “TUNDA”) * P(HASIL KEPUTUSAN = “TUNDA”)<br> 
= $hitung_tunda * $data_tunda <br>
= $hasil_tunda <br>
<br>
";
if ($hk == 1){
	echo "Maka Hasil Ketentuan = <b>YA</b> <br>";
}elseif($hk==2){
	echo "Maka Hasil Ketentuan = <b>TIDAK</b> <br>";
}else{
	echo "Maka Hasil Ketentuan = <b>TUNDA</b> <br>";
}
echo"<br>
<a href='index.php'><button type='submit'>
 Kembali
</button></a>";
}else{ 
die("Terdapat Kesalahan : " . mysqli_error($query));}
?>
