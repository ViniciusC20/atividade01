<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar</title>
</head>
<body>

<?php
$Nome = $_POST['Nome'];
$Disciplina = $_POST['Disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$Id = $_POST['Id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";

//conexao infinity
//$servername = "sql111.epizy.com";	
//$username = "epiz_28940811";	
//$password = "fI810qHSVRc";
//$dbname = "epiz_28940811_atv";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO atividade01 (Nome, Disciplina, nota1, nota2)
  VALUES ('$Nome', '$Disciplina', '$nota1', '$nota2')";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "Cadastro feito com sucesso, você já pode olhar algumas notas!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('Location:./read.php');

?>
<br> <br>
      <a href = "index.php">voltar </a> <br>
</body>
</html>