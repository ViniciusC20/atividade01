<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";
try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Parabéns Conectado com Sucesso!!!";
} catch(PDOException $e) {
  echo "Falha na Conexão: " . $e->getMessage();
}
?>