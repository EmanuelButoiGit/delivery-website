<?php
	include "conect.php";

	$c=$_POST['nota'];
	$e=$_POST['idu'];
	
	$sql="UPDATE note SET nota='$c' WHERE id_nota='$e'";
	
	$rez=mysqli_query($conexiune,$sql);
	if($rez)
		header("Location:sterge_modi.php");
	else
		echo"Problema la ...";
?>