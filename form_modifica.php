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

<div class=bloc_continut>
	<div class=continut>
		<div class=centreaza>
		<div class=blackbox>
			<?php
			include "conect.php";
			$id=$_GET['id'];
			$sql="SELECT * FROM comenzi WHERE id='$id'";
			$rez=mysqli_query($conexiune,$sql);
			$row=mysqli_fetch_array($rez);
			


			
			?>
				<form action="update.php" method="post">
						  Nume:<br>
						  <input type="text" name="num" required value= <?php echo $row['Nume']; ?>><br><br>
						  Prenume:<br>
						  <input type="text" name="pre" required value= <?php echo $row['Prenume']; ?>><br><br>
						  Număr de telefon:<br>
						  <input type="text" name="tel" required value= <?php echo $row['Numar']; ?>><br><br>
						  Locatia mea:<br>
						  <input type="text" name="loc" required value= <?php echo $row['Locatia']; ?>><br><br>
						  Ora:<br>
						  <select name="ora" style="width:160px; height:25px;" required value= <?php echo $row['Ora']; ?>>
							<option value=11:00>11:00</option>
							<option value=11:30>11:30</option>
							<option value=12:00>12:00</option>
							<option value=12:30>12:30</option>
							<option value=13:00>13:00</option>
							<option value=13:30>13:30</option>
							<option value=14:00>14:00</option>
							<option value=14:30>14:30</option>
							<option value=15:00>15:00</option>
							<option value=15:30>15:30</option>
							<option value=16:00>16:00</option>
							<option value=16:30>16:30</option>
							<option value=17:00>17:00</option>
							<option value=17:30>17:30</option>
							<option value=18:00>18:00</option>
							<option value=18:30>18:30</option>
							<option value=19:00>19:00</option>
							<option value=19:30>19:30</option>
							<option value=20:00>20:00</option>
							<option value=20:30>20:30</option>
							<option value=21:00>21:00</option>
							<option value=21:30>21:30</option>
						  </select><br><br> 

						  Comanda mea:<br><br>
						  tipul pizzei<br> 
						  <select name="piz" style="width:160px; height:25px;" required value= <?php echo $row['tipul']; ?>>
						  <option value=margherita>margherita</option>
						  <option value=nutella>nutella</option>
						  <option value=biancaneve>biancaneve</option>
						  </select><br><br> 
						  
						  bucăți<br> 
						  <input type="text" name="buc" required value= <?php echo $row['bucati']; ?>><br><br>
						  mărime<br> 
						  <select name="mar" style="width:160px; height:25px;" required value= <?php echo $row['marime']; ?>>
						  <option value=single>single</option>
						  <option value=duo>duo</option>
						  <option value=family>family</option>
						  <option value=party>party</option>
						  </select><br><br><br>

						  <input type="submit" value="Trimite Comanda" style="width:200px; height:50px; color:white; font-family:Verdana; font-size:large; background-color:black;">
						</form>
			
			
		
				
				

		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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