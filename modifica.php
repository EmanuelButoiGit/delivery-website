<!DOCTYPE html>
<html lang="ro">

<head>
<title>Pizzeria Biancaneve</title>
<link rel = icon type = image/x-icon href =logo.png >
<meta charset="UTF-8">
<link rel=stylesheet type=text/css href=style_afisare.css>

</head>

<body>

<br><br>

<header>
<img src=logo.png alt=logo width=150 height=150>
<div>Pizzeria Biancaneve</div>
</header>

<br><br>


<nav>
<ul>
	<li><a href=index_admin.htm>Acasă</a></li>
	<li><a href=afisare.php>Afisează/Șterge Comenzi</a></li>
	<li><a href=inserare.htm>Adaugă Comenzi</a></li>
	<li><a href=modifica.php>Modifica Comenzi</a></li>
	<li><a href=afisare_sofer.php>Comenzi livrate</a></li>
	<li><a href=index_login.htm><img src=user.png alt=logo width=15 height=15> Logout</a></li>
</ul>
</nav>

<?php
	include "conect.php";
	$sql="SELECT * FROM comenzi ORDER BY Ora";
	$rez=mysqli_query ($conexiune,$sql);
?>

<div class=bloc_continut>
	<div class=continut>
		<div class=centreaza>
		<div class=blackbox>
			<?php
				echo"<br>";
				$i=1;
				$j=1;
				$nume=[];
				
				while($row=mysqli_fetch_array($rez))
				{		
	
						echo"
						".$i."
						".$row['Nume']."
						".$row['Prenume']."
						".$row['Numar']."
						".$row['Locatia']."
						".$row['Ora']."
						".$row['tipul']."
						".$row['bucati']."
						".$row['marime']."
						".$row['pret']."";echo" RON";
						echo"<a href=form_modifica.php?id=".$row['ID']."> Modifică</a>";
						
						echo"<br>";
						echo"<br>";
					
				}   
				
				
				
			?>	
		</div>
		</div>
	</div>
</div>

<footer>
<ul>
	<li><a href="https://www.google.com/maps/place/Pizzeria+Biancaneve/@45.7698071,24.1855748,15z/data=!4m5!3m4!1s0x0:0x48176298d5f61e6c!8m2!3d45.7701012!4d24.1885445?hl=ro" target=_blank><img src=locatie.png alt=locatie width=20 height=20> Locație</a></li>
	<li><a href=https://www.facebook.com/pizzeria.biancaneve.selimbar target=_blank><img src=fb.png alt=fb width=20 height=20> Pagină de Facebook</a></li>
	<li><div class=ob_footer> Sunați acum: </div></li>
	<li><a href=callto:0757683425><div class=ob2_footer>0757 683 425</div></a></li>
	<li><a href=callto:0730507741><div class=ob2_footer>0730 507 741</div></a></li>
	<li><div class=ob3_footer>Site made by Butoi Emanuel-Sebastian &copy 2019</div></li>
</ul>
</footer>
	
</body>
</html>