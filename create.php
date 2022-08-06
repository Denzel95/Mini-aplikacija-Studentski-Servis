<?php


#Uspostavljanje veze sa serverom
$connect=mysqli_connect('localhost','root','');
//kreiranje baze

$sql="CREATE DATABASE web";
if (mysqli_query($connect,$sql)){

	echo "Uspjesno kreirana baza!";
}else
{
	echo "Neuspjesno kreirana baza!" .mysqli_error($connect);
}


mysqli_close($connect);

?>
