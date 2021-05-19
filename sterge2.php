<?php
	include "conect.php";
	$id=$_GET['id'];
	$sql2="DELETE FROM sofer WHERE ID='$id'";
	//echo $sql;
	//die();
	$rez2=mysqli_query($conexiune,$sql2);
	if($rez2)
		header("Location: afisare_sofer2.php");
	else
		echo"Problema la ...";
?>