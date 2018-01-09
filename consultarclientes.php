<?php

include 'conexao.php';
session_start();
$idcliente;
$nome;
$idade;
$email;
$telefone;

  if (isset($_POST['entrar'])){
    $nome = $_POST['email'];

    $stmt = $conn->prepare("SELECT * FROM clientes where email like :email"); 
    $stmt->execute(array('email' => $nome));
                  
      while($row = $stmt->fetch()) {  
        $idcliente = $row['cliente_id'];
        echo "<br>";
        echo "Nome: " . $nome = $row['nome'] . "<br>";
        echo "Idade: " . $idade = $row['idade'] . "<br>";
        echo "Email: " . $email = $row['email'] . "<br>";
        echo "telefone: " . $telefone = $row['telefone'] . "<br>";      
      } 

  }
  
?>