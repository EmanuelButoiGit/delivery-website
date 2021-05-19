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
 
// Attempt insert query execution
$sql = "INSERT INTO comenzi (Nume,Prenume,Numar,Locatia,Ora,tipul,bucati,marime) VALUES ('$num','$pre','$tel','$loc','$ora','$piz','$buc','$mar')";

if(mysqli_query($link, $sql)&&($num!='')&&($pre!='')&&($tel!='')&&($loc!='')&&($ora!='')&&($piz!='')&&($buc!='')&&($mar!='')){
    include "afisare.php";
} 


 
// Close connection
mysqli_close($link);



?>