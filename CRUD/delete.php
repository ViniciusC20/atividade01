<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
</head>
<body>
 
<?php
$delete = $_GET['Id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1atividade";
try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  // sql to delete a record
  $sql = "DELETE FROM atividade01 WHERE id= $delete";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "dados excluidos com sucesso!!!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<br> <br>
      <a href = "index.php">voltar </a> <br>
</body>
</html>