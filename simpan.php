<?php

include "koneksi.php";

$nm_ukm	= $_POST["nm_ukm"];
$lu		= $_POST["lu"];
$jp		= $_POST["jp"];
$om		= $_POST["om"];
$ja		= $_POST["ja"];
$hk		= $_POST["hk"];

if($add = mysql_query( "INSERT INTO modal (nm_ukm, lu, jp, om, ja, hk) VALUES ('$nm_ukm', '$lu', '$jp', '$om', '$ja' , '$hk')")){
	header("Location: index.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysql_error());

?>
