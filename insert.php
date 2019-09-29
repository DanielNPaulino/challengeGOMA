<?php

/* db connection */
$connect = mysqli_connect("localhost", "root", "", "goma")or die("cannot connect"); 

/* variable connection to form inputs */
$Name = $_POST['nome'];
$NIF = $_POST['nif'];
$Telefone = $_POST['telefone'];
$Morada = $_POST['morada'];
$Localidade = $_POST['localidade'];
$Country = $_POST['country'];

/* table values insertion */
mysqli_query($connect, " INSERT INTO cliente (Nome, NIF, Telefone, Morada, Localidade, Country) VALUES ('$Name', '$NIF', '$Telefone', '$Morada', '$Localidade', '$Country')");

/* values insertion verification */
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Cliente adicionado!</p>";
} else {
	echo "Cliente não foi adicionado!<br />";
	echo mysqli_error ($connect);
}
?>




