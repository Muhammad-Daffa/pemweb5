<?php
include 'incdata.php';
if(empty($_POST['nama']) || empty($_POST['email'])){
	header("Location:redirecttugaskosong.php");
}else{
	echo "<center>Nama: ".$_POST['nama']."</center><br>";
	echo "<center>Email: ".$_POST['email']."</center><br>";
	echo "<center>Hari: ".$hari."</center><br>";
	echo "<center>Jam: ".$jam."</center><br>";
	echo "<center>Tanggal Login: ".$tanggal."</center><br>";	
}

?>