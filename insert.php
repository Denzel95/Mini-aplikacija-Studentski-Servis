<?php


#Uspostavljanje veze sa serverom
$connect=mysqli_connect('localhost','root','');

mysqli_select_db($connect,"web");

#ubacivanje podataka u tabele
$sql="INSERT INTO student (ime,prezime,smjer,kor_ime,lozinka)
VALUES ('Petar','Petrovic','Elektronika','petar.petrovic', 'qwerty89'),
		('Jovan', 'Jovanovic','Telekomunikacije','jovan.jovanovic','test123')";

		if(mysqli_query($connect,$sql)){
	echo "Uspjesno uneseni podaci!";
}else{
	echo "Neuspjesno uneseni podaci!" .mysqli_error($connect);
}


$sql="INSERT INTO predmet (naziv_predmeta,smjer,ECTS)
VALUES ('Digitalna Elektronika','Elektronika', '7'),
		('Fizika','Telekomunikacije','7'),
		('OET','Elektronika','6'),
		('Matematika','Telekomunikacije','8'),
		('Teorija Elektricnih Kola','Elektronika','6'),
		('Digitalna Tehnika','Elektronika','7'),
		('Principi Programiranja','Telekomunikacije','6'),
		('Signali i Sistemi','Telekomunikacije','8'),
		('Elektricna Mjerenja','Elektronika','5'),
		('Impulsna Elektronika','Elektronika','7'),
		('Racunarske Mreze','Telekomunikacije','8')";


if(mysqli_query($connect,$sql)){
	echo "Uspjesno uneseni podaci!";
}else{
	echo "Neuspjesno uneseni podaci!" .mysqli_error($connect);
}


mysqli_close($connect);



  ?>