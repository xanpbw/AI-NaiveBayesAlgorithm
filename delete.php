<?php

include "koneksi.php";

$id	= $_GET["id"];

if($delete = mysql_query("DELETE FROM modal WHERE id='$id'")){
	header("Location: index.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysql_error());

?>
