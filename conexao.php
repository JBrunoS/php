<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "database";

$mysqli = new mysqli($host, $usuario, $senha, $db);
$conexao = mysqli_connect("localhost", "root", "", "database");

if ($mysqli->connect_errno) {
	echo "Erro";
}


?>

<?php

$servername = "localhost";
$username = "root";
$password = "";

try {

	$conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Deu certo";
	
} catch (Exception $e) {
	echo "Erro ao conectar: " . $e->getMessage();
}


?>
