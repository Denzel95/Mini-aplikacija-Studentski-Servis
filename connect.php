<?php

// povezivanje sa bazom

$serverName = "localhost";
$userName = "root";
$pass = "";
$dbName = "web";


// uspostavljanje veze sa inicijalizovanim parametrima
$connect = mysqli_connect($serverName, $userName, $pass, $dbName);
#Uspostavljanje veze sa serverom
// $connect=mysqli_connect('localhost','root','');

#provjera
if(!$connect){
	die("Konekcija neuspjesna!") .mysqli_connect_error();
}else{
	#echo "Uspjesna konekcija!";
}

#zatvaranje konekcije
mysqli_close($connect);

?>