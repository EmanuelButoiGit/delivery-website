<?php 

include "conect.php";
 
 $num=$_POST['num'];
 $pre=$_POST['pre'];
 $tel=$_POST['tel'];
 $loc=$_POST['loc'];
 $ora=$_POST['ora'];
 $piz=$_POST['piz'];
 $buc=$_POST['buc'];
 $mar=$_POST['mar'];



$sql="UPDATE comenzi SET Nume='$num' ,Prenume='$pre' , Numar='$tel', Locatia='$loc' ,Ora='$ora', tipul='$piz', bucati='$buc',marime='$mar'";
$rez=mysqli_query($conexiune,$sql);
	if($rez){
		include "modifica.php";
		}
	else
		echo "Eroare !";
		
?>