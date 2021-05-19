<?php

include "total";


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "proiect");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if($mar=="single"){
	$total=25*$buc;
}

if($mar=="duo"){
	$total=35*$buc;
}

if($mar=="family"){
	$total=45*$buc;
}

if($mar=="party"){
	$total=55*$buc;
}


$total=$_POST['pret'];
$sql = "INSERT INTO suma (pret) VALUES ('$total')";


mysqli_close($link);

?>