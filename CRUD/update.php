<title>Update</title
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";

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
