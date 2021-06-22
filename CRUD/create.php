<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";
try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO atividade01 (Nome, Disciplina, nota1, nota2)
  VALUES ('Vinicius', 'arquitetura', '10', '10')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Cadastro feito com sucesso, você já pode olhar algumas notas!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
