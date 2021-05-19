<?php
	include "conect.php";
	$id=$_GET['id'];
	$sql="DELETE FROM comenzi WHERE ID='$id'";
	$sql2="DELETE FROM sofer WHERE ID='$id'";
	//echo $sql;
	//die();
	$rez=mysqli_query($conexiune,$sql);
	$rez2=mysqli_query($conexiune,$sql2);
	if($rez && $rez2)
		header("Location: afisare.php");
	else
		echo"Problema la ...";
?>