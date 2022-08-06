<?php


#Uspostavljanje veze sa serverom
$connect=mysqli_connect('localhost','root','');

mysqli_select_db($connect,"web");


#kreiranje tabela
$sql="CREATE TABLE student(

	id_studenta int(20) auto_increment PRIMARY KEY,
	ime varchar(255),
	prezime varchar(255),
	smjer varchar(255),
	kor_ime varchar(255),
	lozinka varchar(255)
		)";

		if(mysqli_query($connect,$sql)){

	echo "Uspjesno kreirana tabela!";
}
else{
	echo "Neuspjesno kreirana tabela!" .mysqli_error($connect);
}
		
	$sql="CREATE TABLE predmet(

	id_predmeta int(20) auto_increment PRIMARY KEY,
	naziv_predmeta varchar(255),
	smjer varchar(255),
	ECTS int(20)
		)";	



if(mysqli_query($connect,$sql)){

	echo "Uspjesno kreirana tabela!";
}
else{
	echo "Neuspjesno kreirana tabela!" .mysqli_error($connect);
}


mysqli_close($connect);

?>