<!DOCTYPE html>
<html>
<head>
	<title>Pregled</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>



<?php


#ako je pritisnuto dugme submit,pozivamo stranicu root.php. Podatke saljemo POST metodom

if (isset($_POST['submit'])) {

	echo "<h1 class='heading'>Pregled predmeta za korisnika: " .$_POST['kor_ime']."</h1>";

$connect=mysqli_connect('localhost','root','');

mysqli_select_db($connect,"web");

#vr.promjenljivih uzimamo iz $_POST[kor_ime i lozinka]
	#2 varijable,svaka ce dobiti vrijednost unosa
	$kor_ime=$_POST['kor_ime'];
	$lozinka=$_POST['lozinka'];

	#provjera prijave: kor_ime i lozinka. Ono sto je stiglo iz POST-a koristimo za selekciju
	$sql="SELECT * FROM student where kor_ime='$kor_ime' and lozinka='$lozinka'";

	#salje upit i izvrsava sql iskaz
	$upit=mysqli_query($connect,$sql);

	#ako ima redova
	$row=mysqli_num_rows($upit);

	#ucitavanje reda rezultata
	$row=mysqli_fetch_array($upit);
	

			// ispis 
			echo "<p class='student'><b> Student: " . $row['ime']. " " . $row['prezime'] . "<br></b></p>"; 

			echo "<p class='course'><b>Smjer: " . $row['smjer'] . "<br><br><b></p>";

    #ako je ispravan login, pravimo novi upit nad bazom
	if ($row==true) {
		

		#upit
		$sql="SELECT predmet.naziv_predmeta,predmet.ECTS from predmet, student
			WHERE predmet.smjer=student.smjer AND student.kor_ime='$kor_ime' ORDER BY predmet.naziv_predmeta";

			$upit=mysqli_query($connect,$sql);

			#ako ima redova
			if (mysqli_num_rows($upit) > 0) {		

				echo "<table border = '1'><tr>
					<th>Naziv predmeta</th>
					<th>ECTS</th>";

					#ispis podataka,asocijativni niz
				while($row=mysqli_fetch_array($upit)){

					?>
					<tr>
						<td><?php echo $row['naziv_predmeta']; ?> </td>
						<td style="text-align: center;"><?php echo $row['ECTS']; ?></td>
					</tr>
					<?php
					}
					
					echo "</table>";
				
			}else{
				echo "Ne postoje podaci u bazi!";			}
		
	}
	else{
		#za neispravan unos podataka

		header('location:login.php');
		
	}

	}

?>

<?php
		#odjava
	
	echo "<br><a href='logout.php' class='signout'><input type=button id='signout' value=Odjava name=logout></a>";

	mysqli_close($connect);
	?>