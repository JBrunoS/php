<?php 
	include 'conexao.php';
	$id;
	$codigo;
	$descricao;
	$valor;


	try {

              $stmt = $conn->prepare("SELECT produto_id, codigo, descricao, valor FROM produtos"); 
              $stmt->execute();

                  
                      while($row = $stmt->fetch()) {
                      echo "<br>";
                      echo $row['codigo']. " = " . $row['descricao']."<br>";
            
                      } 
                              
          } catch (Exception $e) {
            echo "Erro de conexao({$e->getMessage()})";
          }

 ?>