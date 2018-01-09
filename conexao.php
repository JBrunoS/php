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

<?php
/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO dados1 (
                        nome, 
                        data_nas,
                        sexo,
                        rg,
                        cpf,
                        email,
                        telefone,
                        celular,
                        rua,
                        numero,
                        complemento,
                        bairro,
                        cep,
                        cidade,
                        estado,
                        pais, 
                        senha) 
                        VALUES (
                        'Joao',
                        '1992-02-23',
                        'M',
                        '200753',
                        '60522479324',
                        'joaobruno.sousa@yahoo.com',
                        '98888888',
                        '986856334',
                        'A',
                        '1737',
                        'casa',
                        'null',
                        'null',
                        'null',
                        'null',
                        'Brazil',
                        '12345678'
                        )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
*/
?>
