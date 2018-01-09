<?php

  include 'conexao.php';
  if (isset($_REQUEST['produto'])) {
    $codigo = $_REQUEST['produto'];

    echo $codigo;
  }
        
  try {

    $stmt = $conn->prepare("SELECT codigo FROM produtos");
    $stmt->execute();


      while($row = $stmt->fetch()) {
              
        //echo "<option> $row[codigo]</option>";
         echo json_encode($row);
        //echo "Código: " . $row['codigo'] . " Descrição: ". $row['descricao'] . "<br>";
        //echo "Descrição: " . $row['descricao'] . "<br>";
        //echo "Valor: " . $row['valor'] . "<br>";
      }
            
      } catch (Exception $e) 
      {
        echo "Erro de conexao({$e->getMessage()})";
      }

?>