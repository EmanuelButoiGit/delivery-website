<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "proiect");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 $num=$_POST['num'];
 $pre=$_POST['pre'];
 $tel=$_POST['tel'];
 $loc=$_POST['loc'];
 $ora=$_POST['ora'];
 $piz=$_POST['piz'];
 $buc=$_POST['buc'];
 $mar=$_POST['mar'];
 
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
 
// Attempt insert query execution
$sql = "INSERT INTO comenzi (Nume,Prenume,Numar,Locatia,Ora,tipul,bucati,marime,pret) VALUES ('$num','$pre','$tel','$loc','$ora','$piz','$buc','$mar','$total')";
$sql2 = "INSERT INTO sofer (Nume,Prenume,Numar,Locatia,Ora,tipul,bucati,marime,pret) VALUES ('$num','$pre','$tel','$loc','$ora','$piz','$buc','$mar','$total')";

if(mysqli_query($link, $sql)&&mysqli_query($link, $sql2)&&($num!='')&&($pre!='')&&($tel!='')&&($loc!='')&&($ora!='')&&($piz!='')&&($buc!='')&&($mar!='')){
    include "index_succes.htm";
} 

else{
    echo"eroare!";
}
 
// Close connection
mysqli_close($link);



?>