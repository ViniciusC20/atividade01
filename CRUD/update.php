<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>

<?php
$update = $_GET['Id'];

$servername = "sql202.epizy.com";
$username = "epiz_28967693";
$password = "NnX5picn7fb";
$dbname = "epiz_28967693_atv";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE atividade01 SET Disciplina='Sistema Operacional(S.O)' WHERE id=2";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . "Parabéns banco atualizado com sucesso!!!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<br> <br>
<a href = "http://localhost/atividade01/index.php">voltar </a> <br>
      
</body>
</html>